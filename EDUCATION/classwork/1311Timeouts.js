"use strict";
//еще  раз про функции
//функция может быть рекурсивной (вызывать саму себя)

//let fruits = ['Яблоко', 'банан', 'Груша'];
//let cart = [];
//
//addFruitsToCart(fruits);
//function addFruitsToCart(array) {
//    if (array.length === 0) {
//        return;
//    }
//    let fruit = array.pop();
//    cart.push(fruit);
//    return addFruitsToCart(array);
//}
//console.log({fruits:fruits, cart: cart});

//-----------функцию можно записать как переменную
//
//let func = function () {//конструкция безымянной ф-ии
//    console.log("some func");
//};
//func();
////можно использовать сокращение в виде стрелочной ф -ии
//let f2 = () => {
//    console.log("some func");
//};
//f2();
////функции-коллбэки 
//let array = ['Яблоко', 'банан', 'Груша'];
//
////checkGreen(array, () => {
////    console.log("Я нашел яблоко");
////});
//function checkGreen(fruits, callback) {
//    console.log("Начинаю проверку");
//    for(let i = 0; i <fruits.length; i++) {
//        if (fruits[i] == "Яблоко") {
//            callback(); //вызываем функцию, которую мы приняли параметром
//            return true;
//        }
//    }
//    return false;
//}
//
////checkGreen(array, showApple());
//checkGreen(array, showApple);
////поэтому ф-ю передаем без круглых скобок, чтобы не вызывать ее ,
////а передать набор инструкций, заложенный в этой ф-и
////сначала выполнится showApple(), потом checkGreen(). rheukst crj,rb
////немедленно вызовут функцию
////ф-ю chowApple в момент вызова checkGreen() нам вызывать не надо
////Она должна быть вызвана позже, внутри ф-ии checkGreen
//function showApple() {
//    console.log("Я нашел яблоко");
//}
//
////что делать, если ф-я ожидает от нас параметр
//function userFindApple(user) {
//    console.log(user + " нашел яблоко");
//}
//checkGreen(array, function() {//функция обертка
//    userFindApple("superAdmin");
//    //если необходимо все же передать параметры, то можно использовать ф-ю - обертку.
//    //тогда мы закладываем не саму ф-ю userFindApple, а тело ф-и, которое вызовет userFindApple
//    //с нужным парам-ми
//})


//-------------Планирование------------
//-----------setInterval()  setTimeout()
//setTimeout() - позволяет отложить однократное действие
//setTimeout(function() { //1й параметр - что должно произойти. 2й параметр - 
//   alert("Рекалама");  
//}, 5000);             //через какое время это произойдет мс
//
////setInterval() - позволяет повторять действие через каждый промежуток времени
//setInterval(function() {
//    console.log("Реклама в консоли");
//}, 1000);
//
//setTimeout(()=> {
//    console.log("Запускаю интервал");
//    setInterval(() => {
//        console.log("Еще одна реклама");
//    }, 1000);
//}, 3000);


//----------clearTimeout clearInterval
//чтобы отменить Timeout или interval, необходимо при создании  посместить их в переменную
//
//let myTimeout = setTimeout(() => {
//    console.log("Прошло 10 сек");
//}, 1000);
//
//setTimeout(() => {
//    console.log("Очищаю myTimeout");
//    clearTimeout(myTimeout);
//}, 3000);
//
//let adventInterval = setInterval(() => {
//    console.log("Ненавязчивая реклама");
//}, 1000);
//
//setTimeout(() => {
//    console.log("Adblock");
//    clearInterval(adventInterval);
//}, 5000);
//
//-------------счетчик----------
//let box = document.querySelector(".box");
//let counter = 0;
//let counterInterval = setInterval(() => {
//    counter++;
//    box.style.opacity = counter + "%";
//    console.log(counter);
//    if(counter == 100) {
//        clearInterval(counterInterval);
//       let reverseInterval =  setInterval(() => {
//            counter--;
//            box.style.opacity = counter + "%";
//             console.log(counter);
//             if (counter == 0) {
//                 clearInterval(reverseInterval);
//             }
//        }, 100);
//    }
//}, 100);

//----------Рекурсивный setTimeout
//нужен, когда необходимо варьировать время
//setTimeout(handler, 2000);
//
//function handler() {
//   let randomTime = 1000 + Math.floor(Math.random() * 3000);
//   console.log("Следующий вызов через " + randomTime + " ms");
//    setTimeout(() => {
//       return handler();
//   }, randomTime);
//   
//}

//------Браузерные события;


//let string = prompt("Введите числа");//запрашиваем число и обозначаем его как строку
//let arr = string.split("");//приводим строку к массиву и разделяем по элемементам
////console.log(arr);
///*if ( findFive(arr) ) {
//  alert("да");
//} else {
//  alert("нет");
//}*/
//
//function findFive(arr) {
//  for (let i of arr) {// задаем цикл с условием перебрать все i и найти 5
//    if (i == '5') {
//        return("да");
//    
//    } 
//    
//  }
//  return("нет");
//}
//
//alert(findFive(arr));

//let str = "-";
//for (let i = 1; i < 10; i++) {
//    str =  str + i + "-"; 
//}
//console.log(str); 

