<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" conte="width-dev">
    <title>DOM. Дочерние элементы в DOM </title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>
    <div>Пользователи:</div>
    <ul>
       <li>Джон</li>
       <li>Пит</li>
    </ul>
    
    <script>
        //как получить: 
    // элемент <div>?
    //  <ul>?
  //  второй <li> (с именем Пит)?
   
    console.log({
        div: document.body.firstElementChild,
        ul: document.body.firstElementChild.nextElementSibling,
        liPit: document.body.firstElementChild.nextElementSibling.lastElementChild
    });
     
  

    
    
    </script>
 
    
    </body>
</html>
