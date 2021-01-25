<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" conte="width-dev">
    <title>Работа с элементами  </title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .text {
            text-transform: uppercase;
            color: greenyellow;
        }
        .money img {
            width: 200px;
        }
    </style>
</head>
<body class="p-3">
    <h1>Элементы</h1>
    <div class="styles">
        <h2>Изменение стилей.</h2>
         <p class="text">Lorem lorem lorem</p>
    </div>
    <div class="article">
        <h2>Изменение внутреннего содержимого</h2>
        <p class="article-text">Этот текст изменим</p>
        <div class="comments"> </div>    
    </div>
    <div class="calculator">
        <h2>Изменение атрибутов</h2>
        <h4>Атрибуты как свойства. На примере калькулятора</h4>
        <input type="text" class="first-argument" value="0">
        <span>+</span>
         <input type="text" class="second-argument" value="0">
        <span>=</span>
        <input type="text" class="result-input" disabled>
        
    </div>
    <div class="money">
        <h4>Методы работы с атрибутами</h4>
        <img src="https://media2.24aul.ru/imgs/400x800/5b35eaf8406b170001ce8fe2/100-rubley-seriya-uo-zameschenka-serii-u-1-11732188.jpg" alt="" cost="100">
        <span>+</span>
        <img src="/EDUCATION/цветок.jpg" alt="" cost="200">
        <span>=</span>
        <input type="text" class="result-money-input" disabled>      
    </div>
    <div class="classes">
        <h2>Работа с классами</h2>
        <p class="text-justify mt-3">Lorem ipsum sit</p> 
    </div>
   <!--------------------------------> 
    
    <script src="1211elements.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   
</body>
</html>
