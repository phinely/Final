<div class="Box">
<div class="imgBox jarallax">
    <img src="<?php echo ASSETS?>stock-images/homepage/03.jpg" class="d-block w-100 jarallax-img" alt="...">
</div>
<div class="content">
<h3>Equipement</h3>
<p>Notre gamme se compose de plusieurs machines en constante amélioration afin de répondre aux mieux aux attentes en perpétuelle évolution de nos clients</p>
</div>
</div>


<div class="forcont container" id="usefull">
    <div class="row">
        <div class="col-md-4">
            <div class="box"><i class="fas fa-address-book"></i></div>
            <h4>inscrivez-vous</h4>
            <p>pour être au courant des nouveautés du site inscrivez vous à la newsletter</p>
            <form method="" action="#" class="form">
                <input type="email" placeholder="Entrer votre addresse mail..."><br><br>
                <button>Souscrire</button>
            </form>
        </div>
        <div class="col-md-4">
        <div class="box"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>

            <h4>j'ai besoin d'un service...</h4>
            <form action="#" class="form">
            <div class="dem">
                <label for="dem">libellé de la demande</label><br>
                <input type="text" placeholder='je désir...' required="required">
            </div>
            <div class="price">
                <label for="dem">Prix</label><br>
                <input type="text" placeholder='De quelle somme disposez...' required="required">
            </div>
            <div class="contact">
                <label for="dem">Téléphone</label><br>
                <input type="text" placeholder='Votre n° de Téléphone' required="required"><br>
                <label for="dem">E-mail</label><br>
                <input type="email" name="" id="" placeholder="Votre @ mail" required="required">
            </div>
            <div class="send">
                <button>VALIDER LA COMMANDE</button>
            </div>
        </form>
        </div>
        <div class="col-md-4">
        <div class="box"><i class="fa fa-phone" aria-hidden="true" style="transform:rotateY(180deg);"></i></div>
            <h4>disponibilité 24/7</h4>
            <p>Nous sommes ouvert <br>Lundi-vendredi :8h-20h<br>samedi:8h-12h
            </p>
        </div>
    </div>
</div>

<section class="Box-sec">
    <h2>NOS MEILLEURES OFFRES</h2>

    <div class="BigBox">
        <div class="imgBx jarallax">
            <img src="<?php echo ASSETS?>stock-images/homepage/puit.jpg" alt="" class="jarallax-img">
        </div>
        <div class="content" data-jarallax-element="-300 0">
            <h3>Puits</h3>
            <p>Ce type d'ouvrage est exécuté manuellement,mais respectant toutes les exigences techniques en la matière,notament la qualité du sol, la nappe d'eau,les équipements du Puits
                ,la superstructure. Les études géophysiques sont nécessaires pour la réussite de ce type d'ouvrage...<br><br><a href="#">Savoir plus</a></p>
        </div>
    </div>
    <div class="BigBox">
        <div class="imgBx jarallax">
            <img src="<?php echo ASSETS?>stock-images/homepage/piaule.jpg" alt="" class="jarallax-img">
        </div>
        <div class="content" data-jarallax-element="-300 0">
            <h3>Location de maison</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis tempore nulla quisquam ullam vitae tempora illum commodi corrupti eum, facere, placeat quam sint saepe esse vero id laborum quae adipisci.<br><br><a href="#">Savoir plus</a></p>
        </div>
    </div>
    <div class="BigBox">
        <div class="imgBx jarallax">
            <img src="<?php echo ASSETS?>stock-images/homepage/irr2.jpg" alt="" class="jarallax-img">
        </div>
        <div class="content" data-jarallax-element="-300 0">
            <h3>irrigation</h3>
            <p>Nous vous proposons des systèmes d'irrigation en fonction de vos besoins<br>Système par aspersion de type "Solid-Set"<br>Système goute à goute de type "Ruban annuel"<br>Système portatif par aspersion(canon)...<br><br><a href="#">Savoir plus</a></p>
        </div>
    </div>
</section>


<h2 class="g" id="gallerie">NOTRE GALERIE</h2>
<div class="container-fluid gallery" >
   <?php
   for ($i=1; $i<=$c ; $i++) { 
?>
        <a href="portfolio?page=<?php echo $i;?>">
        <div class="image">
            <img src="<?php echo ASSETS?>stock-images/homepage/mcb/<?php if($i<10){echo '0'.$i;} else{echo $i;}?>.jpg" alt="">
        </div>
        </a>
    <?php
   }
    ?>
</div>


