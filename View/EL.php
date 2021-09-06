
<h6 class="g" id="gallerie"> <span class="first">L</span>es engins disponibles <span class="first">!</span></h6>
<div class="container gallery">
 <div>
 <?php
   for ($i=1; $i<=$c ; $i++) { 
?>
        <a href="portfolio?page=<?php echo $i;?>">
        <div class="image">
            <img src="<?php echo ASSETS?>stock-images/pics/<?php echo $i?>.jpg" alt="">
        </div>
        </a>
    <?php
   }
    ?>
 </div>
</div>
<?php include_once("paymod.php");?>
<style>
    body{
        background:#111;
    }
    #gallerie{
        margin-top:10%;
        font-size:2em;
        font-weight:700;
}
</style>