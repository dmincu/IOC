var username = "", password = "";

function login(form){
    $.ajax({
	  type: "post",
	  url: "http://localhost:8080/signin",
	  data: {username: username, password: password},
	  success: function (data) {
		console.log(data);
	  },
	  error: function(jqXHR, textStatus, errorThrown) {
        alert('Error: ' + jqXHR+ ' ' + textStatus + ' ' + errorThrown);
      },
	  dataType: "json"
	});

	return false;
}
