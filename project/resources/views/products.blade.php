<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: Helvetica, 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            /*vertical-align: middle;*/
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Babür's Oil</a>
          </div>
          <div>
              <ul class="nav navbar-nav">
                <li><a href="/">Anasayfa</a></li>
                <li class="active"><a href="/products">Ürünler</a></li>
                <li><a href="/login">Üye Girişi</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="content">
    <div class="title">Babür's Oil</div>
    <div>Zeytinyağı</div>

    <div id="myCarousel" class="carousel slide col-sm-12" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/1.jpeg"  alt="Chania">
      </div>

      <div class="item">
          <img src="images/2.jpeg" alt="Chania">
      </div>

      <div class="item">
          <img src="images/3.jpeg" alt="Flower">
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

<div class="col-sm-12" style="padding-top:50px;">
    <nav class="col-sm-4">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <li class="active"><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
      </ul>
    </nav>
    <div class="col-sm-8 well">
        <div class="col-sm-6" style="padding-top:30px;">
            <img src="images/mock_urun.jpeg" class="col-sm-4">
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRODUCT NAME</p>
                <p>700 ml</p>
            </div>   
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRICE</p>
                <p>56,00 TL</p>
            </div>   
        </div>
        <div class="col-sm-6" style="padding-top:30px;">
            <a href="/productDetails">
            <img src="images/mock_urun.jpeg" class="col-sm-4">
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRODUCT NAME</p>
                <p>700 ml</p>
            </div>   
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRICE</p>
                <p>56,00 TL</p>
            </div>   
            </a>
        </div>
        <div class="col-sm-6" style="padding-top:30px;">
            <img src="images/mock_urun.jpeg" class="col-sm-4">
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRODUCT NAME</p>
                <p>700 ml</p>
            </div>   
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRICE</p>
                <p>56,00 TL</p>
            </div>   
        </div>
        <div class="col-sm-6" style="padding-top:30px;">
            <img src="images/mock_urun.jpeg" class="col-sm-4">
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRODUCT NAME</p>
                <p>700 ml</p>
            </div>   
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRICE</p>
                <p>56,00 TL</p>
            </div>   
        </div>
        <div class="col-sm-6" style="padding-top:30px;">
            <img src="images/mock_urun.jpeg" class="col-sm-4">
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRODUCT NAME</p>
                <p>700 ml</p>
            </div>   
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRICE</p>
                <p>56,00 TL</p>
            </div>   
        </div>
        <div class="col-sm-6" style="padding-top:30px;">
            <img src="images/mock_urun.jpeg" class="col-sm-4">
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRODUCT NAME</p>
                <p>700 ml</p>
            </div>   
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRICE</p>
                <p>56,00 TL</p>
            </div>   
        </div>
        <div class="col-sm-6" style="padding-top:30px;">
            <img src="images/mock_urun.jpeg" class="col-sm-4">
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRODUCT NAME</p>
                <p>700 ml</p>
            </div>   
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRICE</p>
                <p>56,00 TL</p>
            </div>   
        </div>
        <div class="col-sm-6" style="padding-top:30px;">
            <img src="images/mock_urun.jpeg" class="col-sm-4">
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRODUCT NAME</p>
                <p>700 ml</p>
            </div>   
            <div class="col-sm-4">
                <p style="font-weight:bold;">PRICE</p>
                <p>56,00 TL</p>
            </div>   
        </div>
    </div>
</div>




</div>
</div>
</body>
</html>
