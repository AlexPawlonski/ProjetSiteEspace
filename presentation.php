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
    <title>Présentation</title>
  </head>
  <body>
      <div id="wrapper">
          <?php include 'html/header.html'?>
          <?php include 'html/nav.html'?>
            <main>
                <section id="presentation">
                    <article>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Mollitia asperiores tenetur recusandae similique eveniet, 
                          iusto, esse illum voluptatum incidunt eos earum! Delectus 
                          quae explicabo minus, dolorum quisquam possimus sunt aperiam
                        </p>   
                    </article>
                    <article id="video">
                        <h2>Ci-dessous une vidéo de présentation du système solaire:</h2>
                        <div id="source">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Ps6bygxRohw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </article>
                </section>
                 </main>
          <?php include 'html/footer.html'?>
      </div>
  </body>
</html>