window.addEventListener('scroll', ()=>{
document.querySelector('nav').classList.toggle('window-scroll', window.scrollY>0);

// taking care of our frequently ask questions using javascript


})
const faqs=document.querySelectorAll(".faq");
faqs.forEach(faq => {
  faq.addEventListener('click', ()=>{

    faq.classList.toggle('open');
    // change icon

    const icon=document.querySelector('.faqs-icon i' );
    if(icon.className==='uil uil-lock-open-alt'){
        icon.className="uil uil-minus";
    }
    else{

        icon.className="uil uil-lock-open-alt";
    }
  })
    
})

// let us work with our buttons first

// get our vars

const navmenu=document.querySelector(".nav_menu");
const openMenu=document.querySelector(".open-menu-btn")
const closeMenu=document.querySelector(".close-menu-btn");


// so let us show the menu first

openMenu.addEventListener('click', ()=>{

navmenu.style.display="flex";
openMenu.style.display="none";
closeMenu.style.display="inline-flex"

})

// so now let us write a function that will close our btns

const closebtn=()=>{

  navmenu.style.display="none";
  openMenu.style.display="inline-flex";
  closeMenu.style.display="none"
  

}

closeMenu.addEventListener('click', ()=>{
closebtn();
  
})
