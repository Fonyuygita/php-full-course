const authorize=(req, res, next)=>{
    console.log("yogou are authorize");
    next()
}

module.exports=authorize;