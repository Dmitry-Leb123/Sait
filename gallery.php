<html>
    <head>
        <div class="text">
<h1>Галлерея</h1>
</div>
<style>
   .text {
    text-align:  center;
   }
  </style>
    <title>  Галлерея </title>
    <link rel="shortcut icon" href="favicon.png" type=png>
        <meta charset="utf-8">
        <link href="test.css" rel="stylesheet">
    </head>
    <style>
   body {
    background: #0000FF url("images13.png"); 
    color: #0000FF
   }
  </style>
    <style>
   .btn {
    display: inline-block; /* Строчно-блочный элемент */
    background: #8B008B; /* Серый цвет фона */
    color: #00FFFF; /* Белый цвет текста */
    padding: 1rem 1.5rem; /* Поля вокруг текста */
    text-decoration: none; /* Убираем подчёркивание */
    border-radius: 3px; /* Скругляем уголки */
   }
  </style>
 <body> 
  <a href="index.php" class="btn">На главную</a>
 </body>
    <body>
        <div class="wrapper">
            <div id="gallery">
                <div class="gallery-line">
                    <div class="image-box">
                        <img class="min-image" id="1" src="images10.png">
                    </div>
                    <div class="image-box">
                        <img class="min-image" id="2" src="images19.png">
                    </div>
                    <div class="image-box">
                        <img class="min-image" id="3" src="images12.png">
                    </div>
                    <div class="image-box">
                        <img class="min-image" id="4" src="images13.png">
                    </div>
                    <div class="image-box">
                        <img class="min-image" id="5" src="images14.png">
                    </div>
                </div>
                <div id="big-image-box"></div>
                <div id="buttons">
               

                





                    <button onclick="prev()" id="prev_pic"><-click</button> <button onclick="next()" id="next_pic">click-></button>
                </div>
                <div class="gallery-line">
                    <div class="image-box">
                        <img class="min-image" id="6" src="images15.png">
                    </div>
                    <div class="image-box">
                        <img class="min-image" id="7" src="images16.png">
                    </div>
                    <div class="image-box">
                        <img class="min-image" id="8" src="images17.png">
                    </div>
                    <div class="image-box">
                        <img class="min-image" id="9" src="images18.png">
                    </div>
                    <div class="image-box">
                        <img class="min-image" id="10" src="images20.png">
                    </div>
                </div>
            </div>
        </div>        
        <script src="jjj.js"></script>
    </body>
    </html>