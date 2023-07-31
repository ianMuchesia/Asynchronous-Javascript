<?php
$conn = mysqli_connect('localhost', 'Ian','password', 'ajax');





if(isset($_GET['id'])){
   $id=mysqli_real_escape_string($conn,$_GET['id'] );



  $query= "SELECT * FROM users WHERE id=$id";

   $result = mysqli_query($conn, $query);
 
   $user = mysqli_fetch_assoc($result);

   echo json_encode($user); 
}

if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST: Your name is '. $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";
    if(mysqli_query($conn, $query)){
        echo 'User Added...';
    }else{
        echo 'Error:'.mysqli_error($conn);
    }
}