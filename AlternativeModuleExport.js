// if we create an array of names  like so

// const myNames=['fonyuy', 'Jude', 'Fomonyuy'];

// and also, if we create an object like so
// const myList={
//     faveSong:"Jesus Christ Super Star",
//     favTeam:'Barcelona',
//     favColor:'blue',
//     favMusicien:"Bob Mardley"
// }


// now using our previous notion, we can export it like so
// first our array
// module.exports=myNames;

// and our object
// module.exports=myList;


//  but now here is the alternative, instead of setting like a variable, we can just import it, to keep things shorter
// for instance, exporting our array. will be something like this
module.exports.myNames=['fonyuy', 'Jude', 'Fomonyuy'];


// and export our object llike so
module.exports.myList={
    faveSong:"Jesus Christ Super Star",
    favTeam:'Barcelona',
    favColor:'blue',
    favMusicien:"Bob Mardley"
}

// or if we want to rename the myList obj we can export as follows
// module.exports.renaming=myList;
// let us receive everthing in the 1_intro.js
