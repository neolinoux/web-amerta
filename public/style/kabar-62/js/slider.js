const gridKabar = document.querySelectorAll('.grid-kabar');
var counter = 1;

document.getElementById('slide1').checked = true;

function nextSlide(){
    counter++;
    if(counter > gridKabar.length){
        counter = 1;
    } 
    document.getElementById('slide' + counter).checked = true;
    setTimeout(toTopFunction, 450);
}

function prevSlide(){
    counter--;
    if(counter < 1){
        counter = 1;
    }
    document.getElementById('slide' + counter).checked = true;
    setTimeout(toTopFunction, 450);
}

const lbtn1 = document.getElementById("lbutton1");
const lbtn2 = document.getElementById("lbutton2");
const lbtn3 = document.getElementById("lbutton3");

lbtn1.addEventListener("click", function(){
    counter = 1
    setTimeout(toTopFunction, 450);
})
lbtn2.addEventListener("click", function(){
    counter = 2
    setTimeout(toTopFunction, 450);
})

// lbtn3.addEventListener("click", function(){
//     counter = 3
//     setTimeout(toTopFunction, 450);
// })

function toTopFunction(){
    const contentStart = document.getElementById('contentList')
    contentStart.scrollIntoView();
}


