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
       
       class User {
           constructor(name, surname) {
               this.name = name;
               this.surname = surname;
               
           }   
           getFullName() {
               return this.name + " " + this.surname;
           }
        }
        
        class Student extends User {
            constructor(name, surname, year) {
                super(name, surname);
                this.year = year;
            }
            getCourse() {
                let date = new Date;
                let count = date.getFullYear() - this.year;
                switch(count) {
                    case(0):
                        return "1 курс";
                    case(1):
                        return "2 курс";
                    case(2):
                        return "3 курс";
                    case(3): 
                        return "4 курс";
                    case(4):
                        return "5 курс";
                   default:
                       return "Вы не студент";
                 }
                
            }
        }
    let student = new Student("Ирина", "Иванцова", +prompt("Введите четырехзначный год поступления"));
    alert(student.getFullName());  
    alert(student.getCourse());
          

    </script>
    
    
    
    <!--------------------------------
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   -->
</body>
</html>

