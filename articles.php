<!doctype html>
<!--[if lt IE 9]><html lang="cs" class="old-ie no-js"><![endif]-->
<!--[if gt IE 8]><!--><html lang="cs" class="no-js"><!--<![endif]-->

  <head>
    <meta charset="UTF-8">

    <title>
      Space News: USA mají po 40 letech novou kosmickou loď. Poveze nás Orion na Mars?
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="fullcss" content="dist/css/style.min.css">
    <meta name="fulljs" content="dist/js/script.js">

    <style>
      /* style.critical.min.js */
      <?php include('dist/css/critical-style.min.css') ?>
    </style>
    <script>

      // document.no-js -> document.js

      document.documentElement.className =
         document.documentElement.className.replace("no-js","js");

      // Picture element HTML5 shiv

      document.createElement( "picture" );

      // Inlining Critical JS

      <?php include('dist/js/lib/picturefill.min.js') ?>

      // Font Face Observer Setup
      // (nepoustime k IE8)

      if (!(document.all && !document.addEventListener)) {
        <?php include('dist/js/lib/fontfaceobserver.min.js') ?>

        var vollkorn = new FontFaceObserver("Vollkorn", {});
        var exo = new FontFaceObserver("Exo", {});

        // Drzi fallback font 10s a pak nacte webfont nebo "preda" nacitani browseru
        Promise.all([
          vollkorn.check(null, 10000)
        ]).then(function() {
          document.documentElement.className += " vollkorn-font-loaded";
        }, function() {
          document.documentElement.className += " vollkorn-font-browser-loading";
        });
        Promise.all([
          exo.check(null, 10000)
        ]).then(function() {
          document.documentElement.className += " exo-font-loaded";
        }, function() {
          document.documentElement.className += " exo-font-browser-loading";
        });

      }

      // Enhance

      <?php include('dist/js/lib/enhance.min.js') ?>

      // Respond

      <?php include('dist/js/lib/respond.min.js') ?>
    </script>

    <noscript><link rel="stylesheet" href="dist/css/style.min.css"></noscript>

  </head>

  <body>

<!-- Hlavicka -->

    <div class="head">

        <div class="container">

          <p class="head-logo">
            <a href="index.html"><img src="dist/img/vector/space-news-logo-inverted.svg" width="216" height="129" alt="Space News" /></a>
          </p>

          <p class="head-hamburger">
            <a href="#nav">
              <img src="dist/img/vector/hamburger-menu.svg" height="24" alt="Menu" />
            </a>
          </p>

        </div><!-- /.container -->

    </div><!-- .head -->

<!-- Navigace -->

    <div id="nav" class="nav">

      <div class="container">

        <h2 class="hide-on-screen">Navigace</h2>

        <ul role="navigation">
          <li><a class="nav-item" href="#">Planeta Země</a></li>
          <li><b><a class="nav-item" href="#">Vesmírné míse</a></b></li>
          <li><a class="nav-item" href="#">Exoplanety</a></li>
          <li><a class="nav-item" href="#">NASA &amp; ESA</a></li>
          <li><a class="nav-item" href="#">Věda pro lidi</a></li>
        </ul>

      </div><!-- /.container -->

    </div><!-- .nav -->

    <div class="container">


