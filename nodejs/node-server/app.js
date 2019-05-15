// const http = require("http");
// const fs = require("fs");
 
// http.createServer(function(request, response){
     
//     console.log(`Запрошенный адрес: ${request.url}`);
//     if(request.url.startsWith("/public/")){
//         const filePath = request.url.substr(1);
//         fs.readFile(filePath, function(error, data){
                 
//             if(error){
                     
//                 response.statusCode = 404;
//                 response.end("Resourse not found!");
//             }   
//             else{
//                 response.setHeader("Content-Type", "text/html");
//                 response.end(data);
//             }
//         })
//     }
//     else{
//         response.end("Hello World!");
//     }
// }).listen(3000);


const http = require("http");
const fs = require("fs");
 
http.createServer(function(request, response){
     
    fs.readFile("public/index.html", "utf8", function(error, data){
                 
        let message = "Изучаем Node.js"; 
        let header = "Главная страница";
        data = data.replace("{header}", header).replace("{message}", message);
        response.end(data);
    })
}).listen(3000);