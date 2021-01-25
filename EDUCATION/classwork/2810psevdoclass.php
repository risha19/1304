<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Псевдоклассы, псевдоэлементы, переходы</title>
    
    <style>
        .box {
            display: inline-block;
            width: 200px;
            height: 200px;
            background-color: rgb(50, 50, 255);
       
        }
        .two {
            margin-left: 15px;
            box-shadow: 5px 5px 15px 5px #000000;
        }
        .one:hover {
            background-color: red;
        }
        .two:active {
          /*  background-color: greenyellow;*/
          box-shadow: none;
        }
        a {
            text-decoration: none;
        }
        .link:visited {
            color: pink;
        }
        .input:focus {
            border: 2px solid red;
        }
        .psevdo-ul li {
            background-color: salmon;
        }
        .psevdo-ul li:first-child {
            background-color: lime;
        }
        .psevdo-ul li:last-child {
            background-color: lightseagreen;
        }
        .pseudo-ul-2 li:nth-child(4) {
            background-color: windowframe;
        }
        .pseudo-ul-3 li:nth-child(odd) { /*odd нечетный eve четный*/
            background-color: tomato;
        }
        .pseudo-ul-3 li:nth-child(even)
        {
            background-color: yellow;
        }
        .pseudo-ul-4 li:nth-child(3n) {/*каждый третий элемент*/
            background-color: indigo;
        }
        .pseudo-ul-5 li:nth-child(3n+1) {/*смещение*/
            background-color: peru;
        }
        
        /*https://www.belrabota.by/upload/iblock/398/3983a93780cd2a912857349867ffd637.jpg*/
        .taxi-logo {
            width: 230px;
            height: calc(230px / 2);
            background-color: #FCDB00;
            display: inline-block;
            border-radius: 25px 25px 0 0;
            position: relative;
        }
        .taxi-logo:before {
           
            content: ""; /*обязательное свойство псевдоэлементов*/
            display: inline-block;
            background-color: #F3EFE6;
            width: calc(230px / 2);
            height: calc(230px / 2);
            border-radius: 0 0 0 25px;
            position: absolute;
            top: 100%;
            
            
            transition: left 0.5s;
            
        }
        .taxi-logo:after {
            content: "";
            display: inline-block;
            background-color: #323029;
            width: calc(230px / 2);
            height: calc(230px / 2);
            border-radius: 0 0 25px 0;
            position: absolute;
            top: 100% ;
            left: 50%;
            
            transition: left 0.5s;
       
        }
        
        .taxi-logo:hover::before {
            left: -15%;
        }
        .taxi-logo:hover::after {
            left: 65%;
        }
        
        .three {
         /* transition: all 1s linear 3s;  */
         transition: width 2s ease-in-out, background-color 1s linear 2s;
        }
        .three:hover {
            width: 300px;
            background-color: orange;
            
        }
        
        .text-container {
            width: 100px;
            height: hidden;
            border: 2px solid blue;
            
        }
        .text-running {
            white-space: nowrap;  
            display: inline-block;
            position: relative;
            left: 100%;
            transition: left 3s; 
        }
        .text-container:hover .text-running {
            left: 200%;
        } 
    </style>
</head>
<body>
    <div class="box one"></div>
    <div class="box two"></div>
   
    <div style="margin-top: 10px">
        <a class="link" href="https://yandex.ru">Ссылочка</a>
        <input class="input" type="text" placeholder="Введите имя">
    </div>
    <h3>:fist-child  :last-child</h3>
    <ul class="psevdo-ul">
        <li>Один</li>
        <li>Два</li>
        <li>Три</li>
        <li>Четыре</li>
    </ul>
    <h3>nth-child</h3>
    <ul class="pseudo-ul-2">
        <li>Один</li>
        <li>Два</li>
        <li>Три</li>
        <li>Четыре</li>
        <li>Пять</li>
        <li>Шесть</li>
    </ul>
    <ul class="pseudo-ul-3">
        <li>Один</li>
        <li>Два</li>
        <li>Три</li>
        <li>Четыре</li>
        <li>Пять</li>
        <li>Шесть</li>
    </ul>
    <ul class="pseudo-ul-4">
        <li>Один</li>
        <li>Два</li>
        <li>Три</li>
        <li>Четыре</li>
        <li>Пять</li>
        <li>Шесть</li>
    </ul>
    <ul class="pseudo-ul-5">
        <li>Один</li>
        <li>Два</li>
        <li>Три</li>
        <li>Четыре</li>
        <li>Пять</li>
        <li>Шесть</li>
    </ul>
    <ul class="pseudo-ul-6">
        <li>Один</li>
        <li>Два</li>
        <li>Три</li>
        <li>Четыре</li>
        <li>Пять</li>
        <li>Шесть</li>
    </ul>
    <ul class="pseudo-ul-7">
        <li>Один</li>
        <li>Два</li>
        <li>Три</li>
        <li>Четыре</li>
        <li>Пять</li>
        <li>Шесть</li>
    </ul>
    <h2>Псевдоэлементы</h2>
    <p>Текст до  <i class="taxi-logo"></i> Текст после</p>
    <p>Тест под элементов</p>
    <h2 style="margin-top: 100px">Транзиции</h2>   
    <div class="box three"></div>
    <h2>св-во Overflow</h2>
    <div class="text-container">
    <p class="text-running">Lorem ipsum dolor sit amet.</p>
  </div>
    
</body>
</html>
