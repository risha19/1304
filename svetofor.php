 <!DOCTYPE html>
<html lang="ru">
    <head>  
        <meta charset="UTF-8">
        <title>Светофор</title>
        <style>
            body {
                text-align: center;
            }
            .box {
                position: relative;
                border: 5px solid grey;
                display: inline-block;
                background: lightgrey;
                border-radius: 15px;
                padding: 25px;
            }
            .circle {
              
               width: 150px;
               height: 150px;
                border-radius: 75px;
                border: 3px solid black;
                margin: 15px;
                position: relative;
                box-shadow: inset 0 0 15px 15px rgba(0, 0, 0, 0.3);
            }
            .red {
                background-color: red;
                
            }
            
            .orange {
                background-color: orange;
            }
            .green {
                background-color: green;
            }
        </style>
    </head>
    <body> 
        <div class="box">
            <div class="circle red"></div>
            <div class="circle orange"></div>
            <div class="circle green"></div>
       
        </div>
        
    </body>    
</html>