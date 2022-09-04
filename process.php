<?php include 'database.php';?>
<?php
    session_start();

    //Check for the score

    if (!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }

   if($_POST ){
       $number = $_POST['number'];
       $selected_choice = $_POST['choice'];
       $next = $number++;

       //Get total
       $query = "SELECT * FROM questions";
       $results = $mysqli->query($query) or die($mysqli>error.__LINE__);
       $total = $results ->num_rows; 

        // Get correct choice
        $query = "SELECT * FROM choices 
                    WHERE question_number = $number AND is_correct = 1"; 
        
        //Get result
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

        //Get row
        $row = $result->fetch_assoc();

        //Set correct choice
        $correct_choice = $row['id'];

        //Compare
        if($correct_choice == $selected_choice){
            //Answer is correct
            $_SESSION['score']++;
        }

        if($number == $total){
            header("location: final.php");
            exit();

        }else{
            header("location: question.php?n=".$next);
        }

   }

?>