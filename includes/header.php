<link rel=stylesheet href="includes/css/header_style.css" />

<header class="header">
    <a href="index.php"><div class="header-logo"><p class="header-logo-txt">Logo</p></div></a> <!-- à remplacer par l'img du logo -->
    <a href="index.php"><h1 class="header-title">Movee</h1></a>
          
    <div class="header-navbar">
        <ul class="nav_onglets">
            <li class="nav-item"><a href="index.php">Concepteur d'itinéraires</a></li>
            <li class="nav-item"><a href="#">Trouver un itinéraire</a></li>
            <li class="nav-item nav-item-plus" id="plus">
                <a>Plus <img src="includes/img/caretdown.png" alt="Déroulant" class="nav-item-plus-deroulant" id="caret"/></a>
            </li>
        </ul>
        <div class="sub-nav" id="accordeon">
                    <ul class="sub-nav-ul">
                        <li class="sub-nav-item"><a href="#">Contact</a></li>
                        <li class="sub-nav-item"><a href="#">Aide</a></li>
                        <li class="sub-nav-item"><a href="apropos.php">À propos</a></li>
                    </ul>
                </div>
    </div>
          
    <div class="header-account">
        <button class="header-account-signup btn-account">Inscription</button>
        <button class="header-account-signin btn-account">Connexion</button>
    </div>
</header>

<script src="includes/header.js"></script>