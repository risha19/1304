<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Работа с текстом. Спецсимволы. Шрифты</title>
  <style>   
      @import url('https://fonts.googleapis.com/css2?family=Lato&family=Lobster&display=swap');
   /*     font-family: 'Lato', sans-serif;

    font-family: 'Lobster', cursive;
    */
      body {
          font-family: Arial;
          font-size: 12pt;
      }
      .title {
          text-align: center;
          text-transform: uppercase;
          text-decoration: underline;
          color: plum;
          text-shadow: 13px 5px 0px rgba(184, 186, 255, 0.5);
          font-family: Tahoma;
          font-size: 14pt;
          font-family: 'Lobster', cursive;
      }
      .text-one {
          text-align: justify;
      }
      .dolorem, .beatae {
         font-size: 25pt; 
      }
      .dolorem {
          font-weight: bold;
      }
      .beatae {
          font-style: italic;
      }
      .red, .green, .yellow {
          font-size: 30pt;
          font-weight: bold;
          font-family: 'Lobster', cursive;
      }
      .red {
          color: rgb(255, 50, 50);
      }
      .yellow {
          color: #f0c040;
      }
      .green {
        color: hsl(107, 70%, 44%);  
      }
      .transparent {
          color: rgba(50, 50, 255, 0.5);
      }
      .emoji {
        font-size: 40pt;  
      }
      
  </style>
</head>
<body>      
    <h1 class="title">Работа с текстом</h1>
    <p class="text-one">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Hic deleniti autem voluptatem molestias <span class="dolorem">dolorem</span>. Perferendis, a, ab, 
        debitis, eligendi totam eius provident exercitationem tempore maiores 
        excepturi deserunt repudiandae aliquam <span class="beatae"> beatae</span> vitae eveniet nobis laudantium 
        sint expedita animi iure. </p>
    <h2 class="title">Цвета</h2>
    <p>
        <span class="red">Красный</span>
        <span class="green">Зеленый</span>
        <span class="yellow">Желтый</span>
    </p>
    <h3 class="title-transparent">Прозрачный текст</h3>
    <h2 class="title">Спецсимволы и эмодзи</h2>
    <p>&copy; &#8381; &times;</p>
    <p class="emoji">&#128105;&#8205;&#127891;  &#128104;&#8205;&#127891; </p>
    <h2>Иконки</h2>
    <p> 
        <i class="fa fa-bath" aria-hidden="true" style="font-size: 50pt; color: lightblue"></i>
        <i class="fa fa-car" aria-hidden="true"></i>

    </p>
   <!--1. Как <img>, 2. как <svg>, 3. Библиотеки иконок -->
    <script src="https://use.fontawesome.com/31a1498208.js"></script>
</body>
      

