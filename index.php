<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Projet Cloud Henda</title>

</head>

<body>

<h1>Afficher les images</h1>

    <?php
    try{
        $host="database-2.cvfmha3ni1gi.us-east-1.rds.amazonaws.com";
        $bdd = new PDO('mysql:host=database-2.cvfmha3ni1gi.us-east-1.rds.amazonaws.com;dbname=cloud;charset=utf8', 'root', 'Henda1996');
       // echo 'connexion reussite <br>';
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
 $stmt=$bdd->prepare('SELECT chemin FROM Images');
    $stmt->execute();
    $arr=$stmt->fetchAll(PDO::FETCH_ASSOC);

    if(!$arr) exit('aucune ligne selectionnee');
      
    $a=array();
    $i=0;
    foreach($arr as $key=>$value){
        $a[$i]= $value['chemin'];
        echo '<img src=" '.$a[$i].'" alt="image" width="1150" height="340"></br>';
    }

    ?>
</body>

</html>

