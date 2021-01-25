//Задача.Получите url-адрес текущей страницы и проверьте, что строка начинается наhttp://.
function task8() {
    

    let href = location.href;
    console.log(href);
    if(href.includes("http://", 0)) {
        alert(true);
    } else {
        alert(false);
    }
}
//task1();

//18.Задача. Выведите на экран текущий день.
function task2() {
    let arr = ["вск", "пн", "вт", "ср", "чт", "пт", "сб"];
    let date = new Date();
    
    alert(arr[date.getDay()]);
}
//task2();

//19.Задача. Привяжите всем ссылкам событие - по наведению на ссылку в конец ее текста дописывается ее href в круглых скобках.

let arrLinks = Array.from(document.querySelectorAll("a"));

 for (let link of arrLinks) {
  //  console.log(link);
    link.onmouseover = addText;
    link.onmouseout = removeText;
} 

function addText(e) {
    if (e.target.value == undefined) {
        e.target.value = e.target.innerHTML;
    }
  e.target.innerHTML = e.target.innerHTML + ' (' + e.target.href + ')';
}

function removeText(e) {
  e.target.innerHTML = e.target.value;
  
}

//20. Задача. Дана кнопка. По нажатию на эту кнопку узнайте, есть ли у окна браузера вертикальная прокрутка.
function task20() {
    

    let button = document.querySelector(".button1");
    button.onclick = isScroll;
    function isScroll() {
        if(window.innerWidth == document.documentElement.clientWidth) {
            alert("Нет колеса прокрутки");
        } else {
            alert("Есть колесо прокрутки");
        }
    }
}
//task20();

//21.Задача. Дан див. Внутри него вначале находится просто текст, а затем 
//span:
//<div>text<span>span</span></div>
// Поменяйте текст на восклицательный знак.
//let div = document.querySelector("div");
//div.firstChild.data = "!";
//
//<button class="button1">Кнопка</button>
//
//let button = document.querySelector(".button1");
//button.onclick = sizeWidth;
//
//function sizeWidth() {
//    alert(window.innerWidth);
//}



//console.log( window.innerHeight); // вся ширина окна
//console.log( document.documentElement.clientHeight);
////alert(document.documentElement.clientHeight);

//14.Задача. Найдите все года от 1 до 2019, сумма цифр которых равна13. 



let result = "";
for (let i = 1; i <= 2019; i++) {
    let i1 = i + '';
    let sum = 0;
    
    for (let j = 0; j < i1.length; j++) {
       sum += +i1[j];
    }

    if (sum == 13) {
        result += i1 + "\n"; 
    }
}

//console.log(result);


 
   
   


//18.Задача. Выведите на экрантекущий год


//19.Задача.  Даны картинки. Привяжите к каждой картинке событие, чтобы по клику на картинку
//алертом выводился ее 



//20.Задача. Дана кнопка. По нажатию на эту кнопку прокрутите окно браузера до самого низа.


//21.Задача. Дан див с комментарием:<div><!--comment--><span>span</span> text </div>Выведите на экран текст комментария.


//20.Задача. Дан див. Внутри него вначале находится просто текст, а затем span: <div> text <span>span</span></div> 
//Получите первого потомка нашего дива с помощью firstChild и с помощью firstElementChild. Сравните результа



//19.Задача. Даны ссылки. Привяжите всем ссылкам событие - по наведению на ссылку в атрибутtitleзапишется ее текст.


//21.Задача. Дан див. Внутри него вначале находится просто текст, 
//а затем span:<div>text<span>span</span></div> Выведите на экран находящийся в начале дива тексt


 //   
 



