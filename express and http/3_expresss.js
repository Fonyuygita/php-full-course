//  DEEP  dive to node js Api

const express=require('express')

const app=express();

// get our data from data.js

const {Data} =require('./Data');

let data=Data;

app.listen(5000, ()=>{
    console.log("app is listening");
})
app.get('/', (req,res)=>{
    res.send("<h1>Hello World<span><a href='/api/data/1'>see Data</a></span></h1>")
})

// we use the url /api/data

app.get('/api/data/', (req, res)=>{

    // let us map over the products
     const products=data.map(data=>{
        const {id,Author, title }=data;
        return {id, Author, title}
     })

     res.json(products)

})

    // in express we have what we call route params, which comes immediately, after the data collected from the api, that is  '/api/data/id'=> here we are going to talk about the id param first before other params

    // id params

    // but we do not need to hard code the product any time we need to compare id's or whatever and send back the product

    // so we just use '/api/data/:dataId'

    app.get('/api/data/:dataId', (req, res)=>{
        console.log(req);
        // console.log(req.params);

        const {dataId}=req.params;

        const findProduct=data.find(p=>p.id===Number(dataId));
        res.json(findProduct)

        // if(!findProduct){
        //     return res.status(404).send("<h2>Not found please</h2>")
        // }

    })


    // what if the user types noncence as the url



   


// how do we even start working with Api's ?
// building a real life app, you'wll not be required to use evrything in the app, so we have to be selective

// woring with search queries

app.get('/api/v1/query', (req, res)=>{
console.log(req.query)
const {search, limit}=req.query;

let sortedProducts=[...data]

if(search){
    sortedProducts=sortedProducts.filter(p=>{
        return p.title.startsWith(search);
    })
}

if(sortedProducts.length<1){
    // what if we are receiving an empty array as a response

    // res.status(404).send("product didnt match");
   return res.status(200).json({
        success:true,
        data:[]
    });


}

if(limit){
    sortedProducts=sortedProducts.slice(0, Number(limit))
}

res.status(200).json(sortedProducts);
})

// query string params will look as shown and you can add as many as you want

//http://localhost:5000/api/v1/query?name=%22jude%22&id=3

// if the user wanta to search for a specific products, he or she musy provide the search query params as well as llimiting
// lilke so: http://localhost:5000/api/v1/query?search=a&limit=2

