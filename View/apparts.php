<section class="about container-fluid">
        <div class="ImgBx">
            <img src="<?php echo ASSETS?>stock-images/immo.jpg" alt="">
        </div>
        <p>Appartements meublés</p>
</section>
<section class="container for blackOp sell">
    <h6> <span class="first">C</span>e que nous avons pour vous</h6>
    <div class="row">
        <div class="col-md-6">
            <div class="content">
            <span class="red">Mac Bolan</span>met à votre disposition des appartements que nous avons sélectionnés pour vous avec les caractéristiques suivantes :
            <ul>
                <li>Sécurité</li>
                <li>Loin du bruit</li>
                <li>Confort garanti</li>
                <li>Coût abordable</li>
            </ul>    
            </div>
        </div>
        <div class="col-md-6">
           <div class="imBx">
           <img src="<?php echo ASSETS?>stock-images/appart.jpg" alt="">
           </div>
        </div>

        <div class="col-md-12">
        <div class="form-content">
        <h5><span class="first">J</span>e fais ma réservation</h5>
        <p>remplissez ce formulaire si vous désirez faire des installations chez vous</p>
        <form action="" method="post">
            <input type="text" name="" id="" placeholder="Nom" required>
            <input type="text" name="" id="" placeholder="Prenom" required><br>
            <input type="tel" name="" id="" placeholder="Téléphone" required>
            <input type="email" name="" id="" placeholder="Votre adresse mail" required><br>
            <input type="Localité" name="" id="" placeholder="Localité souhaitée" required><br>
            <button type="submit" class="">Réserver</button>
</form>
    </div>
    </div>
</section>


<?php require_once("paymod.php");?>