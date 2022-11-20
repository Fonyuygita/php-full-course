const express=require('express');

const app=express();
const path=require("path");

// since express is a function that gives u a bunch of methods and properties
// we are going to explore the following properties ands methods i express

// app.get: by default all browsers are ste up having a get request
// app.post
// app.put
// app.delete
// app.all
// app.use
// app.listen

app.listen(5000, ()=>{
    
    console.log("server is listening ok!");

});

// 1. app.get(): to use this we pass the url or path we want to get from our browser, then second param will be a callback function with two params req, and res

app.use(express.static('./psc website'))
app.get('/', (req,res)=>{
    console.log("user hit the resource");
    res.send("server is listening,  ok boss")

})
app.get('/about', (req, res)=>{
    // res.status(200).send('About page');
    res.sendFile(path.resolve(__dirname, './psc website/about.html'))  
    res.sendFile(path.resolve(__dirname, './psc website/Allcss/about.css'))  

})

app.get('/login', (req, res)=>{
    res.status(200).send('it is now working')
})
// using app.all
app.all('*', (req,res)=>{
    res.status(404).send("resource not found")
})

