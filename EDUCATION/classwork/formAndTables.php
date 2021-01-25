<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Таблицы и формы</title>
  </head>
  <body>
    <table border="1">
      <thead> 
      <tr>
        <th rowspan="2" width="75" height="75">№ п/п</th>
        <th colspan='2'>Теги</th>
        
      </tr>
      <tr>
      
      <th height="30" width="45" >Тег</th>
      <th>Значение</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>p</td>
          <td rowspan="4">для текста</td>
        </tr>
        <tr>  
          <td>2</td>
          <td>a</td>
          
        </tr>
        <tr>
          <td>3</td>
          <td>b</td>
          
        </tr>
         <tr>
          <td>4</td>
          <td>i</td>
          
        </tr>
        <tr>
          <td>5</td>
          <td>table</td>
          <td>таблица</td>
        </tr>
        <tr>
          <td>6</td>
          <td>tr</td>
          <td>ряд таблицы</td>
        </tr>
         <tr>
          <td>7</td>
          <td>td</td>
          <td rowspan="2">Ячейки таблицы</td>
        </tr>
         <tr>
          <td>8</td>
          <td>th</td> 
        </tr>
      </tbody>
    </table>
      <!---->
    <form action="#" method="">
      <h2>Оставить заявку</h2>
      <div>
      <input type="text" placeholder="введите имя" name="login" value="Иван">
      </div>
      <div>
          <input type="email" name="email" placeholder="Введите email">
      </div>
      <div>   
        <label>
          <input type="radio" name="framework" value="static" checked>
          <span>Статический</span>
        </label>
        <label>
          <input type="radio" name="framework" value="adaptive">
          <span>Адаптивный</span>
        </label>
       </div> 
      <div>
      <label>
        <input type="checkbox" name="support" id="html-input">
        <label for="html-input">Поддержка</label>
      </label>
      <label>
        <input type="checkbox" name="design">
        <span>Дизайн</span>
      </label>
      <label>
        <input type="checkbox" name="seo">
        <span>SEO</span>
      </label>
      </div>
      <p>Загрузить ваш макет</p>
      <div>
        <input type="file" name="project">
      </div>
        <div>
        <textarea name="about" id="" cols="30" rows="10" placeholder="Ваш комментарий"></textarea>
      </div>
       <input type="submit" value="Отправить">
       <input type="button" value="Очистить">
      
    </form>
