const gridKabar = document.querySelectorAll('.bungkus');
var counter = 1;

document.getElementById('slide1').checked = true;

function nextSlide(){
    counter++;
    if(counter > gridKabar.length){
        counter = 1;
    }
    document.getElementById('slide' + counter).checked = true;
}

function prevSlide(){
    counter--;
    if(counter < 1){
        counter = 1;
    }
    document.getElementById('slide' + counter).checked = true;
}

const lbtn1 = document.getElementById("lbutton1");
const lbtn2 = document.getElementById("lbutton2");
const lbtn3 = document.getElementById("lbutton3");

lbtn1.addEventListener("click", function(){
    counter = 1
})
lbtn2.addEventListener("click", function(){
    counter = 2
})
lbtn3.addEventListener("click", function(){
    counter = 3
})
// function lbtnclick(){
//     if(lbtn1)
// }



