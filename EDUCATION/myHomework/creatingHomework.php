<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" conte="width-dev">
        <title>Изменение документа  </title> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            .flex-container {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                padding: 10px;
            }
            .card {

                border: 1px solid blue;
                background-color: mintcream;
            }
            p, h3 {
                margin: 10px;
                text-align: center;
            }

            .card-img-top {
                background-color: lightyellow;
                max-height: 150px;
            }
            input {
                background-color: green;
                padding: 5px;
                /*    border: 2px solid green;*/ /*Почему при активации бордер кнопка становится некликабельной?*/
                float: right;
                color: white;
                border-radius: 5px;
                margin: 15px; 
            }

        </style>
    </head>
    <body>
        <h2>Фруктовые карточки</h2>
        <div class="flex-container">

        </div>
        <script>
            let catalog = [
                {id: 1, name: "Яблоко", price: "40", description: " Сочное  яблоко ", image: "http://www.gilmerfreepress.net/images/upload1/AppleGreen02.png"},
                {id: 2, name: "Банан", price: "80", description: "Вкусный желтый банан", image: "https://im0-tub-ru.yandex.net/i?id=745c9ede018c0b0004cea9418a34d059-sr&n=13"},
                {id: 3, name: "Мандарин", price: "150", description: "Отличный мандарин", image: "https://w7.pngwing.com/pngs/422/901/png-transparent-fruit-salad-blog-juste-un-lascar-orange-food-orange-citrus-thumbnail.png"},
                {id: 4, name: "Виноград", price: "130", description: "Веселый виноград", image: "https://img.lovepik.com/element/40049/4932.png_300.png"},
                {id: 5, name: "Арбуз", price: "300", description: "Компанейский арбуз", image: "https://lh3.googleusercontent.com/u7wGIGK1UQBsePYnXbu7fLATYXZbCG5Ps-iveovDVJbPU2otq2-j4JD-10oOE1cwhFA=w300"},
            ];
            createRows(catalog);
            function createRows(array) {

                let div = document.querySelector(".flex-container");
                for (let elem of array) {
                    let row = document.createElement("p");
                    row.innerHTML = `
                  <div class="card">
                    <h3 class="card-title">${elem.name}</h3>
                    <p>${elem.id} </p>
                    <p>${elem.price} руб.</p>
                    <p>${elem.description}</p>
                    <p><img class="card-img-top" src="${elem.image}" alt=""></p>
                    <input type="button" value="Заказать"> 
                 </div>    
                `;
                    div.append(row);
                }
            }


        </script>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>
