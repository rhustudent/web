const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

/*  services script*/


/*script for see more see less beirut teraces*/
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "See more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "See less";
      moreText.style.display = "inline";
    }
  }
  /*script for see more see less skygate*/
  function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("Rmore");
    var btnText = document.getElementById("myBtn2");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "See more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "See less";
      moreText.style.display = "inline";
    }
  }
   /*script for see more see less adma*/
   function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("moreR");
    var btnText = document.getElementById("myBtn3");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "See more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "See less";
      moreText.style.display = "inline";
    }
  }


 /*script for see more see less Austria*/

   function myFunction4() {
          var dots = document.getElementById("dots4");
          var moreText = document.getElementById("RmoreR");
          var btnText = document.getElementById("myBtn4");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "See more";
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "See less";
            moreText.style.display = "inline";
          }
        }
		/* end of see services script*/