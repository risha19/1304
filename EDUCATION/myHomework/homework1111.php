<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" conte="width-dev">
    <title>DOM. Поиск элементов  </title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        
    </style>
</head>
<body>
    <form name="search">
        <label>Search the site:
          <input type="text" name="search">
        </label>
        <input type="submit" value="Search!">
    </form>

    <hr>

    <form name="search-person">
        Search the visitors:
        <table id="age-table">
          <tr>
            <td>Age:</td>
            <td id="age-list">
              <label>
                <input type="radio" name="age" value="young">less than 18</label>
              <label>
                <input type="radio" name="age" value="mature">18-50</label>
              <label>
                <input type="radio" name="age" value="senior">more than 50</label>
            </td>
          </tr>

          <tr>
            <td>Additionally:</td>
            <td>
              <input type="text" name="info[0]">
              <input type="text" name="info[1]">
              <input type="text" name="info[2]">
            </td>
          </tr>

        </table>

        <input type="submit" value="Search!">
    </form>
    <script>
        "use strict";
        //1.Таблицу с id="age-table".
    let ageTable = document.querySelector("#age-table");
    console.log(ageTable);
        //Все элементы label внутри этой таблицы (их три).
    let labels = document.querySelectorAll("#age-table label");
    console.log(labels);
        //Первый td в этой таблице (со словом «Age»).
    let td1 = document.querySelector("#age-table td");
    console.log(td1);
        //Форму form с именем name="search"
    let formSearch = document.querySelector("form");
    console.log(formSearch);
        //Первый input в этой форме.
    let input1 = document.querySelector("input");
    console.log(input1);
        //Последний input в этой форме.
        
    let inputs = document.querySelectorAll("input");
    console.log(inputs[inputs.length - 1]);
    </script> 
    
    </body>
</html>
