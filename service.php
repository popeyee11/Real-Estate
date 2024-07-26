<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    *{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body{
      background: url(./images/serv-bg-1.jpg);
    }
    .form{
      display: flex;
      justify-content: center;
      text-align: center;
      margin: auto;
    }

  </style>
</head>
<body>
  <div class="container-fluid bg-dark text-light py-3">
    <header class="text-center">
      <h1>Services</h1>
    </header>
  </div>
  <section class="form my-2 bg-dark w-50 text-light text-center "> 
<form action="servicedata.php" method="post" >
	<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile.No</label>
    <input type="number" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<!-- <select class="form-select" aria-label="Default select example">
  <option selected>Select Your Option</option>
  <option value="1">Rent our Property</option>
  <option value="2">Buy Property</option>
  <option value="3">Sell Property</option>
</select> -->
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Option (Buy, Rent, Sell)</label>
    <input type="text" name="select" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Location</label>
    <input type="select-options" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="input-group">
  <br>
  <span class="input-group-text">Property Details</span>
  <textarea class="form-control" name="details" aria-label="With textarea"></textarea>
  </div>
  <button type="submit" class="btn btn-success" style="margin-top: 20px;" >Submit</button>
	</form>
  </section>










<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>