<?php
include 'db.php';
if(isset($_POST['q1'])){
  global $conn;
  $quest1 = $_POST['q1'];
  $quest2 = $_POST['q2'];

  // modelling
  // $model['first'] = "$quest1";
  // $model['second'] = "$quest2";
  
  // $conversion = json_encode($model);
  
  $query = "INSERT INTO snack(country, hobby) VALUE ('$quest1', '$quest2')";
  $result = mysqli_query($conn, $query);
  if(!$result){
    die("Error in connection");
  }else{
    // echo "successful";
  }  
}
?>