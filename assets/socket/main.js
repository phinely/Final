var http = require("http");

var fs = require("fs");
var url = require("url");
var path = require("path");



var server = http.createServer(function(req,res){
    var page = url.parse(req.url).pathname;
    var filepath = path.join(__dirname,page);


    if(page ==="/"){
        fs.readFile("index.html",'utf-8',function(error,content){
            res.writeHead(200,{"Content-Type":"text/html"});
            res.end(content);
        });
    }
    else
    {
        fs.readFile(filepath,"utf-8",function(error,content){
            res.end(content);
        })
    }
})

var io = require("socket.io").listen(server);

io.on("connection",function(socket){
    console.log("new user");
});

server.listen(8080);