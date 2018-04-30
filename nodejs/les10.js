var mongo = require("mongodb");
var dbHost = "127.0.0.1";
var dbPort = mongo.Connection.DEFAULT_PORT;

var fs = require("fs");
var express = require("express");
var config = JSON.parse(fs.readFileSync("config.json"));
var host = config.host;
var port = config.port;

var app = express.createServer();

function getUser(id, callback) {

	var db = new mongo.Db("nodejs-intro", new mongo.Server(host, port, {}));

db.open(function(error){
	console.log("We are connected:" + dbHost + ":" + dbPort);

	db.collection("user", function(error, collection){
		console.log("collection");
		
		collection.insert({
			id: "1",
			name: "Kamil",
			twitter: "kamabzalov",
			email: "ok_kam90@mail.ru"
		}, function(){
			console.log('success insert');
		});


		collection.find({"id": id.toString()}, function(error, cursor){
			cursor.toArray(function(error, users){
				if(users.length == 0) {
					callback(false);
				} else {
					callback(user[0]);
				}
			});
		});

	});
});

}

getUser(1, function(user){
	if(!user) {
		console.log("no found");
	} else {
		console.log(user);
	}
})