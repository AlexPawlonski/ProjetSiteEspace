<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet"> 
    <script defer src=" script.js"></script>
    <title>Acceuil</title>
  </head>
  <body>
      <div id="wrapper">
          <?php include 'html/header.html'?>
          <?php include 'html/nav.html'?>
          <main id="mainPAcceuil">
            <div id="consigne">
                <ul>
                    <li class="slid">
                        <div class="titre">
                            <h2>Consigne 1</h2>
                        </div>
                        <p class="text">Lorem ipsum dolgbgb,gbg,b,rtebtrbkgebkgfk
                        ffffffffrfergrtgt ht(h(h(h(vbtrvbrv ttvbvhyvrb
                        vbrybvvvvvyb vybvyrvbyvbyv
                        vbtvbryvbrtyv rbrybtybybtrrceeeee eeeececeor sit amet consectetur 
                        adipisicing elit. Incidunt, quos!</p>
                    </li>
                    <li class="slid">
                        <div class="titre">
                            <h2>Consigne 2</h2>
                        </div>
                        <p class="text">Lorem ipsum dolgbgb,gbg,b,rtebtrbkgebkgfk
                        ffffff ffrfergrt gtht(h(h(h(vbtrvb rvttvbvhyvrb
                        vbry bvvvvv ybvy bvyrvb yvbyv
                        vbtv bryvb tyvrbr ybtybybtrrce eeeeee eececeor sit amet consectetur 
                        adipisicing elit. Incidunt, quos!</p>
                    </li>
                    <li class="slid">
                        <div class="titre">
                            <h2>Consigne 3</h2>
                        </div>
                        <p class="text">Lorem ipsum dolgbgb,gbg,b,rtebtrbkg ebkgfk
                        fffff fffrfe rgrtgtht(h(h(h(vb trvbrvttvb vhyvrb
                        vbrybvv vvvybvybvy rvbyvbyv
                        vbtv bryvbrtyvrbrybt ybybtrrcee eeeeeeec eceor sit amet consectetur 
                        adipisicing elit. Incidunt, quos!</p>
                    </li>
                    <li class="slid">
                        <div class="titre">
                            <h2>Info</h2>
                        </div>
                        <p class="text">Mercure est à 58 millions de km du soleil et en fait le tour en 88 jours.
                        <br>Vénus : 108 M km / 225 jours.<br>
                        Terre : 149 M km / 365 jours.<br>
                        Mars : 228 M km / 687 jours.</p> 
                        
                    </li>
                </ul>
            </div>
            <section id = "mainAcceuil">
                <div id="top">
                    <img id="imgMain" src="img/espace.jpg" alt="espace">
                    <h2>Bienvenue sur la planète HTML-CSS-JQuery</h2>
                    <div id="cosmonaute">
                        <img  src="img/cosmonaute.png" alt="cosmonaute">
                        <p>Hello !</p>
                    </div>
                    
                </div>
                <div id="bottom">
                    <ul>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/SOLEIL"><img src="img/soleil.jpg" alt="soleil"></a>
                            <h3>Le soleil</h3>
                        </li>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/Comet"><img src="img/comete.jpg" alt="comete"></a>
                            <h3>Les comètes</h3>
                        </li>
                        <li>
                            <a href="https://fr.wikipedia.org/wiki/Galaxie"><img src="img/galaxie.jpg" alt="galaxie"></a>
                            <h3>Les galaxies</h3>
                        </li>
                        
                    </ul>
                </div>
            </section>

          </main>
          <?php include 'html/footer.html'?>
      </div>
  </body>
</html>