//1-------------------//
let minus = document.querySelector(".minus-button");
let counter = 0;
let plus = document.querySelector(".plus-button");
plus.onclick = countP;
minus.onclick = countM;
let valueInput = document.querySelector(".counter");
valueInput.value=0;

function countM() {
    if(counter >= 1) {
        counter--;
        valueInput.value = counter;
    } else {
        return;
    }
    
};
function countP() {
    counter++;
    valueInput.value = counter;
};


//2------------------//
//let buttonModal = document.querySelector(".open-modal-button");
//buttonModal.onclick = open;
//let modalWindow = document.querySelector(".modal-window");
//function open() {
//   modalWindow.style.display = "block"; 
//  
//}

//чужое
//let modalWindow = document.querySelector(".modal-window");
//let openButton = document.querySelector(".open-modal-button");
//openButton.addEventListener("click", () => {
//  modelWindow.setAttribute("style", "display: block");
//});

//3--------------------------//
let closeTimesButton = document.querySelector(".close-times-button");
let closeButton = document.querySelector(".close-button");
closeTimesButton.onclick = clouse;
closeButton.onclick = clouse;

function clouse() {
    modalWindow.style.display = "none";
}


//4-------------
let progressbarInner = document.querySelector(".progressbar-inner");
let startScrollbarButton = document.querySelector(".start-scrollbar-button");

startScrollbarButton.onclick = function () {
     
    progressbarInner.style.width = "100%";
    
};
