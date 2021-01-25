"use strict";

//console.log( 5 > 2);
//console.log( 5 < 2);
//console.log(5 >= 2);
//console.log(5 <= 2);
//console.log(5 == 2);
//console.log( 5 != 2);
//
//console.log(5 === 5);
//
//let a = 5;
//console.log(a == true);//false
//alert("5");
//
////Сравнение строк
//
//console.log("Василий Петров" == "ВасилийПетров");//false
//console.log("Василий Петров" == "Василий Петров ");//false
//console.log("Василий Петров" == "ВасилийПетров");//true
//
////Символы разных регистров не равны
//console.log("A" == "a"); //false
//console.log("username" == "Username"); //false
//
////-----------Условие if
//let userAge = prompt("Сколько вам лет?");
//if(userAge >= 18) {
//    alert("Вам можно на сайт!");
//    console.log("user вошел на сайт!");
//} else {
//    alert("Вам нельзя на сайт!");
//}
//console.log("Была проведена проверка возраста");
//
////пользователь вводит номинал монеты (1, 2, 5, 10) цифрами , нам необходимо отобразить его словами
//let nominal = prompt("Какой номинал монеты(1, 2, 5, 10)");
//if(nominal == "10") {
//    alert("Десять рублей");
//} else if (nominal == "5") {
//    alert("Пять рублей");
//} else if (nominal == "2") {
//    alert("Два рубля");
//} else if (nominal == "1") {
//    alert("Один рубль");
//} else {
//    alert("Неверный номинал");
//}
////Множественный else if можно заменить на конструкцию 
////switch-case
////только для сравнения
//switch (nominal) {
//    case "10":
//        alert("десять рублей");
//        break;
//    case "5":
//        alert("Пять рублей");
//        break;
//    case "2":
//        alert("Два рубля");
//        break;
//    case "1":
//        alert("Один рубль");
//        break;
//    default:
//        alert("Неверный номинал"); 
//}

//логические операторы
// || - или, && - и, ! - не


//if(true || false) {
//    alert("1"); //true
//}
//
//if(true && false) {
//    alert("2");
//}
//if(true && true && true) {
//    alert("3");
//}
//
//if(!false) {
//    alert("4");
//}
//
//let visitTime = prompt("Сколько сейчас времени?(от 0 до 24");
//if (visitTime >= 9 && visitTime<=18) {
//   alert("Офис открыт, заходите");
//} else {
//    alert("Офис закрыт, приходите завтра ");
//}
//-------------Циклы------
//while
//let i = 1;
//while(i <= 10) {
//   console.log(i);
//   i++;
//}
//
////do while
//let j = 1;
//do {
//    console.log(j);
//    j++;
//} while (j < 0) //сначала сделает, потом проверит. Сделает условия хоть 1 раз
//
////for  
//for(let i = 1; i <= 10; i++) {
//    console.log(i);
//}
//
//// break;
//
//for(let i = 0; i < 10; i++)
//{
//    if (i == 5) {
//        break; //принудительно завершает цикл
//    }
//    console.log(i);
//}
////continue;
//for(let i = 0; i < 10; i++) {
//    if (i == 5) {
//        continue;
//    }
//    console.log(i);
//}
//
////Вложенный цикл
//
////составим таблицу умножения
//for (let i = 1; i <= 10; i++) {
//    for( let j = 1; j <= 10; j++) {
//        console.log(i + "x" + j + "=" + i*j);
//    }
//}
//

//let number = prompt("Введите число");
//
//let summ = 0;
//for (let i = 0; i < number.length; i++) {
//     summ +=  number[i];
//}
//alert(summ);
//
//let arr = [1, 2, 3, 4, 5];
//let str = "";
//for (let i = 0; i < arr.length; i++) {
//    str += arr[i];
//}
//alert(str);
/*
let sum =  +prompt("Введите сумму");
let percent = prompt("Введите процент");
let firstyear = sum + (sum * percent / 100);
let secondyear = firstyear + (firstyear * percent / 100);
let thirdyear = secondyear + (secondyear * percent / 100);
let forthyear = thirdyear + (thirdyear * percent / 100);
let fifthyear = forthyear + (forthyear * percent / 100);
alert(firstyear + "\n" + secondyear + "\n" + thirdyear + "\n" + forthyear + "\n" + fifthyear);
*/
