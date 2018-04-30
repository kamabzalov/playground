var fs = require('fs');
console.log('Starting');
//var content = fs.readFileSync('sample.txt');
//console.log("Content " + content);
console.log('Carry on');

var json = fs.readFileSync('sample.json');
console.log(json);

var config = JSON.parse(json);
console.log(config);
console.log(config.name);

//fs.writeFileSync("sample.txt", "Hello, world");

fs.writeFile("sample.txt", "Hello, Kamil", function(error){
	console.log("Written file");
});

console.log("Finish");

var conf = JSON.parse(fs.readFileSync("sample.json"));
//console.log("Data " + conf);

fs.watchFile("sample.json", function(current, previous){
	console.log("Config changed");
	config = JSON.parse(fs.readFileSync("sample.json"));
	console.log("New config: " + config);	
});