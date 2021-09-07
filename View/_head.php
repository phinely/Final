<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mac Bolan | Services</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="keywords" content="Intergateur de service, solutions informatiques, engins lourds, travaux publics, construction, cameroun, yaoundé, formation en continue, réalisation, immeuble, maison"/>
    <meta name="description" content="MMG une entreprise basée au cameroun."/>
    <link rel="stylesheet" href="<?php echo ASSETS?>css/style.css">
    <link rel="stylesheet" href="<?php echo ASSETS?>css/media.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo ASSETS;?>js/typed.js"></script>
    <link rel="stylesheet" href="<?php echo ASSETS?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS?>css/jarallax.css">
    <link rel="shortcut icon" href="<?php echo ASSETS;?>stock-images/homepage/logo.png">
    <link rel="stylesheet" href="<?php echo ASSETS?>css/slick.css">
    <link rel="stylesheet" href="<?php echo ASSETS?>css/slick-theme.css">

  </head>
<body>


<!-- navbar start -->

<header>
  
  <a href="?r=index" class="logo">Mac Bolan <span>Services</span>
  </a>
  <input type="checkbox" name="" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
  
  <ul class="navigation">
    <li><a href="?r=index">Accueil</a></li>
    <li><a href="#rubrique" class="list">Nos rubriques <i class="fas fa-chevron-down"></i></a>
    </li>
    <li><a href="#contact">contact</a></li>
    <li><a href="?r=faq">Faq/suggestions</a></li>
    <li><a href="?r=AboutUs">Qui sommes nous ?</a></li>
  </ul>

  <div class="content-list" style="">
        <ul>
        <div class="row">
        <div class="col-md-6">
          <li><a href="?r=terrains" style="color:#111;">Achat & vente de terrains</a></li>
          <li><a href="?r=engins" style="color:#111;">Location d'engins lourds</a></li>
          <li><a href="?r=Bc" style="color:#111;">Batiment & construction</a></li>
          <li><a href="?r=apparts" style="color:#111;">Appartements meublés</a></li>
          </div>
          <div class="col-md-6">
            
          <li><a href="?r=cars" style="color:#111;">Location & vente de voiture</a></li>
          <li><a href="?r=hotels" style="color:#111;">Reservation d'hôltel</a></li>
          </div>

        </div>
        </ul>
      </div>
</header>

<script>
  window.addEventListener('scroll',function(){
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY>0)
  })

  const list = document.querySelector(".list");

  list.addEventListener('mouseover',function(){
    document.querySelector(".content-list").classList.toggle("on");
    document.querySelector(".fa-chevron-down").classList.toggle("on");
  })

  function togglemenu(){
  const menutoggle=document.querySelector(".menutoggle");
  const nav=document.querySelector(".navigation");
  menutoggle.classList.toggle("active");
  nav.classList.toggle("active");
  }
</script>
<script src="<?php echo ASSETS;?>js/bootstrap.bundle.min.js"></script>
<a href="#"><div class="card"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div></a>
<!-- navbar end -->

<style>
.card{
  position:fixed;
  top:7em;
  right:2em;
  z-index:9999;
  width:35px;
  height:35px;
  padding:5px;
  background:transparent;
  box-shadow:0px 2px 15px rgb(218, 5, 104);
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  color:rgb(218, 5, 104);
}

.content-list{
  position:absolute;
  background:#fff;
  width:600px;
  margin: 5% 0;
  transition:.5s;
  transform:translateY(50px);
  left:64%;
  top:20%;
  transform:translateX(-50%) ;
  transition:.25s;
  pointer-events:none;
  opacity:0;
}

.content-list ul{
  list-style: none;
  width:100%;
  display:inline-block;
}
.content-list ul li{
  margin: 2% 0;
  width:100%;

}
.content-list ul li a{
  text-decoration:none;
}
.content-list.on{
  top:10%;
  pointer-events:all;
  opacity:1;
}
.fa-chevron-down.on{
    transform: rotate(180deg);
}

</style>