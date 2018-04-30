var fs = require("fs");
var config = JSON.parse(fs.readFileSync("sample.json"));
var host = config.host;
var port = config.port;

var express = require("express");

var app = express();

app.use(app.router);
app.use(express.static(__dirname));

app.get("/", function(request, response){
	response.send("hello express");
});

app.get("/hello/:text", function(request, response) {
	response.send ("Hello " + request.params.text);
});


var users = {
	"1": {
		"name": "Kamil Abzalov",
		"twitter:" "kamabzalov"
	},

	"2": {
		"name": "Alexey Navalny",
		"twitter": "navalny"
	}
}

app.get("/user/:id", function(request, response){
	var user = users[request.params.id];
	if(user) {
		response.send("<a href=http://twitter.com" + user.twitter">Follow " + user.name + "</a>");
	} else {
		response.send("Sorry. User not found", 404);
	}
});

app.listen(port, host);