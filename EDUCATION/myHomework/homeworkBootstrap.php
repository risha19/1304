<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" conte="width-dev">
    <title>Сетка Bootstrap </title> 
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <style> 
        div[class*="col"] {
            min-height: 100px;
            background-color: darkseagreen;
            border: 2px solid yellow;
            box-sizing: border-box;
            color: white;
            text-align: center;
            padding: 10px;
        }
        div[class*="green"] {
            background-color: green;
        }
        div[class*="orange"] {
            background-color: orange;
        }
        div[class*="blue"] {
            background-color: blue;
        }
        div[class*="plum"] {
            background-color: plum;
        }
        div[class*="darkcyan"] {
            background-color: darkcyan;
        }
        div[class*="pink"] {
            background-color: pink;
        }
        div[class*="peru"] {
            background-color: peru;
        }
        
        div[class*="gold"] {
            background-color: gold;
        }
        
        
        
        
    </style>
</head> 
<body>  
    <div class="container">
      <div class="row mt-4">
        <div class="col-12 order-1 col-sm-12 green col-md-3 col-lg-12">1</div>
        <div class="col-12 order-2  orange  d-none  d-md-block col-md-8 col-lg-6 order-lg-3 ">2
            <div class="container-lg">  
                <div class="row">
                    <div class="col-2 order-1 d-none d-lg-block">2.1</div>
                    <div class="col-8 order-2 d-none d-lg-block">2.2</div>
                    <div class="col-2 order-3 d-none d-lg-block">2.3</div>
                    <div class="col-2 order-4 d-none d-lg-block">2.4</div>
                    <div class="col-10 order-5 d-none d-lg-block">2.5</div>
                    <div class="col-8 order-6 d-none d-lg-block">2.6</div>
                    <div class="col-4 order-7 d-none d-lg-block">2.7</div>
                </div>
            </div>
        </div>
        <div class="col-12 order-3 blue d-none  d-md-block col-md-1 col-lg-6 order-lg-2">3</div>
        <div class="col-12 order-4 plum col-sm-4 col-md-4 col-lg-5 order-lg-6">4</div>
        <div class="col-12 order-5 darkcyan col-sm-8 offset-md-4 col-md-4 offset-lg-0 col-lg-2 order-lg-4">5</div>
        <div class="col-12 order-6 peru col-sm-8 col-md-5 col-lg-2 order-lg-5">6</div>
        <div class="col-12 order-7 pink d-none d-md-block offset-md-1 col-md-3 offset-lg-0 col-lg-1">7</div>
        <div class="col-12 order-8 gold offset-sm-2 col-sm-2 offset-md-2 col-md-1 offset-lg-0 col-lg-2">8</div>
      </div>
    </div>
</body>
</html>
