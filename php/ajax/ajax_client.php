<!DOCTYPE html>
<html>

<head>

	<title>AJAX example</title>

	<script
  		src="http://code.jquery.com/jquery-3.3.1.min.js"
  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  		crossorigin="anonymous"></script>
</head>
<body>

	<h2>type pikachu, charmander or squirtle</h2>
	Input: <input type="text" id="myinput">
	<button id="mybutton">submit</button>

	<div id="jsonsection"></div>
	<div id="outputsection"></div>

	<script>
		$(document).ready(function(){
			$('#mybutton').click(function(){
				var myinput = $('#myinput').val();

				$.ajax(
						{
							'url':'ajax_server.php',
							/*URL where to send the ajax request*/
							'data':{'pokemon':myinput},
							/*json data to send*/
							'type':'GET',
							/*type od request: get or post*/
							'success':editHTML,
						
							/*what function to do after successful ajax*/	
						}
					);	

				});
			});
	

		function editHTML(jsondata){
			$('#jsonsection').html("Received:" + jsondata);

			if(jsondata != ""){
				var data = JSON.parse(jsondata);//converts json string to an oject

				var htmlstr = "<hr>";
				htmlstr += "Name:" + data.name + "<br>";
				htmlstr += "Type:" + data.type + "<br>";
				htmlstr += "Basic Move: " + data.moves.basic + "<br>";
				htmlstr += "Advance Move: " + data.moves.special + "<br>";
				$('#outputsection').html(htmlstr);

			}else{
				$('#outputsection').html("<hr> pokemon info not found");
			}
		}
	</script>

</body>
</html>