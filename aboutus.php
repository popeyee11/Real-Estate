<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- css link  -->
  <style>
    *{
        margin: 0;
        padding: 0;
    }
    .carousel-inner img{
    width: 100%;
    height: 50vh;
}
.carousel-caption{
    text-align: center;
    margin-bottom: 160px;
    z-index: 2;
}
.carousel-caption h3{
    font-size: 60px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 500;
    line-height: 60px;
    text-align: center;
}
.carousel-inner::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.6);
    z-index: 1;
}
.second{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 50px auto;
    border-radius: 20px;
}
.who{
    width: 900px;
    height: 300px;
    background-color: orange;
    padding: 20px;
    border-radius: 20px;
}
.who h1{
    text-align: center;
}
.who .content{
    text-align: center;
    padding-top: 50px;
}
.third{
    height: 300px;
    width: 100%;
    display: flex;
    margin-bottom: 30px;
}
.third .one{
    height: 100%;
    width: 50%;
    background-color: black;
    padding: 25px;
    color: orange;
}
.third .two{
    height: 100%;
    width: 50%;
    background-color: orange;
    padding: 25px;
}
.third .content{
    padding-top: 50px;
}
  </style>
</head>
<body>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/about.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h3> About Us </h3>
      </div>
    </div>
    </div>
<div class="second"> 
<div class="who">
    <div>
        <h1>Who We Are</h1>
    </div>
    <div class="content">
        <p>Luxury Residences, A Delhi/NCR (Gurgaon & Noida) based venture is a full service Real Estate firm that tailors its services to the satisfaction of our clients. Be it Buying, Selling or Leasing of Corporates, Retail or Residential Property, our single platform is designed to cater the needs of buyers and sellers. Our strength is customer satisfaction. Buying home is an essential part of everyone life’s and we ensure that process is safe, sustainable and easy to understand for our clients.</p>
    </div>
</div>
</div>

<!-- section third -->
<div class="third">
    <div class="one">
        <div>
            <h1>Our Mission</h1>
        </div>
        <div class="content">
            <p>Our mission is to simplify the real estate experience for our clients by offering them the best property requirement. We believe in transparency, honesty, and integrity, and we are committed to building long-lasting relationships with our clients based on trust and respect. As a team, we constantly strive to innovate and improve our services to exceed our clients' expectations and make their real estate journey as smooth and rewarding as possible.</p>
        </div>
    </div>
    <div class="two">
    <div>
            <h1>Our Vision</h1>
        </div>
        <div class="content">
            <p>We envision a world where every individual finds their dream home with ease. We strive to create a positive impact on the communities we serve by offering the best possible advice, and support to help them make informed decisions. Our commitment to customer satisfaction and innovation drives us to continuously improve our services, and we are dedicated to becoming the go-to platform for all real estate needs.</p>
        </div>
    </div>
</div>

<footer>
<div class="card text-center text-light bg-dark" >
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Real Estate</h5>
    <p class="card-text">Thank's For Wisiting Our Web Page. Hope you may like it.</p>
    <a href="index.php" class="btn btn-primary">Go on Home</a>
  </div>
  <div class="card-footer text-body-secondary">
    @Niranjan @Chinmay 
  </div>
</div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>