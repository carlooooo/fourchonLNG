
<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
<?php
$files = glob("admin_page/upload/carousel/*.*");

if(isset($files[0])){
  $image = $files[0];
  echo '<div class="carousel-item active">
    <img class="d-block img-fluid max" src="'.$image.'" alt="">
  </div>';

  $files = glob("admin_page/upload/carousel/*.*");
  for ($i=1; $i<count($files); $i++) {
      $image = $files[$i];
      echo '<div class="carousel-item">
        <img style="height:350px" src="'.$image.'" alt="">
      </div>';
  }

}
else { ?>
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/slide1b.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/slide2.jpg" alt="third slide">
    </div>
<?php } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
