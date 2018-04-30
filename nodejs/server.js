var http = require('http');
var fs = require('fs');
console.log("Start");
var config = JSON.parse(fs.readFileSync("sample.json"));
var host = config.host;
var port = config.port;
var server = http.createServer(function(request, response){
	console.log("Request: " + request.url);
	fs.readFile(request.url, function(error, data){
		if(error) {
			response.writeHead(404, {"Content-type": "text/plain"});
			response.write("Not found");
		} else {
			response.writeHead(200, {"Content-type": "text/html"});
			response.end(data);
		}
	});
	
});

server.listen(port, host, function(){
	console.log("Listen " + host + ": " + port);
});

fs.watchFile('sample.json', function(){
	config = JSON.parse(fs.readFileSync("sample.json"));
	host = config.host;
	port = config.port;
	server.close();
	server.listen(port, host, function(){
		console.log("Now listen " + host + ": " + port);
	});	
});