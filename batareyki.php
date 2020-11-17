<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Батарейка</title>
    <style>
        .b {
            width: 150px;
            height: 50px;
            border: 2px solid black;
            margin-bottom: 10px;
            
            position: relative;
            
        }
        .b::before, .b::after {
            content:'';
            position: absolute;
            
        }
        .b::before {
            height: 100%;
        }
        .b::after {
            width: 10px;
            height: 20px;
            right: -10px; top: 15px;
            background: black;
        }
        .low::before {
            width: 33%;
            background: red;
         }
         .middle::before {
             width: 66%;
             background: yellow;
         }
         .max::before {
             width: 100%;
             background: green;
         }
        
    </style>
    </head>
    <body>
        <div class="b low"></div>
        <div class="b middle"></div>
        <div class="b max"></div>
    </body>
</html>
