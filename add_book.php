<?php

include "db.php";


$title=$_POST['title'];
$author=$_POST['author'];
$quantity=$_POST['quantity'];


$query=
"INSERT INTO books
(title,author,quantity)
VALUES
('$title','$author','$quantity')";


mysqli_query($conn,$query);


echo "Book Added Successfully";

?>
