<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP DISCHI</title>
  </head>
  <body>
    <h1> Album Ajax Dischi</h1>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #235c6b;
        min-height: 100vh;
    }

    .container {
        display:flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        width: 100vw;

        margin: 0 auto;
    }

    .cd {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-direction: column;
        flex-basis: 200px;
        padding: 20px;
        margin: 10px 20px;
        height: 350px;
        text-align: center;
    }

    img {
      max-width: 500px;
      margin-top: 50px;
    }

    h1{
      color: #fff;
      text-align: center;
      font-size:64px;
      padding-top:90px;
    }

    h3 {
        margin-top: 20px;
        color: white;
        font-size: 22px;
        text-transform: uppercase;
    }

    p {
        color: rgba(249, 247, 247, 0.5);
        font-size: 24px;
    }
</style>

<!-- db -->

  <div class="container">
    <div class="cd">
      <?php
      $cd = [

       [
           "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
           "title" => "New Jersey",
           "author" => "Bon Jovi",
           "genre" => "Rock",
           "year" => "1988"
       ],
       [
           "poster" => "https://images.pyramidshop.com/images/_popup/ACPPR48056.jpg",
           "title" => "Live at Wembley 86",
           "author" => "Queen",
           "genre" => "Pop",
           "year" => "1992"
       ],
       [
           "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
           "title" => "Ten's Summoner's Tales",
           "author" => "Sting",
           "genre" => "Pop",
           "year" => "1993"
       ],
       [
           "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
           "title" => "Steve Gadd Band",
           "author" => "Steve Gadd Band",
           "genre" => "Jazz",
           "year" => "2018"
       ],
       [
           "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
           "title" => "Brave new World",
           "author" => "Iron Maiden",
           "genre" => "Metal",
           "year" => "2000"
       ],
       [
           "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
           "title" => "One more car, one more raider",
           "author" => "Eric Clapton",
           "genre" => "Rock",
           "year" => "2002"
       ],
       [
           "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
           "title" => "Made in Japan",
           "author" => "Deep Purple",
           "genre" => "Rock",
           "year" => "1972"
       ],
       [
           "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
           "title" => "And Justice for All",
           "author" => "Metallica",
           "genre" => "Metal",
           "year" => "1988"
       ],
       [
           "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
           "title" => "Hard Wired",
           "author" => "Dave Weckl",
           "genre" => "Jazz",
           "year" => "1994"
       ],
       [
           "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
           "title" => "Bad",
           "author" => "Michael Jacjson",
           "genre" => "Pop",
           "year" => "1987"
       ]
 ];

     ?>

<!-- stampa -->

     <?php

      foreach ($cd as $d) {

          echo "<img class= cds-container src='".$d['poster']."'>";
          echo "<h3>" . $d['title'] . "</h3>";
          echo "<br>";
          echo "<p>" . $d['author'] . "</p>";
          echo "<p>" . $d['genre'] . "</p>";
          echo "<p>" . $d['year'] . "</p>";
          echo "<br>";

        }

      ?>
    </div>
  </div>
 </body>
</html>
