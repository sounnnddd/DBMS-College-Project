<html>
<head>
<title>...</title>
<style type="text/css">

body{

background-image: url("q5.jpg");
background-size:1600px 800px;


}
h1{

color:orange;

}
p{
font-size:150%;
color:orange;

}

table {
margin: 8px;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: 150%;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size:150%;
color:orange;
border: 1px solid #DDD;
}
</style>
</head>
<body>






<?php

$connection = mysqli_connect("localhost", "root", "","quiz login"); //The Blank string is the password


$query1 = "SELECT * FROM userscores"; //You don't need a ; like you do in SQL
$result1 = mysqli_query($connection,$query1);


echo "<h1>SCORE BOARD</h1>";
echo "<table>"; // start a table tag in the HTML
echo "<tr><th>ROLLNO</th><th>SCORE</th></tr>";
while($row = mysqli_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['Rollno'] . "</td>    <td>" . $row['Score'] . "</td></tr>";  //$row['index'] the index here is a field name 

}

echo "</table>"; //Close the table in HTML
echo "<table>";
$query2 = "SELECT * FROM userscores where Score in (select max(Score) from userscores)"; //You don't need a ; like you do in SQL
$result2 = mysqli_query($connection,$query2);
echo "<p>The winner is: </p>";
echo "<tr><th>ROLLNO</th><th>SCORE</th></tr>";
while($row1 = mysqli_fetch_array($result2)){   //Creates a loop to loop through results
echo "<tr><td>" . $row1['Rollno'] . "</td>    <td>" . $row1['Score'] . "</td></tr>";  //$row['index'] the index here is a field name 
}
echo "</table>";
mysqli_close($connection); //Make sur

    
    
?>
</body>
</html>