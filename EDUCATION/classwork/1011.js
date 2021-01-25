"use strict";

////   ---------Поиск подстроки-----
//
//let bulki = "Съешь еще этих мягких французских булок";
//console.log(bulki.indexOf("еще"));//возвращает индекс начала подстроки
//console.log(bulki.indexOf("Съешь"));
//
//console.log(bulki.includes("мягких")); //true
//console.log(bulki.startsWith("Съешь"));
//console.log(bulki.endsWith("печенек")); //false
//
//function checkAndGetIndex(needle, haystack) {
//    if(haystack.includes(needle)) {
//       return haystack.indexOf(needle); 
//    } else {
//        return false;
//    }
//}
//console.log(checkAndGetIndex("этих", bulki));

//получение подстроки
//
//let string = "Съешь еще этих мягких французских булок";
//let result1 = string.slice(6, 9);
//console.log(result1);
//
//console.log(string.slice(-5, -2));
//console.log(string.slice(15));
//
//let str = string.slice(0, 5);
//
//str += " " + string.slice(-5);
//console.log(str);
//
//console.log(string.substring(6, 9));//еще
//console.log(string.substring(9, 6));//еще
//
//console.log(string.substr(6, 3));//еще


//массивы

//объект как ассоциативный массив
//
//let user = {name: "Василий", lastname: "Петров"};
//
////Создание массива
//
//let arr = [];
//let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
//console.log(fruits[1]);
//fruits['1'] = "Персик";
//console.log(fruits);
//
//let randomArray = [42, "булки", true, [1, 2, 3, 4], {name: "Василий", lastname: "Петров"}, null ];
//console.log(randomArray);
//
////Многомерный массив
//
//let tickTackToe = [
//    ['О', 'X', 'X'],
//    ['O', 'X', 'O'],
//    ['O', 'O', 'X'],
//];
//
//let admins = {
//    creator: ["anonym"],
//    admin: ["ВаСя123", "petya13"],
//    moderator: ["nan123"],
//};
//let cart = [
//    {name: "Название продукта", desc: "Описание", price: "цена",images: ["1.img", "2.img"], 
//existance: true, count: 2},    
//{name: "Название продукта", desc: "Описание", price: "цена",images: ["1.img", "2.img"], 
//existance: true, count: 2},
//{name: "Название продукта", desc: "Описание", price: "цена",images: ["1.img", "2.img"], 
//existance: true, count: 2},    
//];

//let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
//let str1 = '';
//for (let i = 0; i <fruits.length; i++) {
//   str1 += fruits[i]  + "\n"; //работет с самами элементами(может их менять)
//}
//console.log(str1);
//
//let str2 = "";
//let cards = document.createElement('div');
//document.body.append(cards);
//cards.style.display = "flex";
//cards.style.justifyContent = "space-around";
//for (let fruit of fruits) {
//  //  str2 += fruit + "\n"; //работает с копиями элементов,не изменяет элементы и массив 
//    let card = document.createElement('h2');//создаем карточки для каждого элемента
//  card.innerHTML = fruit;
//  cards.append(card);
//}
//console.log(str2);

//методы работы с массивами
//pop / push  shift/unshift 
//
//let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
//let lastFruit = fruits.pop(); //удаляет элемент из конца массива и записывает его в другой массивж
//console.log(fruits);
//console.log(lastFruit);
//fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
//let newFruit = "Персик";
//fruits.push(newFruit);
//console.log(fruits);
//
//fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
//let firstFruit = fruits.shift();
//
//console.log(fruits);
//console.log(firstFruit);
//
//fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
//newFruit = "Персик";
//fruits.unshift(newFruit);
//console.log(fruits);

//let fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
//fruits.splice(1, 1);
//console.log(fruits);
//
//fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
//fruits.splice(1, 0, "Персик", 'Виноград');
//console.log(fruits);
//
//fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
//fruits.splice(1, 1, "Персик");
//console.log(fruits);
//
////splice изменяет массив
//
////-----------slice-----
// fruits = ["Яблоко", "Ананас", "Банан", "Груша", "Апельсин"];
////slice работает с копией массива
//let fruitsCopy = fruits.slice();
//let shelf1 = fruits.slice(0, 3);
//console.log(shelf1);
//console.log(fruits);
//
////concat - объединяет массивы
//let arr1 = [1, 2, 3];
//let arr2 = [4, 5, 6];
//let newArr = arr1.concat(arr2); 
//console.log(newArr);
//
////reverse - переворачивание массивов
//let arr3 = [1, 2, 3, 4, 5, 6];
//arr3.reverse();
//console.log(arr3);
//
////строки в массив и обратно
////необходимо из вразы я -учу - JS сделать фразу "JS учу я"
//let str = "Я-учу-JS";
//let array = str.split("-");//пробел - по словам, '' = по символам
//console.log(array);
//array.reverse();
//let str1 = array.join(" ");
//console.log(str1);
//
////пример задачи
////напишите функцию countOfOdd, которая принимет массив arr как
////фргумент и возвращает количество нечет элементов
//
//function countOffOdd(arr) {
//    let count = 0;
//    let odd = [];
//    for (let item of arr) {
//        if(item % 2 != 0) {
//            count++;
//            odd.push(item);
//        }
//    }
//    return count;
//    //return odd;
//}
//console.log(countOffOdd([1, 2, 3, 7, 12, 15, -10]));


//let arr = [];
//let str = prompt("Введите фамилию, имя и отчество");
//arr = str.split(' ');
////console.log(arr);
//let strNew = arr[0] + " " + arr[1].slice(0, 1) + arr[2].slice(0, 1);
//console.log(strNew);


//let str = 'первый символ строки';
////alert()
//let fist = str[0].toUpperCase() + str.slice(1);
//console.log(fist);
//
//let firstUp = str[0].toUpperCase() + str.substr(1);
//console.log(firstUp);


//let arr = [];
//let str = "";
//for(let i = 1; i < 10; i++) {
//     str += "x"; 
//     arr.push(str);
//
//
//    
//}
//console.log(arr);
//
//function same (a,b) {
//  if (a == b) {
//    return true;
//  } else {
//    return false;
//  }
//}
//alert(same(5, 5));
//
//let arr = [2, 4, 4, 4, 8, 8, 4, 12, 12, 14];
//arr.push(+prompt('Введите 10 чисел через запятую'));
//alert(arr);
//let count = 0;
//for (let i = 0; i < arr.length; i++) {
//    if (arr[i] === arr[i - 1]) {
//        count++;
//    }
//}
//alert(count);


let arr = [];

for(let i = 1; i <= 10; i++) {
   arr.push(+prompt('Введите ' + i + '-е число'));
}

console.log(arr);
// 2,4,4,4,4,4,5,6,6,7
// 2,5,6,6,7,4,4,4,4,4
let current = 0;
let max = 1;

for (let i = 1; i < arr.length; i++) { 
    if (arr[current] !== arr[i]) {
        if (max < i - current) {
            max = i - current;
        }
        
        current = i;
    } else {
        if (max < i - current) {
            max = i - current;
        }
    }
}

console.log(max);


let arr = [2, 4, 4, 4, 8];
arr.push(+prompt('Введите 1 число'));
arr.push(+prompt('Введите 2 число'));
arr.push(+prompt('Введите 3 число'));
arr.push(+prompt('Введите 4 число'));
arr.push(+prompt('Введите 5 число'));
arr.push(+prompt('Введите 6 число'));
arr.push(+prompt('Введите 7 число'));
arr.push(+prompt('Введите 8 число'));
arr.push(+prompt('Введите 9 число'));
arr.push(+prompt('Введите 10 число'));
console.log(arr);
let count = 1;
let max = 1;
for (let i = 1; i <= arr.length; i++) {
    if (arr[i - 1] === arr[i]) {
        
         count++;
    } else {
        
        count=1;
    }
    
    if (count > max ) {
        max = count;
    }
}
console.log(max);



