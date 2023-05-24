<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotatrip : En savoir plus</title>
    <link rel="stylesheet" href="styleEnSavoirPlus.css">
    <link rel="stylesheet" href="styleDark.css">
</head>

<body id="body" class="light-mode">
    <header>
        <nav class="light-mode" id="nav">
            <a href="index.php"><img src="icones/trone.svg" class="logo" alt="accueil"></a>
            <a href="index.php" class="lien light-mode" id="accueil">
                <h1 class="titreSite">Gotatrip</h1>
            </a>
            <ul class="menu">
                <li>
                    <a href="./destinations.php" class="lien light-mode">Nos destinations</a>
                </li>
                <li>
                    <a href="packs.php" class="lien light-mode">Nos packs</a>
                </li>
                <li>
                    <a href="./enSavoirPlus.php" class="lien light-mode">En savoir plus</a>
                </li>
                <li>
                    <img src="./icones/menuBlackBurger" class="menuBurger light-mode" alt="menu">
                </li>
                <li>
                    <button type="button" name="dark_light" class="mode light-mode" id="button"
                        title="Toggle dark/light mode"><img src="./icones/moonWhite.svg" class="moon"
                            alt="mode sombre"></button>
                </li>
            </ul>
            </ul>
        </nav>
    </header>
    <main>
        <div class="conteneurImgAcc">
            <div class="img-entete-ensavplus"></div>
            <h2 class="ensavplus">En savoir plus.</h2>
            <h2 class="sloggan2 fondViolet light-mode">Vous aussi, partez en quête de nouveaux horizons.</h2>
        </div>
        <div class="sousTitreContainer" id="concept">
            <h2 class="sousTitre ecritureBeige">Le concept</h2>
        </div>
        <div class="section concept fondViolet light-mode">
            <p class="descr"><span class="bold ecritureBeige">Gotatrip</span> est un site qui vous permet de réserver des billets d’avion pour vous envoler vers les lieux de tournage de la série culte Game Of Thrones. Vous pourrez découvrir certains paysages extraordinaires d’Essos ou de Westeros après avoir choisi la destination qui vous fait le plus rêver.</p>
            <div class="etape">
                <h3 class="number ecritureBeige">1</h3>
                <p class="explication">Je parcours les différents lieux de la série et regarde à quelles destinations elles correspondent dans le monde</p>
            </div>
            <div class="etape">
                <h3 class="number ecritureBeige light-mode">2</h3>
                <p class="explication">Je choisis celle qui me plaît le plus</p>
            </div>
            <div class="etape">
                <h3 class="number ecritureBeige light-mode">3</h3>
                <p class="explication">Je réserve mes billets d’avions pour les dates qui me conviennent</p>
            </div>
        </div>
       
        <div class="sousTitreContainer" id="creatrice">
            <h2 class="sousTitre ecritureBeige light-mode">La créatrice</h2>
        </div>
        <div class="section creatrice fondViolet light-mode">
            <div class="img"></div>
            <div class="txt">
                <p>Étudiante en première année de BUT MMI, nous avions pour projet du deuxième semestre de créer un site de réservation avec un thème libre. 
                Étant une grande fan de la série Game Of Thrones avec ses paysage qui m’impressionnent tous autant les uns que les autres, j’ai eu l’idée de créer un site présentant les différents lieux de la série avec les véritables endroits auxquels ils correspondent dans le monde. 
                </p>
                <p>Je me suis dit qu’il pourrait être intéressant que les utilisateurs puissent, par la même occasion, réserver leurs billets d’avion pour la destination choisie.
                </p>
                <p>J’ai ainsi réalisé individuellement la création du site de Gotatrip du début à la fin, que ce soit la maquette, le design, la recherche d’images, le développement front-end et back-end, en passant par la création de la base de données. 
                </p>
            </div>
        </div>
        
        <div class="sousTitreContainer" id="mentionsLegales">
            <h2 class="sousTitre ecritureBeige light-mode">Mention légales</h2>
        </div>
        
    </main>


    <footer class="fondViolet light-mode">
        <div class="footerPartGauche">
            <div class="footerContainer1">
                <img src="./icones/trone.svg" alt="" class="footerTrone">
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
                <a href="#concept" class="lienFooter">Le concept</a>
                <a href="#creatrice" class="lienFooter">La créatrice</a>
                <a href="#mentionsLegales" class="lienFooter">Mentions légales</a>
            </div>
        </div>

    </footer>

    

    <script src="scriptEnSavoirPlus.js"></script>
    <script src="scriptDarkMode.js"></script>

</body>

</html>