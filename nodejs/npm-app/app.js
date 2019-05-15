// const express = require('express');
// const app = express();

// app.get('/', (request, response) => {
//     response.end('express run');
// });

// app.listen('3000');


// let name = process.argv[2];
// let age = process.argv[3];
 
// console.log("name: " + name);
// console.log("age: " + age);


// const http = require("http");
 
// let message = "Hello World!";
// http.createServer(function(request,response){
     
//     console.log(message);
//     response.end(message);
     
// }).listen(3000, "127.0.0.1",()=>{
//     console.log("Сервер начал прослушивание запросов");
// });

// function display(data, callback){
 
//     // с помощью случайного числа определяем ошибку
//     var randInt = Math.random() * (10 - 1) + 1;
//     var err = randInt>5? new Error("Ошибка выполнения. randInt больше 5"): null;
     
//     setTimeout(function(){
//         callback(err, data);
//     }, 0);
// }
 
// console.log("Начало работы программы");
 
// display("Обработка данных...", function (err, data){
 
//     if(err) throw err;
//     console.log(data);
// });
 
// console.log("Завершение работы программы");
