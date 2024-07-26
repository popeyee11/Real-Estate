<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <style>
    body{
        background-color: black;
    }
    .container{
        height: 100vh;
        width: 100%;
        /* background-color: darkgoldenrod; */
        align-items: center;
        text-align: center;
        /* display: flex; */
    }
.inside-box{
    /* height: 400vh; */
    width: 100%;
    background-color: black;
    display: flex;
    padding: 25px;
}
.box{
    padding: 25px;
    height: 200px;
    width: 500px;
}
.box img{
    height: 200px;
}
.content{
    text-align: center;
}
  </style>
</head>

<body>
<!-- <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      <img src="./images/lc1.jpg" alt="">
    </div>
    <div class="col">
    <img src="./images/lc1.jpg" alt="">
    </div>
    <div class="col">
    <img src="./images/lc1.jpg" alt="">
    </div>
  </div>
</div> -->

<div class="container-fluid bg-dark text-light py-3">
    <header class="text-center">
      <h1>Our Locations</h1>
    </header>
  </div>

<div class="container">
    <div class="inside-box">
        <div class="box">
            <img src="./images/lc1.jpg" alt="">
            <div class="content">
                <h2>Mumbai</h2>
            </div>
        </div>
        <div class="box">
            <img src="./images/lc2.jpg" alt="">
            <div class="content">
                <h2>Delhi</h2>
            </div>
        </div>
        <div class="box">
            <img src="./images/lc3.jpg" alt="">
            <div class="content">
                <h2>Pune</h2>
            </div>
        </div>
    </div>
    <div class="inside-box">
        <div class="box">
            <img src="./images/lc4.jpg" alt="">
            <div class="content">
                <h2>Banglore</h2>
            </div>
        </div>
        <div class="box">
            <img src="./images/lc5.jpg" alt="">
            <div class="content">
                <h2>Himachal Pradesh</h2>
            </div>
        </div>
        <div class="box">
            <img src="./images/lc6.jpg" alt="">
            <div class="content">
                <h2>Noida</h2>
            </div>
        </div>
    </div>
    <!-- <div class="inside-box">
        <div class="box">
            <img src="./images/lc1.jpg" alt="">
            <div class="content">
                <h2>Mumbai</h2>
            </div>
        </div>
        <div class="box">
            <img src="./images/lc1.jpg" alt="">
            <div class="content">
                <h2>Mumbai</h2>
            </div>
        </div>
        <div class="box">
            <img src="./images/lc1.jpg" alt="">
            <div class="content">
                <h2>Mumbai</h2>
            </div>
        </div>
    </div> -->

</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>