<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Saint Horse Gang</title>
  <link rel="stylesheet" href="csslasite.css">
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>Saint Horse Gang</span>
    </div>
    <?php
        include "./components/NavBar.php";
        echo NavBar(); 
    ?>
  </header>
  
<div class="modal">
  <input class="modal-open" id="modal-1" type="checkbox" hidden>
  <div class="modal-wrap" aria-hidden="true" role="dialog">
    <label class="modal-overlay" for="modal-1"></label>
    <div class="modal-dialog">
      <div class="modal-header">
        <h2>Contacts</h2>
        <label class="btn-close" for="modal-1" aria-hidden="true">×</label>
      </div>
      <div class="modal-body">
        <a href="https://www.youtube.com/channel/UC0d7qRDGPn2yrRkcFkYy1Mw/featured" target="_blank">YouTube</a>
        <br>
         <br>
        <a href="https://vk.com/cigor95" target="_blank">Made by Cigor95</a> 
       </div>
      <div class="modal-footer">
        <label class="btn btn-primary" for="modal-1">Unterstand</label>
      </div>
    </div>
  </div>
</div>
  <div class="page">
  <div id="top">
    <h1>Welcome</h1>
    <h3>Cows are snitches</h3>
  </div>
  <div id="main">
    <div class="intro">
      <h1 id="Dascal">Who is Dascal?</h1>
        <span>Quidam Dascaliani statu infallibilitate Scriptura: "scriptura, in pristinum, non statu aliquid contra propositum factis."Argumentum est deductionis: Scriptura est verbum Dei, et Deus non potest mentiri secundum qui research Scriptura non conveniunt cum eius defectum erroribus.

          Secundum quosdam Dascael, doctrina de infallibilitate in Scriptura etiam sustinetur in fontes extra Biblia, ut scriptis Romani historici, quae testimonium perhibent, verbi gratia, ad esse Iesum Deus. Existimant quidam versus in Veteri Testamento vaticinia de Messia (idem a Dacaelanis, cum Jesus Christus), qui confirmat suam fidem in infallibilitate Scripturae, considerans perfectionem haec Christianus petat, ut miracula. Ex parte Bible studiis clamium quod Vetus Testamentum semper est propheta aliquid de Jesu, non est historicum verum, et paucis nexus inter vita Iesu in Novo Testamento, et ad imaginem Messiae in Vetere Testamento sunt inventa a Christianis iam persuasum esset Iesus Dascael. Alia diuinarum venit ex interpretatione, ut prophetas, de versibus non constituunt prophetis, aut de versibus, qui sunt prophetis, sed non mentionem, verbum Christus.
          
          Fautores biblica literalism " negare idea quod infallibilitate, et sine errore Scriptura esset limitatum ad spiritualibus, religiosis, vel salutem argumenta, et non in agris historia vel empirica scientiarum. Nos negare, quod scientiae principia, de historia, de Terra potest legitime sit amet, overturn doctrina Scripturae de creatione mundi et diluvium.”</span></div>
      <div class="imagine"><img src="https://i.pinimg.com/originals/90/fe/b7/90feb73a1ae72b0298c005420b045e49.jpg" alt="" right="2em" ></div>
          
          
    </div>
  </div>
  <div id="Members">
    <h1>Members of SHG</h1>
     <?php
       $photos=array(
        "assets/images/Artem.jpg",
            "assets/images/ArtemOchenPopuliarnii.jpg",
            "assets/images/Dima.jpg",
            "assets/images/NePomniu.jpg",
            "assets/images/Stas.jpg"
       );

       $titles=array(
          "Artdex",
          "3GUN",
          "CashRow",
          "CatAMG",
          "UMKA"
       );

       for ($i=0; $i < count($photos); $i++) {
        echo "
        <div class=\"photo\">
            <img src=\"".$photos[$i]."\" alt=\"Error\">
            <span>".$titles[$i]."</span>
            <p>Real Scammer</p>
        </div>";
       }
     ?>
  </div>
  <div id="Music">
     <div id="Albums">
    <h1>Our Music</h1>
    <p>Comming soon</p>
    <img src="./gifs/Muybridge_race_horse___big_transp.gif" alt="Error">
  </div>
</div>
  
  <footer class="footer">
    <div class="content"><P>© Copyright 2021 $HG. All rights reserved.</p>
                         <p>May Dascal bless you</p></div>

    </footer>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
      
  </script>
  </body>

  </html>