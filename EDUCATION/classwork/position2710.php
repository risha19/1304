<!DOCTYPE html>
<html lang="ru">
    <head>  
        <meta charset="UTF-8">
        <title>Позиционирование</title>
        <style>
            body {
                font-size: 16px;
                font-family: "Arial";
            }
            .header-image {
               height: 300px;
               background-color: palevioletred;
               background-image: url("https://im0-tub-ru.yandex.net/i?id=ac2ef91280dc44ae3837dbd68e2095d5&n=13"); 
               background-size: cover; /*contain-сжать картинку по размеру поля*/
              /* background-repeat: no-repeat;*/
              /* background-position: 80% 5%;/*смещение, можно не применять*/
              position: relative;
            }
            .link {
                text-decoration: none;
                text-transform: uppercase;
               
            }
            .navigation li {
                display: inline-block;
                border-right: 2px solid blue;
              /*  background-color: lightblue;*/
             /*  padding: 10px 15px 30px 0px;*/
                padding: 0 10px;
            }
            
            .last {
                border-right: none !important;
            }
            
            .about {
                padding: 0 15%;
                background-color: lavenderblush;
            }
            
            .about-header {
                
                text-align: center;
                text-transform: uppercase;
                margin: 50px 0;
               /* border-top: 2px solid pink;
                  border-bottom: 2px solid pink;
                  padding: 10px 0;*/
           }
           .about-text {
               text-align: justify;
           }
           
           .employee-image {
               display: block;
               width: 200px;
               margin: 0 auto; /*если у блоч элемента стоит значение фиксир ширина, 
               то можно выровнять по центру авто*/
               border: 2px solid brown;
               border-radius: 50%;
               box-sizing: border-box;
               
           }
           .employee-name {
               text-align: center;
           }
            .text {
                text-align: justify;
            }
            
            .navigation {
                 padding-left: 0;
            }
            .header-title {
                padding: 25px;
                background-color: whitesmoke;
                opacity: 45%;
                display: inline-block;
                position: absolute; /*при занчении абсолют и фиксед элемент вытягивается 
                из ДОМ-дерева (поверх остальных элементов)
                */
                right: 0;
                top: 55%;
                transform: translateY(-50%);
                -moz-box-shadow: 11px 10px 5px 47px rgba(255,103,100,1);
           }
            
            .header-title button {
               background-color: white;
               border: 2px solid black;
               padding: 10px;
               float: right;
               border-radius: 15px;
              
               
            }
        </style>
    </head>
    <body>
        <header>
            <div class="header-image">
                <div class="header-title">
                <h1>Панда и поклонники</h1>
                <button>Заказать</button>
            </div>
            </div>
            <nav> <!-- навигация-->
                <ul class="navigation">
                    <li><a href="#" class="link">О нас </a></li>
                    <li><a href="#" class="link">Наши </a></li>
                    <li><a href="#" class="link">Наши сотрудники</a></li>
                    <li class="last"><a href="#"  class="link">Контакты </a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="about">
                <p class="about-header">________________</p>
                <h2 class="about-header">О мультфильмах</h2>
                <p class="about-header">________________</p>
                <p class about-text> Легкое и светлое воспоминание о безвозвратно ушедшем детстве
                    подарят обои, на которых изображены любимые герои из мультиков.
                    Яркие краски и позитивные эмоции поднимают настроение, поэтому
                    даже скучный этап работы будет скрашен. Мультфильмы на экране
                    помогают почувствовать беззаботность детства. Конечно, на
                    детском компьютере мультипликационные заставки будут более 
                    чем уместны. </p>
            </section>
            
            <section class="employee">
                
            </section>
                
        </main>
        <footer>    
            
        </footer>
    </body>
</html>

