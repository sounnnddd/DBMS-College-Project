<?php

    $link = mysqli_connect("localhost", "root", "", "quiz login");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }




    $hi = mysqli_real_escape_string($link, $_POST['hello']); 
    $hi1 = mysqli_real_escape_string($link, $_POST['hello1']); 
	
    $sql = "INSERT INTO userscores(Rollno,Score) VALUES ('$hi','$hi1')";

    if(mysqli_query($link, $sql)){
        echo "score added!";
        header("Location:winner.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>

