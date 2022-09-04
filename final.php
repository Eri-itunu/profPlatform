<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP QUIZZER</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1> PHP QUIZZER </h1>
        </div>
    </header> 
    <main>
        <div class="container">
            <h2> You're done</h2>
                <p> Congrats you have completed the test</p>
                <p>Final score: <?php echo $_SESSION['score'];?> </p>
                <?php
                    session_destroy();
                ?>
                <a href="question.php?n=1" class="start">Take Again</a>
        </div>
    </main>        
    <footer>
        <div class="container">
            Copyright 
    </footer>
</body>
</html>