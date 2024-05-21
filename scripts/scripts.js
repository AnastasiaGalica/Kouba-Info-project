function show1(){
  document.getElementById("show-1").style.display= "block";
  document.getElementById("show-2").style.display= "none";
}
function hide1(){
  document.getElementById("show-1").style.display= "none";
}

function show2(){
  document.getElementById("show-2").style.display= "block";
  document.getElementById("show-1").style.display= "none";
}
function hide2(){
  document.getElementById("show-2").style.display= "none";
}

function closeMenu(){
  document.getElementById("show-menu").style.left= "100vw";
}
function showMenu(){
  document.getElementById("show-menu").style.left= "0";
}

window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 200) {
    document.getElementById("arrow-up").style.opacity = "1";
    document.getElementById("menu-bars").style.top = "5rem";
    document.getElementById("search").style.top = "9rem";

    

  } else {
    document.getElementById("arrow-up").style.opacity = "0";
    document.getElementById("menu-bars").style.top = "8rem";
    document.getElementById("search").style.top = "12rem";

    
  }

  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 100) {
    document.getElementById("navbar-wrapper").style.top = "0";
    document.getElementById("navbar-wrapper").style.opacity = "0.8";
  } else{
    document.getElementById("navbar-wrapper").style.top = "4vh";
    document.getElementById("navbar-wrapper").style.opacity = "1";
  }
}