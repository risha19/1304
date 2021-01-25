<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" conte="width-dev">
    <title>ООП в JS  </title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
       
    </style>
</head>
<body>
    <h1>ООП в JS</h1>
    
    <script>
       "use strict";
       
       class Worker {
           constructor(name, surname, rate, days) {
               this.name = name;
               this.surname = surname;
               this.rate = rate;
               this.days = days;
               
           }
           
           getSalary() {
               return "Зарплата " + this.name + ": " + (this.rate * this.days);
           }
      }
       let user1 = new Worker("Михаил", "Аполонский", 4918, 19);
       console.log(user1.getSalary());
       
       let user2 = new Worker("Юлия", "Ткаченко", 3105, 22);
       console.log(user2.getSalary());


    </script>
    
    
    
    <!--------------------------------
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   -->
</body>
</html>

