var username = "", password = "";



function login(form){
    $.post({
	  url: "http://localhost:8080/signin",
	  data: {username: username, password: password},
	  success: function (data) {
		console.log("Success");
		debugger;
	  },
	  dataType: "json"
	});
}
