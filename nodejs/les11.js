var https = require("https");
var options = {
	host: 'stream.twitter.com',
	path: '/1/statuses/filter.json?track=bieber',
	method: "get",
	headers: {
		"Authorization": "Basic " + new Buffer("IntroToNode:introduction").toString("base64")
	}
};

var request = https.request(options, function(response){
	var body = '';
	response.on("data", function(chunk){
		var tweet = JSON.parse(chunk);
		console.log("Tweet" + tweet.text);
	});
	response.on("end", function(){
		console.log("Disconnected");
	});
});
request.end();