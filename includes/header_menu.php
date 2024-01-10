

<!--Navigation bar start-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">
            <div class="container">
                    <a href="index.php" class="navbar-brand" style="font-family: 'Delius Swash Caps'">Ilyes Shopify</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav">
                       <li class="nav-item dropdown">
                           <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                               Produits
                            </a>
                               <div class="dropdown-menu">
                                   <a href="products.php#watch" class="dropdown-item">Montres</a>
                                   <a href="products.php#shirt" class="dropdown-item">Tee-Shirt</a>
                                   <a href="products.php#shoes" class="dropdown-item">Chaussures</a>
                                   <a href="products.php#headphones" class="dropdown-item">Multimédias</a>
                               </div>
                           
                       </li>
                       <li class="nav-item"><a href="index.php" class="nav-link">Offres</a></li>
                       <li class="nav-item"><a href="about.php" class="nav-link">A propos de nous</a></li>
                       <?php
                       if (isset($_SESSION['email'])) {
                        ?>
                       <li class="nav-item"><a href="cart.php" class="nav-link">Panier</a></li>
                       <?php
                          } 
                    ?>
                    </ul>
                    
                    <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Deconnexion</a></li>
                       <li class="nav-item"><a  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
                    </ul>
                    <?php
                } else {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" ><i class="fa fa-user"></i> S'inscrire</a></li>
                       <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i> Connexion</a></li>
                    </ul>
                    <?php 
                }
                    ?>
                    </div>
                </div>
            </div>
        </nav>
    <!--navigation bar end-->
    <!--Login trigger Modal-->
    <div class="modal fade" id="login" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">Connexion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="login_script.php" method="post">
                 <div class="form-group">
                     <label for="email">Adresse mail:</label>
                     <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe:</label>
                    <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input">
                    <label for="checkbox" class="form-check-label">Verification</label>
                </div>
                <button type="submit" class="btn btn-secondary btn-block" name="Submit">Connexion</button>
              </form>
              <a href="http://">Mot de passe oublié ?</a>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">Nouveau utilisateur ? <a href="#signup" data-toggle="modal" data-dismiss="modal" >S'inscrire</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Fermer</button>
            </div>
          </div>
        </div>
      </div>
    <!--Login trigger Model ends-->
    <!--Signup model start-->
    <div class="modal fade" id="signup">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">S'inscrire</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="signup_script.php" method="post">
                <div class="form-group">
                     <label for="email">Adresse mail:</label>
                     <input type="email" class="form-control"  name="eMail" placeholder="Enter email" required>
                     <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe:</label>
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validation1">Nom</label>
                        <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md -6">
                        <label for="validation2">Prenom</label>
                        <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name">
                    </div>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label for="checkbox" class="form-check-label">Acceptez termes et Condition</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="Submit">S'inscrire</button>
              </form>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">Deja enregistrez?<a href="#login"  data-toggle="modal" data-dismiss="modal">Connexion</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Fermer</button>
            </div>
          </div>
        </div>
      </div>
      <!--Signup trigger model ends-->