<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Флексбоксы.Домашка</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .menu {
            text-transform: uppercase;
            display: flex;
            background-color: #007bff;
            justify-content: flex-end;
            padding: 10px;
         }
        .menu li {
            list-style-type: none;
            margin: 0 10px;
        }
        a {
            text-decoration: none;
            color: white;
           ;
        }
        
        .flex-container {
            display: flex;
            border-bottom: 3px solid #007bff;
            
        }
        .image, .aside {
            height: 400px;
           
        }
        
        .image {
            background-image: url(https://avatars.mds.yandex.net/get-zen_doc/3518430/pub_5f560fc2019fb065e7706e75_5f5610ad2bf8ae1b726ab0c8/scale_1200);
            background-size: cover; 
            width: 80%;
        }
        .aside {
            color: blueviolet;
            flex-basis: 250px;
            font-size: 18px;
            text-align: end;
            flex-grow: 2;
        }
        .aside button {
            background-color: green;
            
            padding: 5px;
            border: 2px solid green;
            float: right;
            color: white;
            border-radius: 5px;
            margin: 15px; 
            
        }
        .galery {
            padding: 20px;
            font-size: 22px;
            text-transform: uppercase;
            text-align: center;
        }
        .flex-container2 {
           border-top: 3px solid #007bff;
           display: flex; 
           height: 500px;
           align-items: center;
           justify-content: space-between;
           background-color: whitesmoke;
           flex-direction: row;
           flex-wrap: wrap;
           padding: 10px;
         }
        .box {
            width: 200px;
            height: 150px;
            background-size: cover;
           
        }
        
        .one {
            background-image: url(https://s1.1zoom.ru/b5050/860/314573-alexfas01_1920x1200.jpg);
          /*  background-size: cover;*/
        }
        .two {
            background-image: url(http://islam.ru/sites/default/files/img/2017/veroeshenie/planeta.jpg);
            width: 250px;
            height: 200px;
          /*  background-size: cover;*/
        }
        .three {
            background-image: url(https://tapety.tja.pl/obrazki/tja_normalne/211517.jpg);
          /*  background-size: cover;*/
        }
        .four {
            background-image: url(https://poster.nicefon.ru/2019_12/22/350x220/2638077070e8ece6eef879.jpg);
         /*   background-size: cover;*/
        }
        .footer {
            background-color: green;
            text-align: center;
            padding: 10px;
            color: white;
        }
        
        
        
        
    </style>
</head>
<body>
    <ul class="menu">
        <li><a href="#"> Главная </a></li>
        <li><a href="#"> О нас </a></li>
        <li><a href="#"> Галерея </a></li>
        <li><a href="#"> Заказать </a></li>
    </ul>
    
    <div class="flex-container"> 
        <div class="image">
            
        </div> 
        
        <div class="aside">
             <p>
Космос - относительно пустая часть вселенной, где преобладает чёрный цвет. 
Мы ещё не знаем, насколько космос большой, может быть он бесконечный. В космосе
или вселенной такое количество галактик, что мы даже  посчитать не сможем.
 </p>
            <button>Заказать</button>
        </div> 
    </div>
    <p class="galery">Галерея </p>
    <div class="flex-container2"> 
        <div class="box one "></div> 
        <div class="box two"></div> 
        <div class="box three"></div> 
        <div class="box four"></div>
    </div>
    <p class="footer">&COPY; FlexBox </p>
</body>

