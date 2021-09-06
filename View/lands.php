<?php

$host="localhost";
$database = "hme_db_usr_freddy_adjh";
$user="usr_freddy_adjh";
$password="2h15XpQX";
$port=3306;

$bdd = new PDO('mysql:host='.$host.';dbname='.$database.';port='.$port.';charset=utf8',$user,$password);

$q = $bdd->query("SELECT * FROM lands");


?>
<section class="about hotel container-fluid">
        <div class="ImgBx">
            <img src="<?php echo ASSETS?>stock-images/ground.jpg" alt="">
        </div>
        <p>Achetez votre terrain sécurisé chez nous</p>
</section>

<section class="moreAbout container">
    <h6><span class="first">Q</span>uelques unes de nos offres</h6>
        <div class="row">
            <div class="col-md-4">
                <div class="imgBox"><img src="<?php echo ASSETS?>stock-images/terrain1.jpg" alt=""></div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nulla amet</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="imgBox"><img src="<?php echo ASSETS?>stock-images/terrain2.jpg" alt=""></div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nulla amet</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="imgBox"><img src="<?php echo ASSETS?>stock-images/terrrain3.jpg" alt=""></div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nulla amet</p>
                </div>
            </div>
        </div>
</section>

<section class="container lands-list blackOp">
    <h6><span class="first">N</span>os diverses offres</h6>
    <p>
    Dans le cadre de ses vastes chantiers MAC BOLAN a réservé 
    pour vous des sites bien emménagés à accès facile  à votre choix.
Entre autres si vous désirez vendre votre  terrain en tant que propriétaire légale vous pouvez aussi nous contacter. 
Voici quelques sites que nous avons réservés pour vous…

    </p>
    <table class="">
        <tr>
            <th>localité</th>
            <th>Superficie</th>
            <th>coût estimatif</th>
        </tr>

        <?php
        while($data = $q->fetch()){

    ?>
    <tr>
        <td><?php echo $data['localite'];?></td>
        <td><?php echo $data['superficie'];?></td>
        <td><?php echo $data['cout'];?> FCFA</td>
    </tr>
    <?php
        }
        ?>
    </table>
</section>
<section class="stay container">
    <h6>M'informer d'une nouvelle offre</h6>
        <form action="" id="moreland" method="post">
            <input type="email" name="" id="" placeholder="Votre email">
            <button type="submit">Envoyer</button>
        </form>
</section>
<section class="sell container">
    <div class="row">
        <div class="col-md-6">
        <h6><span class="first">j</span>e vends un terrains</h6>
        <p>pour proposer un lotissement cliquer <button class="btn btn-primary btn-sell" type="button" data-toggle="modal" data-target="#sell">ici</button></p>
        <div class="modal" tabindex="999" id="sell" aria-labellebdy="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Remplissez ce formulaire pour effectuer la vente</h5>
                <button class="btn-close" type="button" data-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                <input type="text" name="" id="" placeholder="Nom" required>
                <input type="text" name="" id="" placeholder="Prenom" required><br>
                <input type="tel" name="" id="" placeholder="Téléphone" required>
                <input type="email" name="" id="" placeholder="Votre adresse mail" required><br>
                <input type="Localité" name="" id="" placeholder="Localité" required><br>
                <textarea name="" id="" cols="30" rows="10" placeholder="Description"  required></textarea>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button class="btn btn-success" type="submit">Vendre</button>
            </div>
        </div>
            </div>
</div>
        </div>
       <div class="col-md-6">
        <h6><span class="first">J</span>'achète un terrain</h6>
        <p>Pour faire votre demande, cliquez <button class="btn btn-primary btn-sell" type="button" data-toggle="modal" data-target="#buy">ici</button></p>
        </div>

        <div class="modal" tabindex="999" id="buy" aria-labellebdy="exampleModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">À vous le choix</h5>
                        <button class="btn-close" type="button" data-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="" method="post">
                    <p>choisir</p>
                    <select name="" id="" required>
                    <?php
                    
        $q = $bdd->query("SELECT * FROM lands");

                    while($i = $q->fetch()){

                ?>
                <option value="<?php echo $i['localite'];?> | <?php echo $i['superficie'];?>"> <?php echo $i['localite'];?> | <?php echo $i['superficie'];?> </option>

                <?php } ?>
                    </select>

                </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button class="btn btn-success" type="submit">Demander</button>
                    </div>
                </div>
            </div>

    </div>
</section>

<?php require_once("paymod.php");?>



