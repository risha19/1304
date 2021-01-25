<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Флексбоксы</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <style>
        * {   /*к каждому элементу на странице*/
            margin: 0;/*нормализация, но если прописана ссылка выше, то она не требуется*/
            padding: 0;
        }
        li {
            list-style-type: none;
        }
        a {
            text-decoration: none;
            color: white;
        }
        a:visited {
           color: wheat; 
        }
        
        .flex-container {
            display: flex;/*говорим родителю, что он флекс-контейнер*/
            flex-direction: row;
            flex-wrap: wrap; /*включаем перенос */   
            justify-content: space-between;
        }
        .box {
            width: 350px;
        }
        .box2 {
            width: 250px;
        }
        .box, .box2, .box3 {
            background-color: steelblue;
            
            height:250px;
            border: 5px solid black;
            box-sizing: border-box;
        }
        .navigation {
            background-color: slateblue;
            display: flex;
            padding: 10px;
            justify-content: space-evenly;/*распределение контейнеров*/
        }
        .navigation li {
            margin: 0 10px ;
        }
        .flex-container2 {
           display: flex; 
           border: 4px solid red;
           height: 500px;
           align-items: center;
           justify-content: space-around;
        }
        
        .flex-container3 {
            border: 4px solid red;
            display: flex; 
            height: 600px;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }
        
        .box2:nth-child(2) {
           align-self: flex-start; 
        }
        .box2:nth-child(3) {
            align-self: flex-end;
        }
        .box3 {
            width: 100px;
            height: 100px;
        }
        .flex-container4 {
            display: flex;
       
        }
        .main, .aside {
            height: 250px;
            padding: 10px;
            color: gray;
          
        }
        .main {
            background-color: thistle;
            width: 300px;
              /*flex-grow: 1;разрешает элемент заполнять все свободное простр-во*/       
            flex-grow: 2;
            order: 2; /*порядок элементов*/
        }
             
        .aside {
              background-color: aqua;
           /*   width: 250px;*/
              flex-basis: 250px;/*используется вместо width внутри flex*/
              /*flex-grow: 1;*/
              order: 1;/*.aside встанет раньше .main*/
        }
        
        
    </style>
</head>
<body>
    <div class="flex-container"> 
        <div class="box "></div> 
        <div class="box "></div> 
        <div class="box "></div> 
        <div class="box "></div> 
    </div>
    <nav>
        <ul class="navigation">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О компании</a></li>
            <li><a href="#">Прайс-лист</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </nav>
    <div class="flex-container2"> 
        <div class="box2 "></div> 
        <div class="box2 "></div> 
        <div class="box2 "></div> 
        <div class="box2 "></div>
    </div>
    <div class="flex-container3"> 
        <div class="box3"></div> 
        <div class="box3"></div> 
        <div class="box3"></div> 
        <div class="box3"></div> 
    </div>
     <div class="flex-container4"> 
         <div class="main">
             <p>
                Школа является тем местом, где дети проводят большую часть своего времени. 
                Интересные факты про школу – это много нового об учебной деятельности и
                специфике обучения в разных странах мира. </p>
         </div> 
         <div class="aside">
             <p> Иногда бывает интересно узнать факты о школьниках. К тому же 
                 каждая знаменитая личность тоже была когда-то учеником, 
                 интересные факты про школьников поведают и о таких людях много 
                 нового.    </p>
         </div> 
        
        
    </div>
</body>
</html>

