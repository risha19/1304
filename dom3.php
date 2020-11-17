<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" conte="width-dev">
    <title>Красная диагональ </title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
       table {
         border-collapse: collapse;
       }

       td {
         border: 1px solid black;
         padding: 3px 5px;
       }
     </style>
   </head>

   <body>
     <table>
       <tr>
         <td>1:1</td>
         <td>2:1</td>
         <td>3:1</td>
         <td>4:1</td>
         <td>5:1</td>
       </tr>
       <tr>
         <td>1:2</td>
         <td>2:2</td>
         <td>3:2</td>
         <td>4:2</td>
         <td>5:2</td>
       </tr>
       <tr>
         <td>1:3</td>
         <td>2:3</td>
         <td>3:3</td>
         <td>4:3</td>
         <td>5:3</td>
       </tr>
       <tr>
         <td>1:4</td>
         <td>2:4</td>
         <td>3:4</td>
         <td>4:4</td>
         <td>5:4</td>
       </tr>
       <tr>
         <td>1:5</td>
         <td>2:5</td>
         <td>3:5</td>
         <td>4:5</td>
         <td>5:5</td>
       </tr>
     </table>
     <script>
       let table = document.querySelector("table");
       let tr = document.querySelectorAll("tbody tr");
       let td = document.querySelectorAll("tbody td");
      
       for (let i = 0; i < 5; i++) {
           td = table.rows[i].cells[i];
           td.style.backgroundColor = 'red';
       }
 </script>
    </body>
</html>