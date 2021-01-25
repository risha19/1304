<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>JQuery</title>
    <style>
        div {
            width: 100%;
            height: 670px;
            top: 0px;
            overflow: hidden;
        }
        .sun {
            position: relative;
            top: 35%;
            
        }
        
    </style>
  </head>
  <body>
      
      <div>
          <img src="https://stranamasterov.ru/files/pictures/picture-121490-0219c32c89578456432ae2300975820a.png" alt="" class="sun">     
      </div>
    
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <script>
        
        "use strict";
        
        function moveSun() {
            $(".sun").animate({
                         "top": "0", 
                         "left": "34%"
                         
                       }, 3000)
                      
                       .animate({
                          "top": "35%",
                          "left": "130%"
                       }, 3000)
                               .hide(".sun").animate({
//                          "transition": "none",
                          "top": "35%",
                          "left": "-34%"
                         
                       },10)
                               .show(".sun").animate({
                            "top": "35%",
//                            "left": "-34%"
                            }, moveSun);
//                       .animate({
//                          
//                          "left": "34";
//                         
//                       })
                       
//                       .animate({
//                          "transition" = "none",
//                          "left" = "-100px"
//                       }, moveSun);
            
        }
    moveSun();
    
    </script>
    
    
    <!--<script src="jQuery.js"></script>-->
  </body>
</html>



