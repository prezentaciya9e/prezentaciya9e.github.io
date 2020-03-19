<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>succes</title>

    <link rel="stylesheet" href="css.css">

    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;500;700&display=swap" rel="stylesheet">
  </head>
  <body>


<div class="successful">
  <h1>Состояние заказа: Успешно заказано!</h1>
</div>





  </body>

  <?php
  $txt = 'Заказ: Деталь роторного двигателя. Цвет: красный. Количество: 2шт. Адрес: Улица курица дом номер петух';

  file_get_contents("https://api.telegram.org/bot968881805:AAGvCfhTbWkL9O_hs4iYB267GQYgIUOvkfQ/sendMessage?chat_id=874747616&text= $txt");
?>


<form class="qwe" action="https://api.telegram.org/bot968881805:AAGvCfhTbWkL9O_hs4iYB267GQYgIUOvkfQ/sendMessage?chat_id=874747616&text= $txt"  method="post">
<button type="submit" name="button">asdasds</button>
</form>


</html>
