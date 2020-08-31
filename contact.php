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
    <title>Contact</title>
  </head>
  <body>
      <div id="wrapper">
          <?php include 'html/header.html'?>
          <?php include 'html/nav.html'?>
          <main>
            <section id="contact">
                  <article id="topContact">
                    <h2>Contactez-nous à du formulaire ci-dessous:</h2>
                    <form action="#" onSubmit="return valider()">
                        <ul>
                            <li>
                                <label for="nom">Nom* :</label>
                                <input name="nom" type="text"  id="nom" autofocus="" placeholder="Votre nom ici" required="">
                            </li>
                            <li>
                                <label for="prenom">Prénom :</label>
                                <input name="prenom" type="text" id="prenom" placeholder="Votre prénom ici">
                            </li>
                            <li>
                                <div id="sexe">
                                       <legend>Sexe:</legend> 
                                    <div id="sexetype">
                                        <input type="radio" name="sexe" id="homme" value="homme" >
                                        <label for="homme">Homme</label>
                                        <input type="radio" name="sexe" id="femme" value="femme">
                                        <label for="femme">Femme</label>
                                        <input type="radio" name="sexe" id="extra" value="extra">
                                        <label for="extra">Extra-terrestre</label>     
                                    </div>
                                </div>
                            </li>
                            <li>
                                <label for="tel">Tél :</label>
                                <input name="tel" type="text" id="tel" autofocus="" placeholder="0123456789">
                            </li>
                            <li>   
                                <label for="mail">E-mail* :</label>
                                <input name="mail" type="text" id="mail" placeholder="truc@machin.fr" required="">
                            </li>
                            <li>
                                <label for="date">Date :</label>
                                <input type="week" name="date" id="date"> 
                            </li>
                            <li id="Pjointe">
                                <label for="piecejoin">Pièce jointe :</label>
                                <input type="file"  name="piecejointe" id="piecejoin" accept=".pdf .jpg .png"> 
                            </li>
                            <li id="message">
                                <label for="message">Votre message:</label>
                                <textarea name="message" cols="25" rows="10" id="msg" ></textarea>
                            </li>
                            <li>
                                <div id="buttonForm">
                                    <input type="reset" value="recomencer"> 
                                    <input id="submit" type="button" value="Envoyez">  
                                </div>
                            </li>
                        </ul>  
                    </form>
                </article>
                <article id="contactBottom">
                    <h2>Contactez-nous:</h2>   
                    <p>Tél : 01 02 03 04 05</p>
                    <p> rue du cosmos 44049 Triton</p>
                    <iframe
                        id="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d346430.30075532314!2d-1.1900182671874804!3d47.28528730000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48063cb2b911bd33%3A0x3793c0215a344328!2sLe%20Kosmos!5e0!3m2!1sen!2sfr!4v1594201151451!5m2!1sen!2sfr"
                         width="100%" height="300px" frameborder="0" 
                         style="border:0;" allowfullscreen="" 
                         aria-hidden="false" tabindex="0">
                    </iframe>
                </article>
            </section>
          </main>
          <?php include 'html/footer.html'?>
      </div>
  </body>
</html>