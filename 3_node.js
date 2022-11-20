const {readFile}=require('fs')

const testPromises=(text)=>{
    return new Promise((resolve, reject)=>{

        readFile(text, 'utf8', (err, data)=>{
            if(err){
                reject(err)
            }

            else{
                resolve(data)
            }
        })
    })
}

testPromises('./content/first.txt').then((data)=>console.log(data)).catch(err=>console.log(err));