<!Doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>CSS,основы CSS</title>
        <link rel="stylesheet" href="style.css">
        <style>
            body{
                background-color: moccasin;
            }
            h1 {
                text-align: center;
                color: firebrick;
            }
            #about 
            {  /*селектор по ID #*/
                text-align: justify;
            }
            .about-cmall /*селектор по классу(.)*/
            {
                font-size: 10px;
            }
            .about-header
            {
                text-align: center;
            }
            .lowercase
            {
                text-transform: lowercase;
            }
            p 
            {
                text-transform: uppercase !important;
            }
            .magni
            {
                font-size: 30;
                color: blue;
            }
            .context p
            {
                color: fuchsia;
            }
            .children>p
            {
                color: cyan;
            }
            .info-big, .info-small
            {
                color: brown;
            }
            
            .siblings p+p
            {
                color: orange;
            }
            p[title="Красная"]
            {
                color: red;
            }
            a[href^="https"]
            {
                color: pink;
            }
            p[class$="-2"]
            {
                color: green;
            }
            input[name*="password"]
            {
                color: greenyellow;
            }
            
        </style>
    </head>
    <body>
        <h1>Портволио</h1>
        <h2>Иванцова И.А</h2>
        <h2>Моя первая работа</h2>
        <h3 style="text-align: right;">А , может, и не первая</h3>
        <h2 class="about-header">Обо мне</h2>
        <p id="about" class="lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Tempora, doloribus, molestias sequi maiores fuga perferendis officiis 
            voluptas optio similique necessitatibus mollitia veritatis culpa ducimus
            itaque officia repellat tenetur. Voluptatem, vero, quibusdam, ad magni 
            adipisci maxime <span class="magni">magnam</span> fuga neque incidunt soluta similique hic provident
            vel nihil eos voluptas sapiente ipsum molestias perferendis explicabo alias 
            tempora id ab saepe recusandae veritatis optio quas. </p>
        <p class="about-cmall red" lowercase>Possimus, cum, numquam
            tempore quo recusandae assumenda neque quaerat a quasi nesciunt ipsam quia
            nobis iste quos amet in ut eos. Adipisci, fugit, quam ipsum delectus unde
            quis cumque excepturi deleniti porro incidunt? Neque, nobis, sint et illo
            provident ipsum in. </p>
        <p class="about-cmall yellow" lowercase>Possimus, cum, numquam
            tempore quo recusandae assumenda neque quaerat a quasi nesciunt ipsam quia
            nobis iste quos amet in ut eos. Adipisci, fugit, quam ipsum delectus unde
            quis cumque excepturi deleniti porro incidunt? Neque, nobis, sint et illo
            provident ipsum in. </p>
        <div class="selectors">
            <div class="context">
                <p>Материал 1</p>
                <p>Материал 2</p>
                <p>Материал 3</p>
                <div class="context-inner">
                   <p>Материал 1.1</p>
                   <p>Материал 2.2</p>
                   <p>Материал 3.3</p>
                </div>
            </div> 
            <div class="children">
                <p>Материал 1</p>
                <p>Материал 2</p>
                <p>Материал 3</p>
                <div class="children-inner">
                    <p>нас не красить</p>
                    <p>нас не красить</p>
                    <p>нас не красить</p>
                </div>
            </div> 
            <div class="multi">
                <p class="info-big">Информация</p>
                <p class="info-cmall">Информация</p>
                <p class="info-big">Информация</p>
                <p class="info-cmall">Информация</p>
            </div>
            <div class="siblings">
                <p>Меня не красить</p>
                <p>Меня красить</p>
            </div>
            <div class="attr">
                <p title="Зеленая">Первая</p>
                <p title="Красная">Красная</p>
                <p title="Синяя">Синяя</p>
                <ul class="attr-links">
                    <li><a href="http://edu.ivandp.su/1304">ИВ</a></li>
                    <li><a href="https://www.youtube.com">Ютуб</a></li>
                    <li><a href="https://bitrixcasts.ru">ИВ</a></li>
                    
                </ul>
                <div class="ending">
                    <p class="col-2">co-2</p>
                    <p class="col-4">co-4</p>
                    <p class="col-3">co-3</p>
                </div>
                <form action="">
                    <input type="text" name="user-name" value="anonym">
                    <input type="text" name="user-password" value="12345">
                    <input type="text" name="password-check" value="12345">
                </form>
            </div>
        </div> 
    </body>
</html>

