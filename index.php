<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <title>Calculator</title>
</head>
<style>
  .row {
    margin: 2% 0% 2% 8%;
  }

  /* margin-top: 2%; */
  /* margin-right: 2%; */
  /* margin-bottom: 2%; */
  /* margin-left: 2%; */

  .button {
    margin: 1%;
    padding: 20px;
    width: 20%;
    border-radius: 20px;
    cursor: pointer;
  }

  .input1 {
    width: 28%;
    padding: 10px;
    border-radius: 11px;
    margin-left: 10px;

  }

  .bg {
    background-color: gainsboro;
  }

  body {
    background: linear-gradient(to right, #CBCE91FF, #EA738DFF);
  }
</style>

<?php include 'includes/dbconn.php'; ?>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
  $suggestion = $_POST['suggestion'];
  // echo $suggestion;die;
  $query = mysqli_query($conn,"INSERT INTO `suggestions` (`suggestion`, `created_at`) VALUES ('$suggestion', current_timestamp())");
  //  echo $query; die;
  }
$query1 = mysqli_query($conn,"SELECT count(`id`) as total FROM `suggestions`"); 
$result=mysqli_fetch_assoc($query1);
// echo $result['total'];die;


?>

<body>

  <?php include 'includes/navbar.php'; ?>

  <div class="container my-4">
    <div class="border border-secondary bg" style="width: 40%; border-radius: 7px; float:left">
      <div class="text-center my-4">
        <h3>My Calculator</h3>
        <p class="d-flex justify-content-center">Have a look at my calculator. I would very much like to know how it renders on your browser. Any constructive feedback is highly appreciated.</p>
      </div>
      <div class="row">
        <input type="text" class="input1" style="width: 84%; background-color: #d4fc79">
      </div>
      <div class="row">
        <button class="button" style="background-color: aqua;">C</button>
        <button class="button" style="background-color: aqua;">M+</button>
        <button class="button" style="background-color: aqua;">M-</button>
        <button class="button" style="background-color: aqua;">/</button>
      </div>
      <div class="row">
        <button class="button">7</button>
        <button class="button">8</button>
        <button class="button">9</button>
        <button class="button" style="background-color: aqua;">*</button>
      </div>
      <div class="row">
        <button class="button">4</button>
        <button class="button">5</button>
        <button class="button">6</button>
        <button class="button" style="background-color: aqua;">-</button>
      </div>
      <div class="row">
        <button class="button">1</button>
        <button class="button">2</button>
        <button class="button">3</button>
        <button class="button" style="background-color: aqua;">+</button>
      </div>
      <div class="row">
        <button class="button">00</button>
        <button class="button">0</button>
        <button class="button">.</button>
        <button class="button" style="background-color: aqua;">=</button>
      </div>
    </div>

    <!-- Suggestion Form  -->

    <div class="border border-secondary bg" style="width: 40%; border-radius: 7px; float:right">
      <div class="text-center my-4">
        <h3>Suggestion</h3>
      </div>
      <div class="row">
        <div class="col-12">
          <form action="index.php" method="POST">
            <input type="text" name="suggestion" required class="form-control" placeholder="Please write your suggestion to make us better">
            <button class="btn btn-sm btn-success" style="float: right;">Submit</button>
          </form>
        </div>
        <div class="col-12"></div>
        <div class="col-12">
          Total Suggestion Recieved : <?php echo $result['total']; ?>
        </div>
      </div>
    </div>
  </div>

  <script src="calculator.js"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>