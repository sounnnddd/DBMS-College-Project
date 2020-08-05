<?php



    $link = mysqli_connect("localhost", "root", "", "quiz login");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $reg = mysqli_real_escape_string($link, $_POST['reg']);
    $first_name = mysqli_real_escape_string($link, $_POST['fname']);
    $last_name = mysqli_real_escape_string($link, $_POST['lname']);
    $email= mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['pwd']);
    $gender = mysqli_real_escape_string($link, $_POST['gender']);
    $age = mysqli_real_escape_string($link, $_POST['age']);

    $sql1="select * from userdetails where (Rollno='$reg');";
    $res=mysqli_query($link,$sql1);
    if(mysqli_num_rows($res)>0)
  {//1
    $row=mysqli_fetch_assoc($res);
    if($reg==$row['Rollno'])
   {//2
    echo "Registration number already exists";

   }//2
   }//1
    else
    {//3 attempt insert query execution
    $sql = "INSERT INTO userdetails (Rollno,FirstName, LastName,email,password,Gender,Age) VALUES ('$reg','$first_name','$last_name','$email','$password','$gender','$age')";
    if(mysqli_query($link, $sql))
        {//4
         echo "Records added successfully.";
         echo '<a href="starting.html"> Click here to go to the home page </a>';
         }//4
       else
       {//5
         echo "ERROR: Could not able to execute " . mysqli_error($link);
        }//5
    }//3
    // close connection
    mysqli_close($link);
?>

<?php