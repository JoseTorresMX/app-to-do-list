<?php
session_start();


$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'todolist'
);

//if (isset($conn)) {
//  echo 'db conectadad';
//}