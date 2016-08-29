<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 35%;
      margin: auto;
  }
  
  body{
	background-color: WhiteSmoke;
}
div.container {
    width: 100%;
    border: 2px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: gray;
    clear: left;
    text-align: center;
}
nav {
    float: left;
    max-width: 160px;
    margin: 2px;
    padding: 2em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

div.img {
    margin: 7px;
    border: 3px solid #ccc;
    float: left;
    width: 200px;
}

div.img:hover {
    border: 2px solid #777;
}

div.img img {
    width: 50%;
    height: auto;
}

div.desc {
    padding: 20px;
    text-align: center;
}
  </style>
</head>
<body>
<header>
   <h1>Laptop</h1>
</header>
<div="menu">
  <ul>
	<li>Home</li>
    <li>Order</li>
    <li>Services</li>
	<li>Add Cart</li>
  </ul>
  </div>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images1.jpg" alt="Dell" width="100" height="100">
      </div>

      <div class="item">
        <img src="images2.jpg" alt="Lenovo" width="100" height="100">
      </div>
    
      <div class="item">
        <img src="download.jpg" alt="Hp" width="100" height="100">
      </div>

      <div class="item">
        <img src="download2.jpg" alt="Asus" width="100" height="100">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<nav>
  <ul>
    <li><a href="#">Hp</a></li>
    <li><a href="#">Dell</a></li>
    <li><a href="#">Lenovo</a></li>
	<li><a href="#">Asus</a></li>
  </ul>
</nav>
</div>
<div class="img">
  <a target="_blank" href="images1.jpg">
    <img src="images1.jpg" alt="Dell" width="600" height="400">
  </a>
  <div class="desc">Dell Vostro 15 3558 15.6-inch Laptop (Celeron Dual Core - 5th Gen /4GB/500GB/DOS) , Black, Price: Rs. 20,986/-</div>
</div>

<div class="img">
  <a target="_blank" href="images2.jpg">
    <img src="images2.jpg" alt="Lenovo" width="600" height="400">
  </a>
  <div class="desc">Lenovo Ideapad 100 80RK002DIH 14-inch Laptop (Core i3-5005U/4GB/500GB/DOS/Integrated Graphics), Black, Price: Rs. 22,999/-</div>
</div>

<div class="img">
  <a target="_blank" href="download.jpg">
    <img src="download.jpg" alt="Hp" width="600" height="400">
  </a>
  <div class="desc">HP 15-be003TU 15.6-inch Laptop (i3-5005U/4GB/1TB/Intel HD Graphics 5500/DOS 2.0), Black, Price: Rs. 25,990/-</div>
</div>

<div class="img">
  <a target="_blank" href="download2.jpg">
    <img src="download2.jpg" alt="Asus" width="600" height="400">
  </a> 
  <div class="desc">Asus A555LF-XO371T 15.6-inch Laptop (Core i3-5010U/8GB/1TB/Windows 10/2GB Graphics), Black, Price: Rs. 37,998/-</div>
</div>

<footer>Copyright © amazon.in</footer>

</body>
</html>