<!-- Hlavni obsah -->

      <div class="content" role="main">

        <h1>Články v kategorii</h1>

        <ul class="similar-articles">
          <li class="similar-article">
            <h3>
              <a href="#http://technet.idnes.cz/orion-posle-raketoplany-do-srotu-a-otevre-novou-etapu-v-dobyvani-vesmiru-1r1-/tec_vesmir.aspx?c=A061120_170632_tec_vesmir_vse">
                Orion pošle raketoplány do šrotu a otevře novou etapu v dobývání vesmíru
              </a>
            </h3>
            <p class="similar-article-image">
              <a href="#http://technet.idnes.cz/orion-posle-raketoplany-do-srotu-a-otevre-novou-etapu-v-dobyvani-vesmiru-1r1-/tec_vesmir.aspx?c=A061120_170632_tec_vesmir_vse"><img src="dist/img/content/similar_1-small.jpg" width="600" alt="Orion pošle raketoplány do šrotu a otevře novou etapu v dobývání vesmíru"></a>
            </p>
            <p>
              Američtí astronauté budou po plánovaném ukončení provozu raketoplánů v roce 2010 využívat ke svým letům na Mezinárodní kosmickou stanici (ISS) a na Měsíc zcela nový a bezpečnější vesmírný výzkumný prostředek Orion.
            </p>
          </li>
          <li class="similar-article">
            <h3>
              <a href="#http://technet.idnes.cz/na-mesic-a-mars-poleti-lide-v-orionu-du6-/tec_vesmir.aspx?c=A060824_150527_tec_checktech_NYV">
                Na Měsíc a Mars poletí lidé v Orionu
              </a>
            </h3>
            <p class="similar-article-image">
              <a href="#http://technet.idnes.cz/na-mesic-a-mars-poleti-lide-v-orionu-du6-/tec_vesmir.aspx?c=A060824_150527_tec_checktech_NYV"><img src="dist/img/content/similar_2-small.jpg" width="600" alt="Na Měsíc a Mars poletí lidé v Orionu"></a>
            </p>
            <p>
              Vesmírné výzkumné vozidlo, ve kterém poletí lidská posádka nejprve na Měsíc a poté i na Mars, se bude jmenovat Orion.
            </p>
          </li>
          <li class="similar-article">
            <h3>
              <a href="#http://technet.idnes.cz/vedecky-sloupek-jana-kolare-o-projektu-orion-f39-/tec_vesmir.aspx?c=A130122_160933_tec_vesmir_mla">
                Evropa se bude podílet na vývoji nové kosmické lodě NASA. Bez Čechů
              </a>
            </h3>
            <p class="similar-article-image">
              <a href="#http://technet.idnes.cz/vedecky-sloupek-jana-kolare-o-projektu-orion-f39-/tec_vesmir.aspx?c=A130122_160933_tec_vesmir_mla"><img src="dist/img/content/similar_3-small.jpg" width="600" alt="Evropa se bude podílet na vývoji nové kosmické lodě NASA. Bez Čechů"></a>
            </p>
            <p>
              Evropané se budou poprvé účastnit vývoje kosmického prostředku pro lidskou posádku. Bude s USA pracovat na vývoji lodě Orion. Zaplatí tak za používání stanice ISS.
            </p>
          </li>

        </ul>

      </div><!-- .content -->



    </div><!-- .container -->

<!-- Paticka -->

    <div class="foot" role="contentinfo">

      <div class="container">

        <div class="foot-socials">
          <h2>
            Sledujte nás
          </h2>
          <p>
            <a class="foot-socials-icon" href="http://www.facebook.com/VzhuruDolu"><img src="dist/img/vector/facebook.svg" alt="Facebook" width="36" height="36"></a>
            <a class="foot-socials-icon" href="http://www.twitter.com/VzhuruDolu"><img src="dist/img/vector/twitter.svg" alt="Twitter" width="36" height="36"></a>
            <a class="foot-socials-icon" href="http://plus.google.com/VzhuruDolu"><img src="dist/img/vector/google_plus.svg" alt="Google Plus" width="36" height="36"></a>
            <a class="foot-socials-icon" href="http://www.vzhurudolu.cz/rss"><img src="dist/img/vector/feed.svg" alt="RSS" width="36" height="36"></a>
          </p>
        </div>

        <p class="foot-copyright">
          <small>&copy; Copyright 2015 Space News
        </p>

      </div><!-- /.container -->

    </div><!-- .foot -->

    <script>
    // Ne-SVG prohlizece: nahrazujeme .svg -> .png
    if (!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1")) {
      var imgs = document.getElementsByTagName('img');
      var endsWithDotSvg = /.*\.svg$/
      var i = 0;
      var l = imgs.length;
      for(; i != l; ++i) {
          if(imgs[i].src.match(endsWithDotSvg)) {
              imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
          }
      }
    }
    </script>

  </body>

</html>
