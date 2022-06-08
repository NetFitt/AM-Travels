const box = document.querySelector('.box');
const images = document.querySelectorAll('.box img');
// nav elements
const logo = document.getElementById('logo');
const navBtn = document.querySelector('.nav-btn');
const bar1 = document.querySelector('.bar1');
const bar2 = document.querySelector('.bar2');
const bar3 = document.querySelector('.bar3');
const menuBars = document.getElementById('menu-bars')
const overlay = document.getElementById('overlay')
const nav1 = document.getElementById('nav-1')
const nav2 = document.getElementById('nav-2')
const nav3 = document.getElementById('nav-3')
const nav4 = document.getElementById('nav-4')
const nav5 = document.getElementById('nav-5')
const nav6 = document.getElementById('nav-6')
const navItems = [nav1, nav2, nav3, nav4, nav5, nav6];
//btns
const prevbtn = document.querySelector('#prevBtn');
const nextbtn = document.querySelector('#nextBtn');


//counrter
let counter = 1;
const size = images[0].clientWidth;
box.style.transform = 'translateX(' + (-size * counter) + 'px)';
//btn
nextbtn.addEventListener('click', () => {
    if (counter >= images.length - 1) return;
    box.style.transition = "transform 0.4s ease-in-out";
    counter++;
    box.style.transform = 'translateX(' + (-size * counter) + 'px)';

});

prevbtn.addEventListener('click', () => {
    if (counter <= 0) return;
    box.style.transition = "transform 0.4s ease-in-out";
    counter--;
    box.style.transform = 'translateX(' + (-size * counter) + 'px)';

});

box.addEventListener('transitionend', () => {
    if (images[counter].id === 'last-clone') {
        box.style.transition = "none";
        counter = images.length - 2;
        box.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
    if (images[counter].id === 'first-clone') {
        box.style.transition = "none";
        counter = images.length - counter;
        box.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
});
// scroll
window.addEventListener('scroll', () => {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        console.log(document.body.scrollTop);
        logo.style.display = "none";
        bar1.style.backgroundColor = "rgb(233, 123, 20)";
        bar2.style.backgroundColor = "rgb(233, 123, 20)";
        bar3.style.backgroundColor = " rgb(233, 123, 20)";
    } else {
        logo.style.display = "inline-block";
        bar1.style.backgroundColor = "white";
        bar2.style.backgroundColor = "white";
        bar3.style.backgroundColor = " white";
    }
});
// nav bar animation
function navanimate(direction1, direction2) {
    navItems.forEach((nav, i) => {
        // console.log(`slide-${direction1}-${i + 1}`, `slide-${direction2}-${i + 1}`);
        nav.classList.replace(`slide-${direction1}-${i + 1}`, `slide-${direction2}-${i + 1}`)
    })
}
function togglebar() {
    menuBars.classList.toggle('change')
    overlay.classList.toggle('changeActive')
    if (overlay.classList.contains('changeActive')) {
        overlay.classList.replace('slide-right', 'slide-left')
        //animation 
        navanimate('out', 'in');
    } else {
        overlay.classList.remove('slide-left');
        overlay.classList.add('slide-right');
        navanimate('in', 'out');
    }
}
// add eventlistenner
menuBars.addEventListener('click', togglebar)
navItems.forEach((nav) => {
    nav.addEventListener('click', togglebar)
})

$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });