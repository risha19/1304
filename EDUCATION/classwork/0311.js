//"use strict";//включаем строгий режим
//
////alert("1");
//
////---------------Создание переменных-----//
//let greeting = "Привет, мир!";
////нотации - camelCase  snake_case
////alert(greeting); 
//greeting = "Привет всем!";
////alert(greeting);
//
//let goodbye;
////alert(goodbye);
//goodbye = "Пока всем!";
////alert(goodbye);
//
//greeting = goodbye;
////alert(greeting);
////alert(goodbye);
//
////--------Константы------------------
//const myBithday = "19.01.1989";
////myBithday = "10.02.1524";
//
//const COLOR_RED = "#F00";
//const CLOSE_MESSAGE = "Вы уверены, что хотите выйти?";
//
////----Типы данных---------------
//let a = 42;
////alert(typeof(a));
//let a1 = Infinity; //бесконечность
//let a2 = NaN;
//
//let b = "foo";
//let b2 = 'bar';
//let b3 = `foo${b2}`; //b3 = `foobar`;
//let foobar = "foo" + "bar";//foobar
////alert(b+b2);
//let c = true; //или false
//
//let d; //undefined
//
//let e = null; //ничего
//
////5
//let user = {name: "Василий", lastname: 'Петров'};
//let fruits = ["Яблоко", "Ананас", "Груша", "Апельсин"];
//
////let result = 2 + "3"; "23"
//let u = true;
//let string = String(u);
////alert(string);
////alert(result);
//
////alert(String(fruits));
////alert(String(user)); //[object Object]
//console.log(user);
//console.log(String(user));
////Строковое преобразование - так как пишется
////Числовое 
//
//let i = "10";
//let o= "2";
//let res = i / o;
////alert(res);
//
//let x = "123abc";
////alert(Number(x));
//
//let s = Number(undefined);
//let l = Number(null);
//let f = Number(true);
//let g = Number(false);
//
//let result2 = +i + +o; 
//alert(result2);
//
//
// let a = Boolean(0);//f
// let b = Boolean(1);//t
// let c = Boolean(-1);//t
// 
// let d = Boolean("abc");//t
// let e = Boolean("");//f
// let f = Boolean(" ");//t
// 
// let g = Boolean(null);//f
// let h = Boolean(undefined);//f
// let i = Boolean(NaN);//f
// 
// ----------------Математические операторы
//
//let a = 4;
//let b = 2;
//
//let result1 = a + b;
//let result2 = a - b;
//let result3 = a / b;
//let result4 = a * b;
//let result5 = a % b; //остаток от деления
//let result6 = a ** b; //возведение в степень
//
////использование старого значения переменной
//let c = 5;
//c = c + 10;
//alert(c);
//
//let d = 10;
//d +=5;
//alert(d);
//
////Инкремент и декремент
//let i = 0;
//i++;//i = i+1;
//alert(i);
//let j = 10;
//j--;

//Взаимодействие: alert, prompt, confirm
//Приостанавливают действие кода
//Внешний вид определен браузером и неизменяем

//alert(string) - отображаем сообщение с string на экране (приводит к string
//alert("Привет, мир");
let result = 4 + 2;
//alert(result);
let result2 = 10 + 5;
//alert(result + " " + result2);
//prompt(string [, default])
 //просит пользователя что-то ввести с вопросом string - если ничего не введет, будет использован defaul
 let username = prompt("введите свое имя", "anonym");
 //alert(username);
 let a = +prompt("введите число", 0); //если спрашиваете число, используйте prompt
 let result3 = a + 10;
 //alert(result3);
 //confirm(string) - спрашивает да/нет
 let ageCheck = confirm("Вам есть 18?");
 
 //console.log(variable) данные в консоль
 
 console.log(ageCheck);
 
 //задача 19;
 let number = prompt("введите число");
alert((number-1) + ' ' + number + ' ' + (+number+1));
 
 
 
let hours = prompt("Введите число от 0 до 23");
let minutes = prompt("Введите число от 0 до 59");
let minutesFromMidnight = hours * 60;
let secondsFromMidnight = minutesFromMidnight * 60;
let minuteToMidnight = 24 * 60 - minutesFromMidnight;

 
 
 
 