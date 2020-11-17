<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" conte="width-dev">
    <title>Laundry </title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        
    </style>
</head>
<body>
    <h1>Стиральная машинка</h1>
    
    
    <script>
        
        let clothes = ['Платья', 'Блузки', 'Юбки'];
        
        function doLaundry(array, callback) {
            alert("Начинаю стирку");
             for(let i = 0; i < clothes.length; i++) {
                alert("Постирались " + clothes[i]);
            }
            callback();
        }
        
        doLaundry(clothes, laundryEnd);
        
        function laundryEnd() {
            alert("Стирка окончена");
        }
    </script>
    
    
    <!--------------------------------
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   -->
</body>
</html>
