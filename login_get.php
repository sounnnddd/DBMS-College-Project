<?php

    session_start();
    $link = mysqli_connect("localhost", "root", "", "quiz login");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    //$regi = mysqli_real_escape_string($link, $_POST['register']);
   // $pass = mysqli_real_escape_string($link, $_POST['password']);
    $rno = mysqli_real_escape_string($link, $_POST['argin1']);
    $passWord = mysqli_real_escape_string($link, $_POST['argin2']);


    $sql1="select * from userdetails where (Rollno='$rno');";
    $res=mysqli_query($link,$sql1);
   if(mysqli_num_rows($res)>0)
{//1
    $row=mysqli_fetch_assoc($res);
    if($passWord==$row['password'])
   {//2
    // session_regenerate_id();
		 $_SESSION['loggedin'] = TRUE;
		 $_SESSION['name'] = $rno;
		 $_SESSION['id'] = $passWord;
     //echo nl2br ("Welcome " . $_SESSION['name'] . "!\nYou are ready to go!\n");
     //echo '<a href="latest.php"> Click here to start the quiz </a>';
    // echo "Invalid password";
     header('Location:latest.php');
   }//2
   else
   {//3 attempt insert query execution
        //echo "invalid password";
        header('Location:starting.html');
   }//3
}//1



    // close connection
    mysqli_close($link);
?>