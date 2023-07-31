<?php

$conn = mysqli_connect('localhost', 'Ian', 'password', 'ajax');

$query = 'SELECT * FROM users';

//get results 
 $result = mysqli_query($conn, $query);


 //fetch data
 $users = mysqli_fetch_all($result, MYSQLI_ASSOC);


 echo json_encode($users);