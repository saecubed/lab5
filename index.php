<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Berdnikova_lab5</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <style >
        body { 
            background: url(background1.png); 
            background-position: top;
        }
        
      </style>
</head>
<body>


    <header>
        <nav class = "top_text">
            <a href="index.php" class = "my_page"> Моя страница </a>
            <a href="#">Главная</a>
            <a href="#contacts">Контакты</a>
            <a href="#achieve">Достижения</a>
            <a href="feedback.php">Форма фидбека</a>            
            <a href="auth.php">Форма регистрации</a>
        </nav>
    </header>


    <main>
            <table border="3px" bordercolor = "black" bgcolor = "white" width = "500" align="center" class="table" id = "achieve">
            <?php require "table.php"; ?>
            </table>
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30
    </pre></footer>


  </body>
</body>
</html>