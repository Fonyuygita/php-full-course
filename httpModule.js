// welcome to the http mokdule here

const http=require('http');
const server= http.createServer((req, res)=>{
   // the ffirst  param represent incoming request, imagine a client is requesting fom a web browser,then you have the information and methods to use in the first object which is the request objects
console.log(req)
   // check for page
console.log(http)
   if(req.url==='/'){
      res.end("welcome to home page")
   }


   if(req.url==='/about'){
      res.end("here is the about page")
   }

   // if no response, what do we want to do?



res.end(
   `<h1>Oops!</h1>
   <p>Page you are looking for is not found</p>
   <a href="/">Home</a>`
)

   

   
 })

//  here we can specify the port we want to listen to
server.listen(2000)