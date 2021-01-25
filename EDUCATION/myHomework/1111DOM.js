
//вся наша страница делится на DOM и BOM
//DOM  - объектная модель документа
//BOM браузерная модель

//взаимодействие с BOM
//BOM может управлять местополож-м или счит-ть инф-ю о браузере и систее
//console.log([navigator.userAgent, navigator.platform]);
//console.log(location.href);
////location.href = "https://ru.wikipedia.ru";редирект
////location.reload(); //перезагружаем страницу
//
////--------
////глобальный объект document
//console.log(document); //получаем весь документ
//console.log(document.documentElement); //весь документ в виде элемента
//console.log(document.body);//получаем body


//нахождение элементов querySelector() querySelectorAll()
//querySelector() - находит элемент на страницеюЕсли элементов несколько, вернет первый
//let blueHeader = document.querySelector("h1");
//blueHeader.style.color = "blue";
//let redHeader = document.querySelector("#red");
//redHeader.style.color = "red";
//let childrenContainer = document.querySelector(".children");
//childrenContainer.style.backgroundColor = "lightblue";
//let blueListItem = document.querySelector(".blue-list-item");
//blueListItem.style.color = "blue";//покрасит только первый
//
////querySelectorAll() - возвращает коллекцию элементов
//let redListItems = document.querySelectorAll(".red-list-item");
//console.log(redListItems); //результат работы querySelectorAll - vfccbd
//for (let item of redListItems) { //перебираем колекцию  элементов циклом
//   item.style.color = "red";//красим
//   
//}
//let attrContainer = document.querySelector(".attr-selector");
//let redTitleElement = attrContainer.querySelector("[title=Красный]");
//redTitleElement.style.color = "red";
//
////пример с нажатием на h3 "контекстные селекторы"
//let contextH3 = document.querySelector("h3");
//contextH3.onclick = function() {
//    let orangeListItems = document.querySelectorAll(".orange-list li:nth-child(odd)");
//    for (let item of orangeListItems) {
//        item.style.color = "orange";
//    }
//}
//
////получить селектор по id
//green.style.color = "green";
//
////устаревшие методы getElementsBy
//
//let yellowHeader = document.getElementById("yellow");
//yellowHeader.style.color = "yellow";
//let h3Collection = document.getElementsByTagName("h3");
//console.log(h3Collection);
//for (let item of h3Collection) {
//    item.style.textAlign = "center";
//}
//
//let darkredList = document.getElementsByClassName("darkred-list");//по классу
//console.log(darkredList);
//darkredList[0].style.color = "darkred";
//
////-----------matches - проверяет, удовлетворяет ли элемент селектору-------
//console.log(yellowHeader.matches("#yellow"));
//
////---------closest  - осуществляет поиск вверх -ищет по предкам--------
//let descendant = document.querySelector('.descendants p');
//console.log(descendant.closest('.children'));

//навигация по DOM-элементам
//
//let col1 = document.querySelector(".col-1");
////поиск по узлам
//console.log(col1.nextSibling);
//console.log(col1.previousSibling.previousSibling);
//console.log(col1.parentNode);
//console.log(col1.childNodes);
//console.log(col1.firstChild);
//console.log(col1.lastChild);
//
////поиск по элементам-------------------------------
//
//console.log({
//    nextElementSibling: col1.nextElementSibling, //следующий сосед
//    previousElementSibling: col1.previousElementSibling, //предыдущий сосед
//    parentElementNode: col1.parentElementNode,//родитель
//    childElementNodes: col1.childElementNodes,//
//    firstElementChild: col1.firstElementChild,//
//    lastElementChild: col1.lastElementChild, //
//    children: col1.children//коллекция детей
//});









