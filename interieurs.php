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
    <title>Intérieurs</title>
  </head>
  <body>
      <div id="wrapper">
          <?php include 'html/header.html'?>
          <?php include 'html/nav.html'?>
          <main>
              <div id="mainSit">
                    <section id="left">
                        <h2>Cliquez sur les boutons pour déclencher la rotation</h2>
                        <ul>
                            <li>
                                <button id="mercureB">Mercure</button>
                            </li>
                            <li>
                                <button id="venusB">Vénus</button>
                            </li>
                            <li>
                                <button id="terreB">Terre</button>
                            </li>
                            <li>
                                <button id="marsB">Mars</button>
                            </li>
                            <li>
                                <button id="annimB">Animation</button>
                            </li>
                            <li id="reset">
                                <button id="resetB">Reset</button>
                            </li>
                        </ul>
                    </section>
                    <section id="right">
                        <ul >
                            <li id="marsS">
                                <img  src="img/mars.png" alt="mars">
                            </li>
                            <li id="terreS">
                                <img  src="img/terre.png" alt="terre">
                            </li>
                            <li id="venusS">
                                <img  src="img/venus.png" alt="venus">
                            </li>
                            <li id="mercureS">
                                <img  src="img/mercure.png" alt="mercure">
                            </li>
                            <li id="soleilS">
                                <img  src="img/soleil.png" alt="soleil">
                            </li>
                        </ul>
                    </section>
              </div>      
          </main>
          <?php include 'html/footer.html'?>
      </div>
  </body>
</html>