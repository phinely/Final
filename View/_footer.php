<link rel="stylesheet" href="<?php echo ASSETS?>css/footer.css">
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h6>À propos</h6>
                <p class="text-justify">
                Grace à nos propres sites acquis et ceux des partenaires fonciers, nous pouvons  prendre en charge, l’achat de notre terrain en passant 
                 de la conception de votre projet jusqu’à la réalisation finale clé en main.      
                    <br>Notre devise : l’efficacité, l’engagement, la confiance
                </p>
            </div>
            <div class="col-md-3 col-sm-12">
                <h6>Restons connecter</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Facilis ducimus esse expedita repellendus placeat. Quas eos, </p>
                <form action="#" method="post">
                    <input type="text" name="" id="" placeholder="Votre e-mail" required><button type="submit"><i class="fas fa-chevron-right"></i></button>
                </form>
            </div>

            <div class=" col-md-3 col-sm-12">
                <h6>Liens rapides</h6>
                <ul class="footer-links">
                    <li><a href="#">MacBolan Immobilier</a></li>
                    <li><a href="#">Nos Agences</a></li>
                    <li><a href="#">Nos réalisations</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-12 allfootfa">
                <ul>
                    <li><a href="https://api.whatsapp.com/send/?phone=237697036836&text=dites quelque chose"><i class="fab fa-whatsapp"></i> Nous joindre sur Whatsapp</a></li>
                    <li><a href="http://"><i class="fab fa-telegram-plane"></i></a> Nous joindre sur Telegram</li>
                </ul>
            </div>

        </div>
        <div class="fooIm">
            <img src="<?php echo ASSETS;?>stock-images/1.png" alt="">
            <img src="<?php echo ASSETS;?>stock-images/2.png" alt="">
            <img src="<?php echo ASSETS;?>stock-images/3.png" alt="">
        </div>
        <hr class="small">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-12">
                    <p class="copyright-text">Copyright &copy; 2021 Tous droits réservés par <a href="?r=index" class="ese">MacBolan Services</a></p>
                </div>
            </div>
        </div>
    </div>



</footer>








































<script src="<?php echo ASSETS;?>js/app.js"></script>
<script src="<?php echo ASSETS;?>js/toggle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo ASSETS;?>js/slick.min.js"></script>


<script>
    AOS.init({
        offset:400,
        duration:1000
    });

    var loader = document.getElementById("preloader");
    window.addEventListener('load',function(){
        loader.style.display="none";
    })

</script>
    
<script>
    const load = document.querySelector(".fade-in");
window.addEventListener("load",()=>{
   load.classList.add("active")
   document.querySelector("body").classList.add('active');
})

window.addEventListener("scroll",function(){
    let t = window.scrollY;
    if(t>=150){
        document.querySelector(".goto").classList.add('active')
    }
    else{
        document.querySelector(".goto").classList.remove('active')
    }
})
  jarallax(document.querySelectorAll(".jarallax"),{
    speed:0.2
  });
</script>
<script type="text/javascript">
   $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
   
   $('.carousel').slick({
     dots: true,
     infinite: true,
     speed: 500,
     fade: true,
     cssEase: 'linear',
     autoplay: true,
     autoplaySpeed: 4000,
   });

   $(document).ready(function(){
       $(window).scroll(function(){
           $('.carousel').css('opacity',1 - $(window).scrollTop() / 700;)
       })
   })
   </script>
</body>
</html>