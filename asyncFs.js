const {readFile, writeFile}=require('fs')


// with async function we need to provide a callback, which essentially means, we run that callback when we are done, or whatever computation we are doing is complete then, we run that callback, just like we normally do with addEventListener on a button, remember, when we click the btn before   the code in our callback functio is  being run


// so here our 3rd param here is going to be callback which is going to take two params, error and result, then we perform our computation on it

readFile('./content/second.txt','utf8', (err, result)=>{
    if(err){
        console.log(err);

        return;
    }

//    if there is no error, we want to console.log the result, now since we have not provide utff8 encoding, we are going to get a buffer like this

// <Buffer 75 74 66 38>

// so to solve this, add 'utf8' as the second param in our readFile

// we     can get fhe reult and store it  inside a var and run another callback for the first file

const second=result

readFile('./content/default_file.txt','utf8', (err, result)=>{
    if(err) {
        console.log(err)
        return;
    }

    // oherwise, we want to get the result for this
    const ouput=result;



    writeFile('./content/file.txt', 'write to file now', (err,result)=>{
        if(err){
            console.log(err)
        }

        const magic=result;

        console.log(magic)
    })
})
}) 