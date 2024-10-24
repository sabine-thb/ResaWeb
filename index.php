<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleDark.css">
    <title>Gotatrip</title>
    <link rel="shortcut icon" type="image/png" href="icones/favicon.png" />
</head>

<body id="body" class="light-mode">
    <header>
        <nav class="light-mode" id="nav">
            <a href=#search class='skip-link'>Aller au contenu</a>
            <a href="index.php" class="lien light-mode" id="accueil">
                <img src="./icones/trone.png" class="logo" alt="accueil">
                <h1 class="titreSite">Gotatrip</h1>
            </a>
            <ul class="menu">
                <li class="menuPrincipal">
                    <a href="./destinations.php" class="lien light-mode">Nos destinations</a>
                </li>
                <li class="menuPrincipal">
                    <a href="packs.php" class="lien light-mode">Nos packs</a>
                </li>
                <li class="menuPrincipal">
                    <a href="./enSavoirPlus.php" class="lien light-mode">En savoir plus</a>
                </li>
                <li class="menuPrincipal">
                    <button type="button" name="menuBurger" class="burgerButton light-mode">
                        <img src="./icones/menuBlackBurger" class="burger light-mode" alt="menu">
                    </button>
                </li>
                <li>
                    <button type="button" name="dark_light" class="mode light-mode" id="button" title="Toggle dark/light mode">
                        <img src="./icones/moonWhite.svg" class="moon" alt="mode sombre">
                    </button>
                </li>
            </ul>
            <ul class="menuBurger light-mode">
                <li>
                    <a href="./destinations.php" class="lien light-mode">Nos destinations</a>
                </li>
                <li>
                    <a href="packs.php" class="lien light-mode">Nos packs</a>
                </li>
                <li>
                    <a href="./enSavoirPlus.php" class="lien light-mode">En savoir plus</a>
                </li> 
            </ul>
        </nav>
    </header>
    <div class="js-slider">
        <div class="js-photos">
            <!-- CLONE PRÉSENT AU DÉBUT DU SLIDER, VISUELLEMENT IDENTIQUE À LA SLIDE RÉELLE 3 -->
            <div class="photoslider clone three">
            </div>
            <!-- LES 3 SLIDES RÉELLES -->
            <div class="photoslider reel one">
            </div>
            <div class="photoslider reel two">
            </div>
            <div class="photoslider reel three">
            </div>
            <!-- CLONE PRÉSENT À LA FIN DU SLIDER, VISUELLEMENT IDENTIQUE À LA SLIDE RÉELLE 1 -->
            <div class="photoslider clone one">
            </div>
        </div>
    </div>
    <!-- <h2 class="description">Venez découvrir les lieux de tournage époustouflants de votre série culte en réservant
        une de nos multiples excursions aux 4 coins du monde.</h2> -->
    <div class="slogg">
        <h2 class="sloggan">Westeros vous attend.</h2>
        <h2 class="description">Venez découvrir les lieux de tournage époustouflants de votre série culte en réservant
        une de nos multiples excursions aux 4 coins du monde.</h2>
    </div>

    


    
    <div class="concept fondVioletClair light-mode">
         <h2 class="titleDescr ecritureBeige">Le concept</h2>
         <p class="descr">Gotatrip est une plateforme incontournable pour tous les fans de Game of Thrones et les passionnés de voyages uniques. Ce site vous offre la possibilité de réserver des séjours inoubliables qui vous plongeront dans les décors majestueux et mythiques de la célèbre série. Que vous soyez un amateur d'aventures épiques, un amoureux des paysages naturels époustouflants ou simplement en quête de nouvelles expériences, Gotatrip vous propose une sélection de voyages variés et adaptés à tous les goûts.

        Explorez des destinations incroyables aux quatre coins du globe, des falaises abruptes d’Irlande aux rues historiques de Dubrovnik, transformée en la ville royale de Port-Réal. Revivez les scènes emblématiques des Sept Royaumes en marchant sur les traces de vos personnages préférés. </p>
    </div>

    <form action="destinations.php" method="get" >
        <div class="searchBar">
            <img src="./icones/loupeBlack.svg" alt="rechercher" class="loupe">
            <label for="search" class="sr-only">Rechercher</label>
            <input class="search" type="text" id="search" name="search" placeholder="Rechercher une destination, un pays...">
        </div>  
        <div> 
            <label for="prix">Prix : </label>
            <select name="prix" id="prix">    
                <!-- name correspond au nom de la variable et pasCher, moyen et cher sont les différentes valeurs de cette variable-->
                <!--Pour faire une liste déroulante -->
                <option value="tous">tous</option>
                <option value="pasCher">Moins de 100€</option>
                <option value="moyen">Entre 100 et 200€</option>
                <option value="cher">Plus de 200€</option>
            </select>
        </div>
        <button class="filtre button light-mode"type="submit">Rechercher</button>  
    </form>
    <h2 class="ecritureBeige light-mode propositions">Nos propositions du moment</h2>
    <div class="sliderTotal">
        <span class='arrowMode gauche light-mode'></span>
        <div class='js-sliderCarte'>
            <div class='cartesContainer'>
            <?php
            include("connexion.php");
            $requete="SELECT * FROM destination WHERE id_dest=2 "; //Je mets le premier clone de mon carrousel infini
            $stmt=$db->query($requete);
            $result=$stmt -> fetchall(PDO::FETCH_ASSOC); //Je dis de récupérer les résultats sous forme de tableau associatif ac le FETCH_ASSOC
            foreach ($result as $row){
                echo "<a href='ficheDest.php?dest={$row["id_dest"]}'class='lienImg'>
                            <div class='miniFicheDest backgroundFiche light-mode'>
                                 <div class='blocimg imageTransition' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'></div>
                                 <div class='blocText'>
                                        <div class='text'>
                                            <h2 class='nomGOT light-mode'>{$row["nomGOT"]}</h2>
                                            <h2 class='vraiNom ecritureBeige light-mode'>{$row["nomReel"]}, {$row["pays"]}</h2>
                                        </div>
                                        <div class='prixContainer'>
                                            <img src='./icones/avionBlack.svg' class='avion' alt=''>
                                            <h2 class='prix1 ecritureBeige light-mode'>{$row["prix"]}€</h2>
                                        </div>
                                 </div>
                                
                            </div>
                        </a>";
            }

            
            $requete="SELECT * FROM destination WHERE id_dest=9 OR id_dest=1 ORDER BY id_dest DESC "; 
            $stmt=$db->query($requete);
            $result=$stmt -> fetchall(PDO::FETCH_ASSOC); //Je dis de récupérer les résultats sous forme de tableau associatif ac le FETCH_ASSOC
            foreach ($result as $row){
                echo "<a href='ficheDest.php?dest={$row["id_dest"]}'class='lienImg'>
                            <div class='miniFicheDest backgroundFiche light-mode'>
                                 <div class='blocimg imageTransition' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'></div>
                                <div class='blocText'>
                                        <div class='text'>
                                            <h2 class='nomGOT light-mode'>{$row["nomGOT"]}</h2>
                                            <h2 class='vraiNom ecritureBeige light-mode'>{$row["nomReel"]}, {$row["pays"]}</h2>
                                        </div>
                                        <div class='prixContainer'>
                                            <img src='./icones/avionBlack.svg' class='avion' alt=''>
                                            <h2 class='prix1 ecritureBeige light-mode'>{$row["prix"]}€</h2>
                                        </div>
                                 </div>
                            </div>
                        </a>";
            }

            
            $requete="SELECT * FROM destination WHERE id_dest=2 OR id_dest=6 OR id_dest=8 OR id_dest=9 OR id_dest=10 OR id_dest=1 ORDER BY ordre_insertion" ;
            $stmt=$db->query($requete);
            $result=$stmt -> fetchall(PDO::FETCH_ASSOC); //Je dis de récupérer les résultats sous forme de tableau associatif ac le FETCH_ASSOC
            foreach ($result as $row){
                echo "<a href='ficheDest.php?dest={$row["id_dest"]}'class='lienImg'>
                <div class='miniFicheDest anim  backgroundFiche light-mode'>
                     <div class='blocimg imageTransition' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'></div>
                    <div class='blocText'>
                        <div class='text'>
                            <h2 class='nomGOT light-mode'>{$row["nomGOT"]}</h2>
                            <h2 class='vraiNom ecritureBeige light-mode'>{$row["nomReel"]}, {$row["pays"]}</h2>
                        </div>
                        <div class='prixContainer'>
                            <img src='./icones/avionBlack.svg' class='avion' alt=''>
                            <h2 class='prix1 ecritureBeige light-mode'>{$row["prix"]}€</h2>
                        </div>
                    </div>
                </div>
            </a>";
            }
           
            $requete="SELECT * FROM destination WHERE id_dest=2 OR id_dest=6 "; //Je mets le second clone de mon slider infini
            $stmt=$db->query($requete);
            $result=$stmt -> fetchall(PDO::FETCH_ASSOC); //Je dis de récupérer les résultats sous forme de tableau associatif ac le FETCH_ASSOC
            foreach ($result as $row){
                echo "<a href='ficheDest.php?dest={$row["id_dest"]}' class='lienImg'>
                            <div class='miniFicheDest backgroundFiche light-mode'>
                                 <div class='blocimg imageTransition' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'></div>
                                <div class='blocText'>
                                    <div class='text'>
                                        <h2 class='nomGOT light-mode'>{$row["nomGOT"]}</h2>
                                        <h2 class='vraiNom ecritureBeige light-mode'>{$row["nomReel"]}, {$row["pays"]}</h2>
                                    </div>
                                    <div class='prixContainer'>
                                        <img src='./icones/avionBlack.svg' class='avion' alt=''>
                                        <h2 class='prix1 ecritureBeige light-mode'>{$row["prix"]}€</h2>
                                    </div>
                                </div>
                            </div>
                        </a>";
            }
            
            $requete="SELECT * FROM destination WHERE id_dest=9 "; //Je mets le second clone de mon slider infini
            $stmt=$db->query($requete);
            $result=$stmt -> fetchall(PDO::FETCH_ASSOC); //Je dis de récupérer les résultats sous forme de tableau associatif ac le FETCH_ASSOC
            foreach ($result as $row){
                echo "<a href='ficheDest.php?dest={$row["id_dest"]}' class='lienImg'>
                <div class='miniFicheDest backgroundFiche light-mode'>
                     <div class='blocimg imageTransition' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'></div>
                    <div class='blocText'>    
                        <div class='text'>
                            <h2 class='nomGOT light-mode'>{$row["nomGOT"]}</h2>
                            <h2 class='vraiNom ecritureBeige light-mode'>{$row["nomReel"]}, {$row["pays"]}</h2>
                        </div>
                        <div class='prixContainer'>
                            <img src='./icones/avionBlack.svg' class='avion' alt=''>
                            <h2 class='prix1 ecritureBeige light-mode'>{$row["prix"]}€</h2>
                        </div>
                    </div>
                </div>
            </a>";
            }
            
            $requete="SELECT * FROM destination WHERE id_dest=9 "; //Je mets le second clone de mon slider infini
            $stmt=$db->query($requete);
            $result=$stmt -> fetchall(PDO::FETCH_ASSOC); //Je dis de récupérer les résultats sous forme de tableau associatif ac le FETCH_ASSOC
            foreach ($result as $row){
                echo "<a href='ficheDest.php?dest={$row["id_dest"]}' class='lienImg'>
                <div class='miniFicheDest backgroundFiche light-mode'>
                     <div class='blocimg imageTransition' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'></div>
                    <div class='blocText'>
                        <div class='text'>
                            <h2 class='nomGOT light-mode'>{$row["nomGOT"]}</h2>
                            <h2 class='vraiNom ecritureBeige light-mode'>{$row["nomReel"]}, {$row["pays"]}</h2>
                        </div>
                        <div class='prixContainer'>
                            <img src='./icones/avionBlack.svg' class='avion' alt=''>
                            <h2 class='prix1 ecritureBeige light-mode'>{$row["prix"]}€</h2>
                        </div>
                    </div>
                </div>
            </a>";
            }

        ?>
            </div>
        </div>
        <span class='arrowMode droite light-mode'></span>
    </div>
    <div class="divLienTout">
        <a href="destinations.php" class="lienTout">VOIR TOUT</a>
    </div>
    <div class="nouveauteContainer fondVioletClair light-mode">
        <h2 class="nouveaute ecritureBeige light-mode">Nouveauté !</h2>
        <h2 class="descrNouveaute">Nous proposons également des packs de voyage sur mesure pour découvrir plusieurs lieux de tournage à proximité lors d'un road trip inoubliable. Que vous soyez fan de la série ou simplement en quête d'aventure, nos itinéraires vous emmèneront à travers des paysages iconiques et des sites où vos personnages préférés ont pris vie.</h2>
    </div>


    <div class="extrPacksTotal">
        <?php
        include("connexion.php");
        $requete="SELECT * FROM destination WHERE id_dest=14 OR id_dest=13 ORDER BY id_dest DESC";
        $stmt=$db->query($requete);
        $result=$stmt -> fetchall(PDO::FETCH_ASSOC); //Je dis de récupérer les résultats sous forme de tableau associatif ac le FETCH_ASSOC
        foreach ($result as $row){
            echo "<a href='fichePack.php?pack={$row["id_dest"]}' class='lienPacks'>   
                     <div class='fichePack backgroundFiche light-mode zoom'>
                         <div class='imgContainer2'>
                         <div class='blocimg2' style='background-image:url(./images/{$row["id_dest"]}/1.jpg);'></div>
                         </div>
                         <div class='text'>
                            <h2 class='nomGOT2'>{$row["nomGOT"]}</h2>
                         </div>
                      </div>
                    </a>";

        }
        ?>
        </div>
        <div class="divLienTout">
            <a href="packs.php" class="lienTout">VOIR TOUT</a>
        </div>
    

    <footer class="fondViolet light-mode">
        <div class="footerPartGauche">
            <div class="footerContainer1">
                <img src="./icones/trone.png" alt="" class="footerTrone">
                <h1 class="titreFooter ecritureBeige light-mode">Gotatrip</h1>
            </div>
            <p class="footerDescription">Gotatrip est un site qui vous permet de réserver des billets d’avion pour vous envoler vers les lieux de tournage de la série culte Game Of Thrones. Vous pourrez découvrir certains paysages extraordinaires d’Essos ou de Westeros après avoir choisi la destination qui vous fait le plus rêver.</p>
        </div>

        <div class="footerPartDroite">
            <div class="plan">
                <h2 class=" sTitreFooter ecritureBeige light-mode">Plan du site</h2>
                <a href="destinations.php" class="lienFooter">Nos destinations</a>
                <a href="packs.php" class="lienFooter">Nos packs</a>
                <a href="enSavoirPlus.php" class="lienFooter">En savoir plus</a>
            </div>

            <div class="savPlus">
                <h2 class=" sTitreFooter ecritureBeige light-mode">En savoir plus</h2>
                <a href="enSavoirPlus.php#concept" class="lienFooter">Le concept</a>
                <a href="enSavoirPlus.php#creatrice" class="lienFooter">La créatrice</a>
                <a href="enSavoirPlus.php#mentionsLegales" class="lienFooter">Mentions légales</a>
            </div>
        </div>

    </footer>


    <script src="script.js"></script>
    <script src="scriptDarkMode.js"></script>

     <!-- Inclusion des scripts via CDN -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>

    <script src="./animations/accueil.js"></script>
</body>

</html>