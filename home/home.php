<?php
include('../layout/header.php');
include('../layout/menu.php');
?>

<h3 align="center">Página inicial</h3>
<br>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../img/slide3.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/slide2.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../img/slide1.jpg" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<?php
include('../layout/footer.php');
?>