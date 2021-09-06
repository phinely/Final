<section class="about hotel container-fluid">
        <div class="ImgBx">
            <img src="<?php echo ASSETS?>stock-images/hotels/H-01.jpg" alt="">
        </div>
        <p>Calme et Confort</p>
        <div class="form">
            <form action="" method="post">
                <input type="text" placeholder="Pays" required>
                <input type="text" placeholder="Ville" required><br><br>
                <label for="list">Hôtels</label>  <select name="" id="list">
                    <option value="Hilton">Hilton</option>
                </select>
               <label for="Came">Arrivée</label> <input type="date"  id="Came" required>
               <label for="back">Départ</label>  <input type="date" id="back" required><br><br>
              
                <label for="rooms">Chambres</label><input type="number" id="rooms"  required value="0">
                <label for="adults">Adultes</label><input type="number" id="adults" required value="0">
                <label for="children">Enfants</label><input type="number"id="children"  required value="0">
                <button class="btn btn-primary" data-toggle="modal" data-target="#room" type="button">Réservez</button>


            </form>
        </div>

        
<div class="modal" tabindex="999" id="room" aria-labellebdy="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Veuillez remplir ce formulaire</h5>
                <button class="btn-close" type="button" data-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
            <input type="text" name="" id="" placeholder="Nom" required>
            <input type="text" name="" id="" placeholder="Prenom" required><br>
            <input type="tel" name="" id="" placeholder="Téléphone" required>
            <input type="email" name="" id="" placeholder="Votre adresse mail" required><br>
            </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button class="btn btn-success" type="submit">Envoyer</button>
            </div>
        </div>
            </div>
</div>
</section>

<section class="blackOp container hotels">
    <h6><span class="first">V</span>otre sérénité , notre priorité</h6>
    <p>MAC BOLAN met à votre disposition un ensemble d’hôtels en fonction de votre bourse financière, pour cela nous faisons tout à votre place et vous êtes servis…</p>
    <div class="row">
        <?php 
        $hotels = [
            1 => [
                "name" => "hotel 1",
                "prix" => "prix1",
                "localite" =>"localité 1"
            ],
            2 => [
                "name" => "hotel 2",
                "prix" => "prix2",
                "localite" =>"localité 2"
            ],
            3 => [
                "name" => "hotel 3",
                "prix" => "prix3",
                "localite" =>"localité 3"
            ],
            4 => [
                "name" => "hotel 4",
                "prix" => "prix4",
                "localite" =>"localité 4"
            ],
            5 => [
                "name" => "hotel 5",
                "prix" => "prix5",
                "localite" =>"localité 5"
            ],
            6 => [
                "name" => "hotel 6",
                "prix" => "prix6",
                "localite" =>"localité 6"
            ], 7 => [
                "name" => "hotel 7",
                "prix" => "prix7",
                "localite" =>"localité 7"
            ]
            ];
        
        for($i=1;$i<=$c;$i++){?>
        <div class="col-md-4">
            <div class="box">
                <a href="https://wa.me/237697036836?text=yo"><img src="<?php echo ASSETS?>stock-images/hotels/H-0<?php echo $i;?>.jpg" alt=""></a>

            </div>
            <div class="content">
                <p class="name"><?php echo $hotels[$i]["name"];?></p>
                <p><?php echo $hotels[$i]["localite"];?></p>
                <p class="price">Dès XAF <?php echo $hotels[$i]["prix"];?></p>
                <button><i class="fas fa-thumbs-up"></i></button><button><i class="fas fa-thumbs-down"></i></button>
            </div>
        </div>

        <?php }?>
    </div>
</section>

<?php require_once("paymod.php");?>

