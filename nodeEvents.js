// when working with brfowser javascript the big part of our work is to handle that, which is known as event  driven programming

// 1. creating our edvent
const eventEmitter=require('events');

// we are getting back a class,and at this point
// 1.if you want to create something custom you need to extend the class or if you want to listen for the event, just create the instance.


// so let create the instance for our case

const customEmiter=new eventEmitter();

// in this class we have somany properties and method but we are going to stick with (on=> which listen for an event) and (emit=> which emit an event)

customEmiter.on('response', ()=>{
    console.log("data r eceived");
})

// after getting the reponse event we just need to emit itS

// order matters, we first listen for an event then we emit it 

customEmiter.emit('response')


