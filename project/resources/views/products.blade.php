<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/star-rating.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
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

        .col-centered{
            float: none;
            margin: 0 auto;
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

<div class="col-sm-12 well" style="padding-top:50px;">
    <div class="col-sm-8 col-centered">
        <div class="col-sm-3" style="padding-top:20px;">
            <div class="col-centered" style="background-color:white;overflow: hidden">
                <img src="images/mock_urun.jpeg" class="col-sm-12">
                <div class="col-sm-12">
                    <p style="color:black;font-weight:bold;">Siena</p>
                </div>   
                <div class="col-sm-12" style="padding-left: 0px !important; padding-right: 0px !important;">
                    <p style="color:white;background-color:black;">700 ml</p>
                </div>   
                <div class="col-sm-4" style="background-color:white;">
                    <p>56,00 TL</p>
                </div>   
                <div class="col-sm-8" style="line-height:40px;background-image: url('images/star-128.png');background-repeat: no-repeat;background-position: center; ">
                    5.8
                </div> 
                <div class="col-sm-12">
                <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                </div>
            </div>   
        </div> 
        <div class="col-sm-3" style="padding-top:20px;">
            <div class="col-centered" style="background-color:white;overflow: hidden">
                <img src="images/mock_urun.jpeg" class="col-sm-12">
                <div class="col-sm-12">
                    <p style="color:black;font-weight:bold;">Siena</p>
                </div>   
                <div class="col-sm-12" style="padding-left: 0px !important; padding-right: 0px !important;">
                    <p style="color:white;background-color:black;">700 ml</p>
                </div>   
                <div class="col-sm-4" style="background-color:white;">
                    <p>56,00 TL</p>
                </div>   
                <div class="col-sm-8" style="line-height:40px;background-image: url('images/star-128.png');background-repeat: no-repeat;background-position: center; ">
                    5.8
                </div> 
                <div class="col-sm-12">
                <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                </div>
            </div>   
        </div> 
        <div class="col-sm-3" style="padding-top:20px;">
            <div class="col-centered" style="background-color:white;overflow: hidden">
                <img src="images/mock_urun.jpeg" class="col-sm-12">
                <div class="col-sm-12">
                    <p style="color:black;font-weight:bold;">Siena</p>
                </div>   
                <div class="col-sm-12" style="padding-left: 0px !important; padding-right: 0px !important;">
                    <p style="color:white;background-color:black;">700 ml</p>
                </div>   
                <div class="col-sm-4" style="background-color:white;">
                    <p>56,00 TL</p>
                </div>   
                <div class="col-sm-8" style="line-height:40px;background-image: url('images/star-128.png');background-repeat: no-repeat;background-position: center; ">
                    5.8
                </div> 
                <div class="col-sm-12">
                <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                </div>
            </div>   
        </div> 
        <div class="col-sm-3" style="padding-top:20px;">
            <div class="col-centered" style="background-color:white;overflow: hidden">
                <img src="images/mock_urun.jpeg" class="col-sm-12">
                <div class="col-sm-12">
                    <p style="color:black;font-weight:bold;">Siena</p>
                </div>   
                <div class="col-sm-12" style="padding-left: 0px !important; padding-right: 0px !important;">
                    <p style="color:white;background-color:black;">700 ml</p>
                </div>   
                <div class="col-sm-4" style="background-color:white;">
                    <p>56,00 TL</p>
                </div>   
                <div class="col-sm-8" style="line-height:40px;background-image: url('images/star-128.png');background-repeat: no-repeat;background-position: center; ">
                    5.8
                </div> 
                <div class="col-sm-12">
                <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                </div>
            </div>   
        </div> 
        <div class="col-sm-3" style="padding-top:20px;">
            <div class="col-centered" style="background-color:white;overflow: hidden">
                <img src="images/mock_urun.jpeg" class="col-sm-12">
                <div class="col-sm-12">
                    <p style="color:black;font-weight:bold;">Siena</p>
                </div>   
                <div class="col-sm-12" style="padding-left: 0px !important; padding-right: 0px !important;">
                    <p style="color:white;background-color:black;">700 ml</p>
                </div>   
                <div class="col-sm-4" style="background-color:white;">
                    <p>56,00 TL</p>
                </div>   
                <div class="col-sm-8" style="line-height:40px;background-image: url('images/star-128.png');background-repeat: no-repeat;background-position: center; ">
                    5.8
                </div> 
                <div class="col-sm-12">
                <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                </div>
            </div>   
        </div> 
    </div>
</div>




</div>
</div>



</body>
</html>
