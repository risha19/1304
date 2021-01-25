<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>События</title>
    <style>
      .card-body-buttons {
        display:flex;
        align-items: center;
        justify-content: space-around;
      }
      .modal-window {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 50%;
        display:none;
      }
      .progressbar {
        min-height: 1rem;
        border-radius: 10px;
        border: 1px solid #007BFF;
        background-color: rgb(230, 230, 230);
        overflow: hidden;
      }
      .progressbar-inner {
        min-height: 1rem;
        border-radius: 10px;
        width: 0%;
        transition: linear 5s;
        background-color: plum;
        
      }
    </style>
  </head>
  <body class="p-3">
    <h1>Слушатели событий</h1>
    <h2>Задание 1</h2>
    <p>Сделайте рабочим счетчик количества товаров в карточке (.minus-button .counter .plus-button). (количество товаров не должно становиться отрицательным)</p>
    <div class="card" style="width: 18rem;">
      <img src="https://avatars.mds.yandex.net/get-zen_doc/1879615/pub_5cb0bd49770b5c00af941212_5cb10755662beb00b2c2135a/scale_1200" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Кроссовочки</h5>
        <p class="card-text">Модные кроссовочки все хотят такие купить и ты заказывай быстрее и побольше</p>
        <div class="card-body-buttons">
          <div class="input-group">
            <div class="input-group-prepend">
                <button class="btn btn-secondary text-white font-weight-bold minus-button">-</button>
            </div>
            <input type="text" class="form-control text-center font-weight-bold counter" value="0" disabled>
            <div class="input-group-append">
                <button class="btn btn-secondary text-white font-weight-bold plus-button">+</button>
            </div>
          </div>
          <button class="btn btn-primary ml-2">Заказать</button>
        </div>
      </div>
    </div>
    <h2 class="mt-5">Задание 2</h2>
    <p>По нажатию на кнопку ниже покажите модальное окно. У него класс .modal-window и оно спрятано с помощью свойства display: none;</p>
    <button class="btn btn-info open-modal-button">Открыть модальное окно</button>
    <div class="modal-window" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Задание 3</h2>
            <button type="button" class="close close-times-button">
              &times;
            </button>
          </div>
          <div class="modal-body">
            <p>Теперь окно стоит закрыть. За это отвечают две кнопки - крестик (.close-times-button) и close (.close-button). На обе потребуется повесить одну и ту же функцию.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-button">Close</button>
          </div>
        </div>
      </div>
    </div>
    <h2 class="mt-5">Задание 3</h2>
    <p>Задание 3 внутри модального окна</p>
    <h2 class="mt-5">Задание 4</h2>
    <p>По нажатию на кнопку сделайте, чтобы прогрессбар заполнялся в течение 5с. Заполнение прогрессбара происходит с помощью изменения св-ва width у элемента .progressbar-inner. Можно реализовать либо изменяя width в setInterval либо с помощью св-ва transition. Выберите любой вариант или придумайте свой. В этом задании можно менять html и css</p>
    <button class="btn btn-info mb-2 start-scrollbar-button">Заполнить прогресс-бар</button>
    <div class="progressbar">
      <div class="progressbar-inner"></div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="homeworkEvents.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

