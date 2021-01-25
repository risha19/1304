"use strict";
//
//let cup = {}; //создание нового пустого объекта
//cup = {
//    color: "white", 
//    filled: false, 
//    liquid: null,
//    handle: 1,
//    material: "ceramic",
//    cleanness: 0.75,
//    spoon: {material: "metal", cleannes: 0.8},//объект может содержать другой объект
//    
//    fill: function(liquidType) {
//        if (!cup.filled) {
//            console.log("В кружку налили " + liquidType);
//            cup.filled = true;
//            cup.liquid = liquidType;
//            
//        } else {
//            console.log("Кружка уже наполнена");
//        }
//    },
////упрощенный синтаксис
//    drink() {
//       if (cup.filled) { //this.filled
//           console.log("Вы выпили " + cup.liquid); //this.liquid
//           cup.filled = false; //this.filled = false;
//           cup.liquid = null; //this.liquid = null;
//       } else {
//           console.log("Нечего пить");
//       }
//   /*    document.querySelector("h1").onclick = function() {
//           console.log(this);
//       }*/
//    },
//};
//
//console.log(cup.color);
//cup.color = "black";
//console.log(cup.color);
//
//cup.fill("Чай");


////--------------Методы примитивов
//---------------------Числа -----------------------
//Округление с помощью библиотеки Math

let a = 3.5743434;
let floor = Math.floor(a);
console.log(floor);
let round = Math.round(a);
console.log(round);
let ceil = Math.ceil(a);
console.log(ceil);

let fixed = a.toFixed(1);
console.log(fixed);

//Получение числа из строки
let width = "100px";
width  = parseInt(width);
console.log(width);

let fontSize = "1.5em";
fontSize = parseFloat(fontSize);
console.log(fontSize);
//--------------- Получение случайного числа
console.log(Math.random());
//получение случайного целого числа  от 0 до 10
let random = 10 + Math.floor(Math.random() * 10);
console.log(random);

//Строки, Методы строк

let string = "Что-то, в одной строке";

let user = {name: "Василий", role: "Модератор"};
let badge = `
<div>
   <h2>Имя: ${user.name}</h2>
   <h5>Роль: ${user.role}</h5>
</div>
`;
console.log("\u{1F605}");

//-----------Длина строки и доступ к символам----
let str = "foobar";
console.log(str.length);
console.log(str[0]);
console.log(str[1]);

let num = 325;
num = String(num);
console.log(num[0]);


let result = "";
for(let i = 0; i < num.length; i++) {
    result = result + num[i]*10 + " ";
}
console.log(result); //30 20 50

//изменение регистра

let str1 = "Съешь булок";
let newStr = str1.toUpperCase();
console.log(newStr);
let str2 = "Съешь Еще Булок";
let newStr2 = str2.toLowerCase();
console.log(newStr2);



