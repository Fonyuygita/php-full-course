const http=require('http');
const { serialize } = require('v8');

const server=http.createServer((req, res )=>{
    console.log(req);
    res.write("welcome here")
    console.log("user hit the server");
})

server.listen(6000)