<?php
include "php/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="refresh" content="2"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
  <title>My First API</title>
</head>

<body>

  <div class="container">
    <div class="card mt-5 w-75">
      <div class="alert alert-info" id="info"></div>
      <form class="card-body" action="php/first.php" method="POST" id="card">
        <div class="form-group" id="country">
          <label for="">What Country?</label>
          <input class="form-control" type="text" name="q1">
        </div>
        <div class="form-group" id="country">
          <label for="">Your Hobby?</label>
          <input class="form-control" type="text" name="q2">
        </div>
        <div>
          <button class="form-group btn btn-primary mt-2" type="submit">Submit</button>
        </div>
      </form>
    </div>

    <div class="w-75, mt-5" id="db">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Country</th>
            <th>Hobby</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <?php
        global $conn;
        $select = "SELECT * FROM snack";
        $result = mysqli_query($conn, $select);
        if (!$result) {
          die("error in connection");
        }
        $sr = 0;
        while ($record = mysqli_fetch_assoc($result)) {
          $country = $record['country'];
          $hobby = $record['hobby'];
          $sr++;
        ?>
        <tbody>
          <td id="sn"><?php echo $sr ?></td>
          <td id="question1"><?php echo $country ?></td>
          <td id="question2"><?php echo $hobby ?></td>
          <td>
            <button class="btn btn-warning">edit</button>
          </td>
          <td>
            <button class="btn btn-danger">delete</button>
          </td>
        </tbody>
        <?php
        }
      ?>
      </table>
    </div>
  </div>

</body>
<script src="assets/js_cdn/jquery-3.6.0.js"></script>
<script src="assets/main.js"></script>
<script src="assets/js_cdn/js/bootstrap.min.js"></script>

</html>