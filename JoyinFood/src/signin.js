var username = "", password = "";

function login(form){
    $.ajax({
	  type: "POST",
	  url: "http://localhost:8080/signin",
	  data: {username: username, password: password},
	  success: function (data) {
		console.log("Success");
	  },
	  dataType: "json"
	});
}
