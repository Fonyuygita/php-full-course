// let require express and yse it in our app

const express=require('express');

// let us store our express function as app

const app=express();

// let us export our data and use here

const  {Data}=require('./Data')

console.log(app);

// let us create a simple api in our home page to say using app.get



app.get('/', (req, res)=>{
    res.json(Data);

})
// 

app.listen(5000, ()=>{
    console.log("server is running");
})