// create your server

const http=require('http');

// using the event Emiter Api
const server=http.createServer()

// emits request event
// subscribe to/ listen to it /response to it

server.on('request', (req, res)=>{
    res.end('welcome')
    console.log('is it working?');
})


// now listen to your events from the server

server.listen(2000)

server.emit('request')