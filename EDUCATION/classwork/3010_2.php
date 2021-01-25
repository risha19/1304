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
            height: 100px;
            background-color: darkseagreen;
            border: 2px solid olive;
            box-sizing: border-box;
        }
        div[class*="col"]:nth-child(2) {
            background-color: pink;
        }
        div[class*="col"]:nth-child(2n+1) {
            background-color: yellow;
        }
        
        
    </style>
</head>
<body>
    <h1>Сетка Bootstrap</h1>
    <div class="container"> <!--container-fluid(всегда во всю ширину)-->
        <div class="row">
           <!-- <div class="col">  </div> -->
           <div class="col-4"></div>
           <div class="col-8">
             <div class="row">
               <div class="col-4"></div>
               <div class="col-4"></div>
               <div class="col-4"></div>
             </div>
           </div>
           <div class="col-4"></div>
           <div class="col-4"></div>
           <div class="col-4"></div>
           <div class="col-2"></div>
           <div class="col-8"></div>
           <div class="col-2"></div>
        </div> 
    </div>
    
    <!--Адаптивная сетка -->
    <div class="row mt-4">
        <div class="col-12 col-sm-6 col-md-8"></div>
     
        <div class="col-12 col-sm-6 col-md-4">
               <p>лоажцшкежцемжшгжкержмлоьжешгру локерушгужешгр5еж укдел</p>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-6"></div>
        <div class="col-12 col-sm-6 col-md-9 col-lg-6"></div>
    </div>
    <!-- Отступы-->
     <div class="row mt-4">
        <div class="col-4 col-md-6"></div>
        <div class="col-4 offset-4 col-md-6 offset-md-0"></div>
       <!--offset -отступ offset-0 - отменить отступ-->
        <div class="col-12"></div>
     </div>
      <!--Прячем -показываем -->
      <div class="row mt-4">
          <div class="col-12">1</div>
          <div class="col-12 d-none d-md-block">2</div> <!-- d-размер none -- скрываем col d
          размер - block --показываем col (d-display)-->
          <div class="col-12">3</div>
      </div>
      <!-- Порядок-->
      <div class="row mt-4">
          <div class="col-12" order-1 order-md-4>1</div>
          <div class="col-12" order-2 order-md-3>2</div>
          <!-- Если меняете order то проще всего задать его изначальные значения
          для каждого элемента, чтобы было удобнее потом-->
          <div class="col-12" order-3 order-md-2>3</div>
          <div class="col-12" order-4 order-md-1>4</div>
          
      </div>
      <!--Пример -->
      <div class="row mt-4">
          <div class="col-12 order-1 col-sm-6 col-md-8 order-lg-2 col-lg-6">1</div>
          <div class="col-12 order-2 col-sm-6 col-md-2 offset-md-2 order-lg-1 col-lg-6 offset-lg-0">2</div>
          <div class="col-12 order-3 d-none col-sm-4 d-sm-block col-md-7 col-lg-6">3</div>
          <div class="col-12 order-4 col-sm-4 col-md-5 col-lg-6">4</div>
          <div class="col-12 order-5 col-sm-4 col-md-12">5</div>
      </div>
      
      
     
    
    <!--Optional JS; choose one of the two! -->
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Pooper)-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
     
    
    
</body>
</html>

 <div class="row">
                    <div class="col-2 order-1 ">2.1</div>
                    <div class="col-8 order-2">2.2</div>
                    <div class="col-2 order-3">2.3</div>
                    <div class="col-2 order-4">2.4</div>
                    <div class="col-10 order-5">2.5</div>
                    <div class="col-8 order-6">2.6</div>
                    <div class="col-4 order-7">2.7</div>
                  </div>


<div class="container-lg">     
                
            </div>    
            </div>