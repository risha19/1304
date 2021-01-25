<!--Задание светофор:
(прим. http://edu.ivandp.su/265/svetofor/)
Используя свойства цвета, границ, отступов и позиционирования нарисуйте светофор. (Цвета можно изменить по желанию)
«Коробка»:
•    Цвет – светло-серый
•    Граница – 5px сплошная серая
•    Скругление углов – 15px 
•    Внутренний отступ – 25px
•    Параметры отображения – блочно-строчный
•    Сместить на центр через позиционирование и свойство transform
«Сигналы»:
•    Ширина/Высота – 150px
•    Граница – 3px сплошная черная
•    Скругление углов – сделать круглыми или другой формы, по желанию
•    Тень – внутренняя, без сдвига, размытие – 15px, растяжение – 5px, черная (прозрачность 30%)
•    Внешний отступ между сигналами – 15px
•    Цвета – красный, желтый, зеленый (можно делать цвета не такими яркими)
 -->
 
 <!DOCTYPE html>
<html lang="ru">
    <head>  
        <meta charset="UTF-8">
        <title>Светофор</title>
        <style>
            body {
                text-align: center;
            }
            .box {
                position: relative;
                border: 5px solid grey;
                display: inline-block;
                background: lightgrey;
                border-radius: 15px;
                padding: 25px;
            }
            .circle {
              
                width: 150px;
                height: 150px;
                border-radius: 75px;
                border: 3px solid black;
                margin: 15px;
                position: relative;
                box-shadow: inset 0 0 15px 15px rgba(0, 0, 0, 0.3);
            }
            .red {
                background-color: red;
                
            }
            
            .orange {
                background-color: orange;
            }
            .green {
                background-color: green;
            }
        </style>
    </head>
    <body> 
        <div class="box">
            <div class="circle red"></div>
            <div class="circle orange"></div>
            <div class="circle green"></div>
       
        </div>
        
    </body>    
</html>

 
