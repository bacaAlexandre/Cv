<?php



 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Lien cdm pour fontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- lien pour police ROBOTO -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Sansita:400,400i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="asset/css/master.css">

    <!-- Lien pour jQuerry -->
    <script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="asset/js/master.js">

    </script>

    </script>
    <title></title>
  </head>
  <body>
    <header>
      <div class="header">
        <h1>Alexandre Baca</h1>
        <h2>Développeur/Intégrateur web</h2>
        <nav>
          <ul class="liste_navigation"></li>
            <li><a href="#" class="nav-a" id="accueil">Accueil</a></li>
            <li><a href="#" class="nav-a" id="experiences">Expériences</a></li>
            <li><a href="#" class="nav-a" id="formations">Formations</a></li>
            <li><a href="#" class="nav-a" id="competences">Compétences</a></li>
            <li><a href="#" class="nav-a" id="contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="wrapper">
      <aside class="">
        <img class ="photo" src="asset/images/alexandre.jpg" alt="photo d'alexandre baca">
        <div class="info">
          <h3>Infos</h3>
          <ul>
            <li>27 ans</li>
            <li>Permis B</li>
            <li>Dieppe 76200</li>
          </ul>
        </div>
        <div class="contact">
          <h3>Contact</h3>
          <ul class="listeContact">
            <li>
              <button type="button" name="button" class="icone iconeContact " id="email"><i class="fa fa-envelope" aria-hidden="true"></i></button>
              <div class="infoMail hidden">
                <p>Alexandre76b@aol.com</p>
              </div>
            </li>
            <li>
              <button type="button" name="button" class="icone iconeContact" id="telephone"><i class="fa fa-phone-square" aria-hidden="true"></i></button>
              <div class="infoTel hidden">
                <p>06 64 84 09 90</p>
            </div></li>
          </ul>
        </div>
        <div class="presentation">
          <h3>Présentation</h3>
          <p>Dessinateur industriel reconverti en développeur web, jeune et motiver. Actuellement à la recherche d'une entreprise pour le BAC+2 d'analyse programmeur au CESI de Rouen.</p>
        </div>
        <div class="liens">
          <h3>Mes liens </h3>
          <ul class="listeLiens">
            <li>
              <a class ="icone" href="https://twitter.com/baca_alexandre"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/alexandre-baca-b00886133/" class="icone"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="https://github.com/bacaAlexandre" class="icone"><i class="fa fa-github" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </aside>
      <main>
        <div class="conteneur test">
          <div class="experiences test">
            <h2>Expériences</h2>
            <article class="">
              <h3>Dessinateur industriel</h3>
              <p>Daher verdelet</p>
              <p>2013 à 2014</p>
            </article>
            <article class="">
              <h3>Dessinateur en construction mécanique</h3>
              <p>Gault industries</p>
              <p>2012</p>
            </article>
            <article class="">
              <h3>Dessinateur industriel</h3>
              <p>SODDIM</p>
              <p>2011</p>
            </article>
          </div>
          <div class="formations test">
            <h2>Formations</h2>
            <article class="">
              <h3>Certificats de compétence professionnelle</h3>
              <p>Webforce3</p>
              <p>Octobre 2016 à février 2017</p>
              <p>Dévelopeur Web</p>
            </article>
            <article class="">
              <h3>Certificats de compétence professionnelle</h3>
              <p>Webforce3</p>
              <p>Octobre 2016 à février 2017</p>
              <p>Intégrateur Web</p>
            </article>
            <article class="">
              <h3>BTS</h3>
              <p>Pablo Neruda</p>
              <p>2010</p>
              <p>Conception et Industrialisation Microtechnique</p>
            </article>
            <article class="">
              <h3>BAC</h3>
              <p>Pablo Neruda</p>
              <p>2008</p>
              <p>Industriel, Science et technique de l'Ingénieur</p>
            </article>
          </div>
        </div>
        <div class="competences test">
          <h2>Compétences</h2>
          <article class="web">
            <h3>Web</h3>
            <ul>
              <li>HTML/CSS</li>
              <li>Javascript</li>
              <li>JQuerry</li>
              <li>Ajax</li>
              <li>MySQL</li>
              <li>PHP (php procédural et orienté objet)</li>
              <li>MVC</li>
              <li>Wordpress</li>
              <li>Boostrap</li>
            </ul>
          </article>
          <article class="logiciel">
            <h3>Logiciel</h3>
            <ul>
              <li>Git (ligne de commade)</li>
              <li>Git Hub</li>
              <li>Atom</li>
              <li>phpstorm</li>
              <li>SolidWorks (CAO)</li>
              <li>SolidEdge (CAO)</li>
              <li>SAP</li>
            </ul>
          </article>
        </div>
        <form class="formulaire hidden test" action="index.php" method="post">
          <p>
            <label for="">Prénom :
              <input type="text" name="prenom" value="">
            </label>
          </p>
          <p>
            <label for="">Nom :
              <input type="text" name="nom" value="">
            </label>
          </p>
          <p>
            <label for="">E-mail :
              <input type="email" name="email" value="">
            </label>
          </p>
          <p>
            <label for="">Objet :
              <input type="text" name="objet" value="">
            </label>
          </p>
          <p>
            <label for="">Message :
              <textarea name="message" rows="8" cols="80"></textarea>
            </label>
          </p>
          <input type="submit" class="bouton" name="" value="Envoyer">
          <div id="retour">

          </div>
        </form>
      </main>
    </div>
  </body>
</html>
