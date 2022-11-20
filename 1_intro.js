//  THE CONCEPT OF GLOBALS IN NODEJS
// in node there is no window objet because there is no browser
//  GLOBAL  variables  means that there are accesible    everywhere, where ever you are in your app you can have access to those variables


//  SOme few node globals out of many are

// __dirname : path to current directory
// __filename: file name
// require:  functions to use  modules (CommonJS)

// module:  info about current module (file)

// process : info about environment where the programm is being executed

// console.log(module);


//  MODE  MODULES: 

/*it will be literaly insane to jap your code in one file, so that is where node module comes in , which helps o split your code in various files in which  you can export using module. export since module is an object that contains some data nlike require,  export, id and much more do console.log(module) to see object*/

// Using Commonjs every file is amodule(by default)

// Module -  Encapsulation  code means only sharing minimum, every file in node is a module

const {name1, name2}=require('./names');
const fxn=require('./function');
const {myList:{favColor,favTeam,faveSong,favMusicien},myNames}=require('./AlternativeModuleExport')

console.log(favColor);
console.log(favTeam);
console.log(faveSong);
console.log(favMusicien);
for(var item of myNames){

    console.log(item);
}


require('./modulefxnExport');

//  so we do conole we will see the folowing result  { name1: 'serge', name2: 'Faith' }




fxn(name1);
fxn(name2);



// create 
