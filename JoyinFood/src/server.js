var http = require('http');
var urlparser = require('url');
var express = require("express");
var app = express();
 

app.get("/", function(req, res) {

});
 
app.get("/signin", function(req, res) {
  console.log("haaaeefsd");
  res.writeHead(200, {
    'Content-type': 'text/plain'
  });
  res.end('Works'); 
});

app.post("/signin", function(req, res) {
  console.log("asdf");
  res.writeHead(200, {
    'Content-type': 'text/plain'
  });
  res.end('Works');
});
 
var port = 8080;
app.listen(port, function() {
  console.log("Listening on " + port);
});

/*
http.createServer(function (request, response) {

  var path = urlparser.parse(request.url).pathname;

  console.log(request.data);

  if (path == "/signin") {
      response.writeHead(200, {'Content-Type': 'text/plain', 'Access-Control-Allow-Origin' : '*'});
      response.end('Success signin');
  } else {
	  console.log("Success");
  }

}).listen(8080);
*/
