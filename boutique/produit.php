<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=boutique', 'root', '');
}

catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

    $reponse = $bdd->query('SELECT * FROM
categorie');

if(isset($_POST['submit'])){
    $response = $bdd -> prepare('INSERT INTO produit(produit, categorie_id, Libelle, quantite, prix) VALUES(:produit, :categori_id, :libelle, :quantite, :prix)');

    $response -> execute(array(
        'produit'=>$_POST['produit'],
        'libelle'=>$_POST['libele'],
        'quantite'=>$_POST['quantite'],
        'prix'=>$_POST['prix']
    ));

}





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
                                        <li class="nav-item"><a class="nav-link" href="categorie.php">Categorie</a></li>
                                    
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
                                    <div class="row">
                                    
                 <form class="row g-3 needs-validation" novalidate methode="post" action="produit.php">
                 <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Produit</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback" name="produit">
                        Looks good!
                        </div>
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Libelle</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback" name="libele">
                        Looks good!
                        </div>
                    </div>
                    
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Quantite</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback" name="quantite">
                        Looks good!
                        </div>
                   
                    </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Prix</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback" name="prix">
                            Looks good!
                            </div>
                    
                        </div>
                    
                    </div>
                    
                  <select class="form-select" aria-label="Default select example" name="produit" <?php
                        while ($donnees = $reponse->fetch())
                        { ?>>
                        <option value="<?php echo $donnees['categorie_id'] ?>"><?php echo $donnees['categorie_id']?></option>
                        <?php
                        }
                        $reponse->closeCursor();
                        ?>
                       
                        
                        
                        
                    </select>

                    <div class="container my-5 col-12">
                        <button class="btn btn-primary" nom="submit" type="submit">Submit form</button>
                    </div>
             </form>
                                                </div>
                                            

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