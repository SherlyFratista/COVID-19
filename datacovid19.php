<?php 
$url = file_get_contents ('https://api.covid19api.com/live/country/Qatar/status/confirmed');
$data = json_decode($url, true);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <title>Update Data COVID19 Negara Qatar</title>
    <!-- Image and text -->
        <nav class="navbar navbar-light" style="background-color: #778899;">
        <a class="navbar-brand" href="#">
            <img src="Qatar.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Qatar
        </a>
        </nav>
  </head>
  <body style="background-color: #E6E6FA;">
    <div class="col-lg-6 d-none d-lg-block" style="margin-top: 20px; margin-bottom: 20px; margin-left: 300px; margin-right: 150px;">
        <div class="card" style="width: 40rem;">
        <div class="card-header" style="background-color: #9370DB;">
            <center>
              <h5>DATA COVID19</h5 style="font-color: #9370DB;">
            </center>
        </div>
            <div class="card-body">
              <p class="card-text">
                <div class="panel" style="font-size: medium; width: 100%; height: 100%;">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" style="background-color: #9370DB;">
                    <div class="carousel-item active">
                    <img src="positif.jpg" class="d-block w-100" alt="positif" style="width: 80px; height: 350px; background-color: #9370DB;">
                    <div class="carousel-caption d-none d-md-block" style="background-color: #778899;">
                        <i class="fa fa-frown-open"></i>
                        <h5>POSITIF</h5>
                        <p class="card-text text-center"><?php echo $data[18]["Confirmed"]; ?></p>
                        <p class="card-text text-center"><?php echo $data[18]["Date"]; ?></p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="positif.jpg" class="d-block w-100" alt="positif" style="width: 80px; height: 350px; background-color: #9370DB;">
                    <div class="carousel-caption d-none d-md-block" style="background-color: #778899;">
                        <i class="fa fa-grin-alt"></i>
                        <h5>SEMBUH</h5>
                        <p class="card-text text-center"><?php echo $data[18]["Recovered"]; ?></p>
                        <p class="card-text text-center"><?php echo $data[18]["Date"]; ?></p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="positif.jpg" class="d-block w-100" alt="positif" style="width: 80px; height: 350px; background-color: #9370DB;">
                    <div class="carousel-caption d-none d-md-block" style="background-color: #778899;">
                        <i class="fa fa-frown-open"></i>
                        <h5>ODP</h5>
                        <p class="card-text text-center"><?php echo $data[18]["Active"]; ?></p>
                        <p class="card-text text-center"><?php echo $data[18]["Date"]; ?></p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="positif.jpg" class="d-block w-100" alt="positif" style="width: 80px; height: 350px; background-color: #9370DB;">
                    <div class="carousel-caption d-none d-md-block" style="background-color: #778899;">
                        <i class="fa fa-frown-open"></i>
                        <h5>Meninggal</h5>
                        <p class="card-text text-center"><?php echo $data[18]["Deaths"]; ?></p>
                        <p class="card-text text-center"><?php echo $data[18]["Date"]; ?></p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
             </div>
          </div>
      </div>
   </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
  <div class="card-footer text-center" style="background-color: #778899;">
    @sherlyfratista
  </div>
</html>