<?php include 'database.php'; ?>
<?php session_start();  ?>
<?php
    //set question number
    $number = (int)$_GET['n'];

    $query = "SELECT * FROM questions 
                WHERE question_number = $number";

                $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

                $question = $result->fetch_assoc();


                $query = "SELECT * FROM questions";
                $results = $mysqli->query($query) or die($mysqli>error.__LINE__);
                $total = $results ->num_rows; 
         

    

     $query = "SELECT * FROM choices 
                WHERE question_number = $number";

                $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

                
            
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
       <div class="current"> Question <?php echo $question['question_number']?> of <?php echo $total ?> </div>
        <p class="question">
            <?php echo $question['text']; ?>
        </p>
        <form method="post" action="process.php">
            <ul class="choices">
                <?php while($row = $choices->fetch_assoc()) : ?>
                    <li><input name="choice" type="radio" value="<?php echo $row['id'];?>"><?php echo $row['text'];?> </li>
                <?php endwhile; ?>

            </ul>
            <input type="submit" value="submit">
            <input type="hidden" name="number" value="<?php echo $number; ?> ">

        </form>
    </main>        
    <footer>
        <div class="container">
            Copyright 
    </footer>
</body>
</html>