// differences betweenn async code and sync code


const {readFileSync, writeFileSync}=require('fs');

console.log("start");

const first=readFileSync('../content/first.txt', 'utf8');

const second=readFileSync('../content/second.txt', 'utf8');

// now let us write the file  using writeFileSync

// writeFileSync('../content/neutralFile.txt', 'here is the resut : ' + first + ", " + second )


writeFileSync('../content/anotherOne.txt', `another file is created ${first}, ${second} `, {flag:'a'})

console.log("done with this task")
console.log("starting with the next task");