<style>
    body{
        background:#222;
    }
    .forcont{
        position:relative;
        background:#fff;
        margin-top:-15%;
        z-index:7;
    }
    .forcont .col-md-4 h4{
        position:relative;
        color:rgba(255,255,255,.8);
        text-align:center;
        margin-bottom:2em;
        padding:1em 0;
        text-transform:uppercase;
        font-size:20px;
    }
    .forcont .col-md-4 p{
        text-align:center;
        width:100%;
    }
    .forcont .col-md-4:nth-child(2) h4{
        color:rgba(0,0,0,.8)
    }
    .forcont .col-md-4{

        min-height:80vh;
        padding:2%;
    }
    .forcont .col-md-4:nth-child(1),.forcont .col-md-4:nth-child(3){
        background:rgba(218, 5, 104,.7);
        color:#fff;
    }
    .forcont .col-md-4 .box{
        transform:translateX(80%);
        text-align:center;
        width:70px;
        height:70px;
        border-radius:50%;
        align-items:center;
        display:flex;
        justify-content:center;
        background:transparent;
        border:2px solid #fff;
        margin:1em;
        font-size:2.2em;
        padding: 1em;
        }
        .forcont .col-md-4:nth-child(2) .box{
            
        background:transparent;
        border:1px solid #222;
        }
        .form{
            position:relative;
            height:100%;

        }
        .form div{
            margin: 1em 0;
        }
        
        .form input{
            width:100%;
            height:2em;
            padding:1.2em;
            border: 2px solid rgba(0,0,0,.2);
        }
        .form label{
            text-style:italic;
            font-size:1.1em;
        }
        .form button{
            width:100%;
            border:none;
            outline:none;
            text-transform:uppercase;
            height:2.5em;
            background:rgb(218, 5, 104);
            color:#fff;
        }
        .moreSer{
            position:relative;
            margin-top:7rem;
            color:#fff;
        }
        .moreSer h2{
            width:100%;
            letter-spacing:2px;
            font-size:2em;
            text-align:center;
            padding:2em 0;
        }
        .Box-sec{
            color:#fff;
            margin:2em;
        }
        .Box-sec h2,.gallery h2{
            text-align:center;
        }
        .Box-sec .BigBox{
            position:relative;
            display:flex;
            justify-content:space-between;
            align-items:center;
            width:100%;
            margin:0;
            margin-left:200px;
        }

        .Box-sec .BigBox .imgBx{
            position:relative;
            width:800px;
            height:400px;
            overflow:hidden;
            box-shadow: 0 25px 35px rgba(0,0,0,.1);
        }
        .Box-sec .BigBox .imgBx img{
            position:absolute;
            top:0;
            left:0;
            height:100%;
            width:100%;
            object-fit:cover;
        }
        .Box-sec .BigBox .content{
            position:absolute;
            right:0;
            margin-top:200px;
            margin-right:400px;
            margin-bottom:40px;
            padding:40px;
            background : #333;
            max-width:400px;
            z-index:1;
            box-shadow:0 25px 35px rgba(0,0,0,.1);
            border-bottom: 6px solid rgb(218, 5, 104);
        }
        .Box-sec .BigBox .content h3{
            font-size:1em;
            text-transform:uppercase;
        }
        .Box-sec .BigBox .content p{
            font-size:.9em;
        }
        .Box-sec .BigBox .content a{
            text-decoration:none;
            position:relative;
            color: #fff;
            padding:.5em;
            color:#fff;
            background:rgb(218, 5, 104);
            transition:.5s;
            text-transform:uppercase;
            
        }
        .g{
            color:#fff;
            text-align:center; 
        }
        .Box-sec .BigBox .content a:hover{
            background:transparent;
            border: 1.2px solid rgb(218, 5, 104);
        }
        .gallery{
            position:relative;
            column-count:3;
            padding:20px;
        }
        .gallery .image{
            display:inline-block;
            margin-bottom:10px;
            overflow:hidden;
        }
        .gallery .image img{
            width:100%;
            transition:.5s;
            
        
        }
        .gallery .image:hover img{
            transform:scale(1.2);
        }
        .gallery .image{
            border:2px solid rgba(255, 255, 255,.5);
        }


        @media screen and (max-width:768px){
            .gallery{
                column-count:2;
                margin:0;
                padding:0;            }
        } 
        @media screen and (max-width:700px){
            .gallery{
                column-count:2;
                margin:0;
                padding:0; 
            }
            .Box-sec h2{
                font-size:1.3em;
            }
            .Box-sec .BigBox{
                margin:0;
                align-items:center;
                justify-content:center;
            }
            .Box-sec .BigBox .imgBx{
                height:200px;
                width:600px;
            }
            .forcont .col-md-4 h4{
                font-size:1em;
            }
            .forcont .col-md-4 p{
                font-size:.8em;
    }

    .forcont .col-md-4 .box{
        text-align:center;
        width:50px;
        height:50px;
        font-size:1.5em;
        padding: 1em;
        }
        .forcont .col-md-4{

            min-height:60vh;
            }

            .form input{
            width:100%;
            height:.8em;
            padding:1em;
            border: 2px solid rgba(0,0,0,.2);
            font-size:.8em;
            
        }
        .form label{
            text-style:italic;
            font-size:.8em;
        }
        .form button{
            width:100%;
            border:none;
            outline:none;
            text-transform:uppercase;
            height:2.5em;
            background:rgb(218, 5, 104);
            color:#fff;
        }
        .forcont{
            margin-top:-25%;
        }
        } 

</style>