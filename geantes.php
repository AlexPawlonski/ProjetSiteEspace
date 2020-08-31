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
    <title>Les gétante</title>
  </head>
  <body>
      <div id="wrapper">
          <?php include 'html/header.html'?>
          <?php include 'html/nav.html'?>
          <main>
            <section id="listeSection">
                <h2>Cliquez sur les planètes pour plus d'infos</h2>
                <ul id="listePlanetes">
                    <li>
                        <img id="jupiter" src="img/jupiter.png" alt="jupiter">
                        <h3>Jupiter</h3>
                    </li>
                    <li>
                        <img id="saturne" src="img/saturne.png" alt="saturne">
                        <h3>Saturne</h3>
                    </li>
                    <li>
                        <img id="uranus" src="img/uranus.png" alt="uranus">
                        <h3>Uranus</h3>
                    </li>
                    <li>
                        <img id="neptune" src="img/neptune.png" alt="neptune">
                        <h3>Neptune</h3>
                    </li>
                </ul>
            </section>
            <!--cacher de base-->
            <section id="popUpfond">
                <div id="popUp1" class="popUp">
                    <div class="topPopUp">
                        <img src="img/jupiter.png" alt="jupiter">
                        <h2>Jupiter</h2>
                        <div class='bouton'><p>X</p></div>
                    </div>
                    <div class="bottomPopUp">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Repellendus modi reprehenderit maxime ducimus eaque accu
                            samus corrupti earum. Minima quaerat vel minus, deserunt 
                            ipsa recusandae impedit quo iusto distinctio repellendus 
                            ea voluptas laboriosam aperiam omnis nobis nemo qui, quae, 
                            inventore sapiente vitae repellat ut. Expedita sed ipsa quae 
                            asperiores architecto consequatur!
                        </p>
                    </div>
                </div>
                <div id="popUp2" class="popUp">
                    <div class="topPopUp">
                        <img src="img/saturne.png" alt="saturne">
                        <h2>Saturne</h2>
                        <div class='bouton'><p>X</p></div>
                    </div>
                    <div class="bottomPopUp">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Repellendus modi reprehenderit maxime ducimus eaque accu
                            samus corrupti earum. Minima quaerat vel minus, deserunt 
                            ipsa recusandae impedit quo iusto distinctio repellendus 
                            ea voluptas laboriosam aperiam omnis nobis nemo qui, quae, 
                            inventore sapiente vitae repellat ut. Expedita sed ipsa quae 
                            asperiores architecto consequatur!
                        </p>
                    </div>
                </div>
                <div id="popUp3" class="popUp">
                    <div class="topPopUp">
                        <img src="img/uranus.png" alt="uranus">
                        <h2>Uranus</h2>
                        <div class='bouton'><p>X</p></div>
                    </div>
                    <div class="bottomPopUp">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Repellendus modi reprehenderit maxime ducimus eaque accu
                            samus corrupti earum. Minima quaerat vel minus, deserunt 
                            ipsa recusandae impedit quo iusto distinctio repellendus 
                            ea voluptas laboriosam aperiam omnis nobis nemo qui, quae, 
                            inventore sapiente vitae repellat ut. Expedita sed ipsa quae 
                            asperiores architecto consequatur!
                        </p>
                    </div>
                </div>
                <div id="popUp4" class="popUp">
                    <div class="topPopUp">
                        <img src="img/neptune.png" alt="neptune">
                        <h2>Neptune</h2>
                        <div class='bouton'><p>X</p></div>
                    </div>
                    <div class="bottomPopUp">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Repellendus modi reprehenderit maxime ducimus eaque accu
                            samus corrupti earum. Minima quaerat vel minus, deserunt 
                            ipsa recusandae impedit quo iusto distinctio repellendus 
                            ea voluptas laboriosam aperiam omnis nobis nemo qui, quae, 
                            inventore sapiente vitae repellat ut. Expedita sed ipsa quae 
                            asperiores architecto consequatur!
                        </p>
                    </div>
                </div>   
            </section>
            
          </main>
          <?php include 'html/footer.html'?>
      </div>
  </body>
</html>