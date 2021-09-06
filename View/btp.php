<section class="home">
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-controls">
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel" data-bs-slide-to="0" class="active" style="background-image:url('<?php echo ASSETS;?>stock-images/btp/301-A.jpg');"></li>
            <li data-bs-target="#carousel" data-bs-slide-to="1" style="background-image:url('<?php echo ASSETS;?>stock-images/btp/305-A.jpg');"></li>
            <li data-bs-target="#carousel" data-bs-slide-to="2" style="background-image:url('<?php echo ASSETS;?>stock-images/btp/318-A.jpg');"></li>

        </ol>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url('<?php echo ASSETS;?>stock-images/btp/301-A.jpg');">
    </div>
    <div class="carousel-item" style="background-image:url('<?php echo ASSETS;?>stock-images/btp/305-A.jpg');">
    </div>
    <div class="carousel-item" style="background-image:url('<?php echo ASSETS;?>stock-images/btp/318-A.jpg');">
    </div>
  </div>
</div>

</section>

<section class="blackOp container products">
    <h6><span class="first">N</span>otre catalogue est varié !</h6>
    <div class="row" style="margin-top:3%;">
      <?php for($a=1;$a<=$c;$a++){ ?>
    <div class="col-md-4">
        <div class="imgbox"><img src="<?php echo ASSETS;?>stock-images/btp/3<?php if($a<=9){echo '0'.$a;}else{echo $a;}  ?>-A.jpg" alt=""></div>
        <div class="content">
            <p>modèle 3<?php if($a<=9){echo '0'.$a;}else{echo $a;}  ?>-A</p>
            <a href="?r=Bc&q=<?php if($a<=9){echo '0'.$a;}else{echo $a;}?>" class="btn">commander</a>
        </div>
    </div>
    <?php } ?>
    </div>
</section>

<?php require_once("paymod.php");?>