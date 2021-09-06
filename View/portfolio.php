<?php if(isset($_GET)){
    $page = intval(htmlspecialchars($_GET["page"]));
}?>
<div class="container">
    <div class="imagePart">
        <img src="<?php echo ASSETS?>stock-images/pics/<?php echo $page?>.jpg">
    </div>
    <div class="content">
        <h2><?php echo $contents[$page]["titre"];?></h2>
        <p><?php echo $contents[$page]["contenu"];?></p>
        <a href="?r=engins" class="btn">retour vers la galérie</a><a href="?r=order" class="btn" data-toggle="modal" data-target="#louer">Je le loue !</a>
    </div>

</div>

<div class="modal sell" tabindex="999" id="louer" aria-labellebdy="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Veuillez remplir ce formulaire: <?php echo $contents[$page]["titre"];?> </h5>
                <button class="btn-close" type="button" data-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
            <input type="text" name="" id="" placeholder="Nom" required>
            <input type="text" name="" id="" placeholder="Prenom" required><br>
            <input type="tel" name="" id="" placeholder="Téléphone" required>
            <input type="email" name="" id="" placeholder="Votre adresse mail" required><br>
            <input type="text" name="" id="" placeholder="Votre domicile" required><br>
            <input type="number" name="" id="" placeholder="Somme prévue" required><br>
</form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button class="btn btn-success" type="submit">Louer</button>
            </div>
        </div>
            </div>
</div>

<style>
body{
    margin:0;
    padding:0;
    background:#222;
}
.container{
    position:relative;
    margin-top:10%
}
.imagePart{

    position:relative;
    width:100%;
    height:100vh;
    overflow:hidden;
    box-shadow: 5px 5px 5px rgba(255,255,255,.08);
}
.imagePart img{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height: 100%;
    object-fit:cover;
}
.content h2{
    font-size:1.5em;
    text-transform:uppercase;
}
.content{
    position:relative;
    color:#fff;
    margin-top:-50px;
    margin-bottom:40px;
    margin-left:-40px;
    padding:40px;
    background : #333;
    max-width:800px;
    z-index:1;
    border-bottom: 6px solid rgb(218, 5, 104);
    transition:.5s;
}
.content p{
    font-size:15px;
}
.btn,.btn:hover{
    color:#fff;
    text-transform:uppercase;
    font-size:14px;
    padding:5px;
    background:rgb(218, 5, 104);
    margin: 0 1em
}
</style>