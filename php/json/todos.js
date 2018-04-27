$("input[type='text']").keypress(function(event){//adds an event to listen
	if(event.which===13){//enter key is 13
		var todoText= $(this).val();

		$.ajax({
			"url":"create.php",
			"date":{"task":todoText},
			"type":"POST",
			"success":function(data){
				$("ul").append("<li id='" + data + "'>" + todoText + "</li>");
			}

		});

	}



});