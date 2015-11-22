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
                <li><a href="/products">Ürünler</a></li>
                <li class="active"><a href="/login">Üye Girişi</a></li>
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




<div class="col-sm-12 well well-lg">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10">          
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
          </div>
      </div>
  </div>
  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
