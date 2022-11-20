// 1_________os module provide useful information for interacting with thfe operating system as w ell as the computer

// to get the os module, we have tfo require itf from ...

const { Console } = require('console');
const os=require('os');
// now we can access multiple os method  , by simply typing os.

const user=os.userInfo();
console.log(user); 
/*gives info about the user*/

// method to get tfhe system uptime in seconds

const Uptime=os.uptime();
console.log(`the system uptime is ${Uptime} seconds`);

// let acces more  method using the obj

const accessOs={
    name:os.type(),
    release:os.release(),
    totalMem:os.totalmem(),
    freeMem:os.freemem()
}
console.log(accessOs);


// 2___________Interacting with file system using the patyh module

const path=require('path');

// sep method returns the sign seperating your files
console.log(path.sep) 

// now let us look at the jooin method, now let us use our join method and find the text.txt file
const filePath=path.join('./testPathJoinMethod', 'test', 'test.txt');



console.log(filePath);


// we can also get the basename which is the last portion of ooour filePath


const testBaseName=path.basename(filePath);
console.log(testBaseName);

// resolve method gives us information about absolute filepath

let absFilePath=path.resolve(__dirname, './testPathJoinMethod','test','test.txt');
console.log(absFilePath);

//(3) => let us talk about the fs file sytem module;
// there are two types the sync and async;

// has primarily two methods readFileSync and writeFileSync: the readFileSync dive deep and give the require path and even file as specify by you the programmer
// mean whikle writeFileSync does prety much the same thing but create a new file for you when specify if not created yet

const {readFileSync, writeFileSync}=require('fs');


// so now let us try to get the first.txt from the content folder remember to add the encoding for which the default one is 'utf8



let first=readFileSync('./content/first.txt' ,'utf8');

let second=readFileSync('./content/second.txt','utf8');

console.log(first, second);

writeFileSync('./content/default_file.txt', `this will be created on the screen : ${first} and ${second}`, {flag:'a'});

// the 3rd argument helps us not to wipe away the prev text on the second   param or file to be created
