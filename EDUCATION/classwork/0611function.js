"use srtict";

//greetAllUsers();
//
//function greetAllUsers() {
//    alert("Привет всем!");
//}
//
//greetAllUsers();
//
////Переменные внутри функции
//
////переменные , объявленные внутри с помощью let - локальная видимость
//function showMessage() {
//    let message = "Привет, Мир";
//    alert(message);
//}
//
//showMessage();
//
////обращение к глобальной переменной
//
//let username = "Василий";//глобальная
//
//function greetUsers() {
//    let message = "Привет, " + username + "!";
//    alert(message);
//}
//greetUsers();
//
////те же условия локальности и глобальности распространяются 
////и на циклы и условия
//for(let i = 0; i < 1; i++) {
//    let message = "Отработал цикл";
//    console.log(message);
//}
//if (true) {
//    let message = "Отработало условия";
//    console.log(message);
//}
//переменная, объявленная через let внутри {}
// - локальна для этих {}
//function checkAge() {
//    let age = +prompt("Сколько Вам лет?", 18);
//    if(age >= 18) {
//        let message = "Вам можно на сайт!";
//        alert(message);
//    } else {
//        let message = "Вам нельзя на сайт";
//        alert(message);
//    }
//}

//function checkAge() {
//    let age = +prompt("Сколько Вам лет?", 18);
//    let message = "";
//    if(age >= 18) {
//         message = "Вам можно на сайт!";
//       
//    } else {
//         message = "Вам нельзя на сайт";
//   
//    }
//    alert(message);
//}
//checkAge();

//----------------------
//let state = "idle";
//function changeState() {
//    let state = "ready";
//    console.log(state);//ready
//    //если локал и глобал переменная имеют одинак названия, использ-ся 
//    //глобальная переменная
//}
//console.log(state);//idle
//changeState();

//function addChatMessage(from, text) {
////    console.log(`from = ${from}`);
////    console.log(`text = ${text}`);
//    let message = `${from}: ${text}`;
//    alert(message);
//}
//addChatMessage("Василий", "Всем привет");
//addChatMessage("Сергей", "Привет, Вася");
//
//let username = "anonym";
//let message = "hello";
//addChatMessage(username, message);

//параметры по умолчанию(необязательные параметры)
//function addChatMessageWithRole(from, text, role = "guest") {
//    /*по умолчанию параметр role равен guest*/
//   let message = `[${role}]${from}: ${text}`;
//   alert(message);
//   
//}
//addChatMessageWithRole("Василий", "Всем привет");
//addChatMessageWithRole("Сергей", "Приветствую", "admin");

//возврат значений
//
//function checkAge(age) {
//    if(age >= 18) {
//        return true;
//    } else {
//        return false;
//    }
//}
//let checked = checkAge( +prompt("Введите возраст"));//результат return записан в переменную
//console.log(checked);
//if(checked === true) {
//    alert("вам можно на сайт");
//} else {
//    alert("вам нельзя на сайт");
//}
//
//function func() {
//    return;
//}
//
//let state = "idle";
//function cookCoffee() {
//    if (state != "idle") {
//        return; //завершает выполнение функции
//    }
//    console.log("Ваш кофе готовится!");
//    state = "cooking";
//}
//cookCoffee();
//cookCoffee();
//function takeCoffee() {
//    if(state != "cooking") {
//        return;
//    }
//    console.log("Вы забрали свой кофе");
//    state = "idle";
//}
//takeCoffee();
//cookCoffee();
//cookCoffee();
//
//function checkCompare(a, b) {
//    if ( a === b) {
//        return true;
//    } else {
//        return false;
//    }
//}
//checkCompare(5, 8);
//let result = '';
//let number = 31;
//for (let i = 2; i < number; i++) {
//    if(number % i == 0) {
//         result = true;
//    } else {
//         result = false;
//    }
//    
//}
//alert(result);
/*
let str = '';
for (let i = 1; i <= 10; i++) {

    for(let j = 1; j <= i; j++) {
        str += i;
    }
    str += "\n";
}

alert(str);
*/
/*
  
 let str = '';
for (let i = 1; i <= 10; i++) {
      str += (i+'').repeat(i) + "\n";  
}
alert(str); 
 */


let number = prompt('введите число');
let sum = 0;


while((sum > 9 || sum == 0) && number != 0) {
    if (sum > 9) {
        number = sum.toString();
        sum = 0;
    }
    for (let i = 0 ; i < number.length ; i++) {
        sum += +number[i];
       
    }
    
   //это чтобы далеко не убежать от решения ;)
} 

alert(sum);


//let number = prompt("введите число");
//let sum = 0;


