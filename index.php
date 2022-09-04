<?php include 'database.php'; ?>

<?php
    //Get the total number of questions

    $query = "SELECT * FROM questions";

    //Get results

    $results =  $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;

?>
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
            <h2> TEST YOUR PHP KNOWLEDGE </h2>
            <p> This is a multiple choice quiz to test your knowledge</p>
            <ul>
                <li><strong> Number of questions: </strong><?php echo $total ?></li>
                <li><strong> Type </strong>Multiple Choice</li>
                <li><strong> Estimated time: </strong><?php echo $total*0.5 ?> minutes </li>

            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>        
    <footer>
        <div class="container">
            Copyright 
        </div>    
    </footer>
</body>
</html>