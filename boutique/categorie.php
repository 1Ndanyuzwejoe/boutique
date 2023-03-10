<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
}

catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

if(isset($_POST['nom_categorie'])){
    // On ajoute une entrée dans la table
    $req=$bdd->prepare('INSERT INTO categorie( nom_categorie, type_categorie) VALUES(:nom_categori,:type_categor )');

    
$req->execute(array(
    'nom_categori'=>$_POST['nom_categorie'],
    'type_categor' =>$_POST['type_categorie'] 
));

}



echo 'Le jeu a bien été ajouté !';
?>




<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./public/css/styles.css" rel="stylesheet" />
    </head>
<body>
    
                <!-- Navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container px-4 px-lg-5">
                                <a class="navbar-brand" href="index.php">Boutique</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="produit.php">Produit</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#!">Marque</a></li>
                                    
                                        </li>
                                    </ul>
                                    <form class="d-flex">
                                        <button class="btn btn-outline-dark" type="submit">
                                            <i class="bi-cart-fill me-1"></i>
                                            Cart
                                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </nav>


                        
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
               <form action="/categorie.php" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Example label</label>

                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="nom_categorie">
                    </div>

                    <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Type Categorie</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="type_categorie">
                    </div>

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <input  type="submit" value="SUBMIT">
                            </div>
               </form>

                            </div>
                            <!-- Product actions-->
                          
                        </div>
                    </div>
            </div>
        </section>
        <!-- </date_get_last_errors -->
     <!--Footer-->
     <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>

<!-- Bootstrap core JS-->
        <src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></src=>
        <!-- Core theme JS-->
        <script src="./public/js/scripts.js"></script>
</body>
</html>