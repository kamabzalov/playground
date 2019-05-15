// const http = require("http");
// http.createServer(function(request, response) {
//     response.end("Hi");

// }).listen(3000, "127.0.0.1", function(){
//     console.log("Server start");
// });

// const os = require("os");
// const greeting = require('./greeting');
// const user = require('./user');
// const welcome = require('./welcome');
// // получим имя текущего пользователя
// let userName = os.userInfo().username; 
// console.log(userName);
// console.log(`Дата запроса: ${greeting.date}`);
// console.log(greeting.getMessage(userName));
// const userObj = new user('Камиль', 28);
// userObj.sayHi();

// welcome.getEveningMessage();
// welcome.getMorningMessage();

// global.console.log(today);

// let nodePath = process.argv[0];
// let appPath = process.argv[1];
// let name = process.argv[2];
// let age = process.argv[3];
 
// console.log("nodePath: " + nodePath);
// console.log("appPath: " + appPath);
// console.log();
// console.log("name: " + name);
// console.log("age: " + age);

// const fs = require('fs');

// const fileContent = fs.readFileSync("hello.txt", "utf8");
// console.log(fileContent);

// fs.readFile("hello.txt", "utf8", function(error,data){
//     console.log("async read");
//     console.log(data);
// });


// const Emitter = require("events");
// let emitter = new Emitter();
// let eventName = "greet";
// emitter.on(eventName, function(){
//     console.log("Hello all!");
// });
 
// emitter.on(eventName, function(){
//     console.log("Привет!");
// });
 
// emitter.emit(eventName);



// const fs = require("fs");
// const zlib = require("zlib");
  
// let readableStream = fs.createReadStream("hello.txt", "utf8");
  
// let writeableStream = fs.createWriteStream("hello.txt.gz");
  
// let gzip = zlib.createGzip();
  
// readableStream.pipe(gzip).pipe(writeableStream);


var http = require("http");
 
http.createServer(function(request, response){
     
    console.log("Url: " + request.url);
    console.log("Тип запроса: " + request.method);
    console.log("User-Agent: " + request.headers["user-agent"]);
    console.log("Все заголовки");
    console.log(request.headers);

    response.setHeader("UserId", 12);
    response.setHeader("Content-Type", "text/html; charset=utf-8;");
    response.write("<h2>hello world</h2>");
    response.end();
     
    response.end();
}).listen(3000);
