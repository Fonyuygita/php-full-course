// middleware the heart of express
// middleware seats in between your req and res
// req<=>MiddleWare<=>res

const express=require("express");

const app=express();

const logger=require('./looger');
const authorize=require('./authorize')

// let us create our logger function here

// const logger=(req, res, next)=>{
//     const url=req.url;
//     const method=req.method;
//     const year=new Date().getFullYear();

//     console.log(url, method, year);
//     next()
// }
// you can see clearly as we pass our middleware in the middle of the path and the callback function, we can equally pass it in multiple routes which reduce the amount of code we can write, and pass in 3 arguments which need to be invoke behind the scene by node, and we have to end with app.send() or next() function to keep our app functioning, now we are going to put all of our code inside of another file, so that it can help in code readability

// instead of passing the function logger as a middleware inside of our routes, we can use the app.use and pass in our middleware and we can equally pass more than one function in our app.use

app.use([logger, authorize])

app.get('/', (req,res)=>{

    // but what if we want to set the same thing to another route, do we need to repeat the code, ofcourse no, we do not need to do that, we can just set up a function called logger and bundle everything inside, like shown above

    res.send("home page")
})

app.get('/about', (req, res)=>{
    res.send("About")
})
app.listen(5000, ()=>{
    console.log("app is listening");
})