<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" conte="width-dev">
    <title>Промисы светофор </title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body {
            min-height: 100vh;
            overflow: hidden;
        }
        h1 {
            text-align: center;
        }
        .box {
            border: 2px solid darkgrey;
            display: inline-block;  /*block inline inline-block none flex grid*/
            padding: 15px;
            background-color: lightgrey;
            position: relative;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
        }

        .light {
            width: 150px; /*Ширина*/
            height: 150px; /*Высота*/
            border: 2px solid black;
            box-sizing: border-box;
            border-radius: 25% 45% 20% 50%;
            margin: 15px auto;
            box-shadow: inset 0 0 50px 0 black;
            transition: transform .5s;
            background-color: black;
        }
        .counter {
            font-size: 4em;
            color: white;
            text-align: center;
            line-height: 2.2em;
            display:none;
        }
        .car {
            position: absolute;
            top: calc(100vh - 180px);
            left: 0;
        }
    </style>
</head>
<body>
    <h1>Промисы JS</h1>
     <div class="box">
         <div class="light red">
             <p class="counter">10</p>
        </div>
        <div class="light yellow"></div>
        <div class="light green"></div>
    </div>
    <img src="https://cdn.iconscout.com/icon/free/png-256/car-vehicle-travel-transport-side-view-29587.png" alt="" class="car">
    
    <script src="2511promises.js"></script>
   
    <!--------------------------------
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   -->
</body>
</html>


