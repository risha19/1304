"use strict";

let paragraph = document.querySelector(".text");
//изменение стилей
function changeStyle() {
  //  let paragraph = document.querySelector(".text");
    console.log(paragraph);
    paragraph.style.color = "red";
    paragraph.style.textAlign = "center";
    paragraph.style.backgroundColor = "pink";
    paragraph.style.border = "2px solid darkred";
    paragraph.style.padding = "15px";
}


function getStyle() {
    //let paragraph = document.querySelector(".text");
    console.log(paragraph.style.textTransform);//не можем получить значение св-в из css или теге style с помощью тега style
    console.log(paragraph.style.padding);//можем получить св-во, которые мы уже задали в js
    return paragraph.style.textTransform;
}

function removeStyle() {
    //отменить все стили-пустые ''
    paragraph.style.color = "";
    paragraph.style.textAlign = "";
    paragraph.style.backgroundColor = "";
    paragraph.style.border = "";
    paragraph.style.padding = "";
}
//получить все свойства
//------getComputedStyle(document.body);---

//вычисленные св-ва 
//функция прибавляет margin
function addMargin(amount) {
    let computedStyle = getComputedStyle(paragraph);
    console.log(computedStyle);
    let margin = computedStyle.marginTop;//получаем значение marginTop
    margin = parseInt(margin);//убираем ед измер из значения
    paragraph.style.marginTop = margin + amount + "px"; 
}
//
function changeText() {
    let articleText = document.querySelector(".article-text");
    console.log(articleText.innerHTML);
    articleText.innerHTML = "Привет мир";
}

function addComment() {
    let commentContainer = document.querySelector(".comments");
    commentContainer.innerHTML += "<p>Комментарий</p>";
}

function changeText2() {
    let articleText = document.querySelector(".article-text");
    console.log(articleText.innerHTML);
    articleText.innerText = "<b>Привет мир</b>";//не отрабатывает теги
}

function changeText3() {
    let articleText = document.querySelector(".article-text");
    let text = "<script>location.href = 'https://yandex.ru'</script>";
    articleText.textContent = text;
    }
    
    
//работы с атрибутами
function calculate() {
       let inputArg1 = document.querySelector(".first-argument"); 
       let inputArg2 = document.querySelector(".second-argument");
       let resultInput = document.querySelector(".result-input");
    //чтобы считать значение инпут , необходимо обратиться к value
       let arg1 = +inputArg1.value;//получаем значение из инпут
       let arg2 = +inputArg2.value;//тип данных - строка
       let result = arg1 + arg2;
       resultInput.value = result;
       
       //к атрибутам, сущ в HTML, можно обратиться как к свойствамю
       //чаще всего это value, src и href
}


function calculateMoney() {
    //собственные атрибуты невозможно считать как св-во
    let resultInput = document.querySelector('.result-money-input');
    let rub100 = document.querySelector(".money [cost='100']");
    let rub200 = document.querySelector(".money [cost='200']");
    let rub100Cost = +rub100.getAttribute('cost');
    let rub200Cost = +rub200.getAttribute('cost');
    let result = rub100Cost + rub200Cost;
    resultInput.value =  result;
    
    
}

function change200RubPicture() {
    let rub200 = document.querySelector(".money img[cost='200']");
    console.log(rub200.src);
    console.log(rub200.getAttribute("src"));
    rub200.setAttribute("src", "https://i0.newstube.ru/9863175rc640x360");
//меняем картинку на другую
}


//работа с классами
let classParagraph = document.querySelector(".classes p");
function getClass() {
    console.log(classParagraph.classList);
    return classParagraph.className;
}

function changeClass1() {
    classParagraph.className = "text-rigth p-3 my-5 text-danger";
}

function changeClass2() {
    classParagraph.classList.add("text-primary");
}

function removeClass1() {
    classParagraph.className = '';
}

function removeClass2()
{
    classParagraph.classList.remove("mt-3");
}

//как узнать, что делать с элементом и какой инструмент использовать
//1.Изменение стилей (.style) - изменить стили CSS 2ч. 1,8
//2. Работа с атрибутами(.getAttribute()  .setAttribute()) - src, value , href
////elem.value  .getAttribute("src")  .setAttribute("src", img/banana.jpg)
////или необходима до инф-я об элементе (например, ID)
////2.1 Работа с классами (.classList .className)
//3. Внутреннее содержимое (.innerHTML)
//4. Изменение документа(создать/удалить/переместить элемент)
function transferinnerhtml() {
  let leftinput = document.querySelector(".task1-input");
  let inputresult = document.querySelector(".input-result");
};


