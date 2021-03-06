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

        <h1>
          USA mají po 40 letech novou kosmickou loď. Poveze nás Orion na Mars?
        </h1>

        <p>
          1. prosince 2014
        </p>

        <p class="photo">
          <img alt="Orion" width="1600" height="899"
            srcset="
              dist/img/content/orion_1-large.jpg 1600w,
              dist/img/content/orion_1-medium.jpg 1024w,
              dist/img/content/orion_1-small.jpg 400w
            "
            sizes="
              (min-width: 800px) calc((100vw - 2*15px)*0.66),
              calc(100vw - 2*15px)
            ">
        </p>


        <p>
          <big>Kabina americké kosmické lodi MPCV čili Orion je připravena k prvnímu zkušebnímu letu. Startovat má ve čtvrtek 4. prosince ve 13:05 našeho času pomocí rakety Delta IV z Kennedyho kosmického střediska na Floridě. Po čtyřiceti letech USA vyzkouší plavidlo, určené pro delší lety než jen na nízkou oběžnou dráhu Země.</big>
        </p>

        <p>Tento stroj je malým odvarem ctižádostivého plánu prezidenta <em>G. W. Bushe</em>. Ten totiž v lednu 2004 vystoupil s projektem Constelation, na jehož konci mělo být plavidlo Orion pro šest lidí, lunární <a href="http://cs.wikipedia.org/wiki/Program_Constellation">výsadkový modul Altair</a> a dva typy nosných raket Ares. Cíl? Návrat lidí na Měsíc a výprava na Mars.</p>

        <p>Poprvé v něm měli astronauti letět v roce 2014 a k Měsíci zamířit o šest let později. Nicméně vývoj všech strojů se opožďoval, protože na ně Kongres neuvolňoval dostatek peněz, což vzbuzovalo pochybnosti o původních termínech. V roce 2009 bylo jasné, že letová premiéra se zdrží nejméně o tři roky.</p>

        <h2>Náhrada za projekt Constelation</h2>

        <p>Když nastoupil do Bílého domu <em>Barack Obama</em>, program Constelation zrušil. Už před prezidentskými volbami proklamoval, že kosmické lety považuje za luxus, a proto do nich nebude investovat. Kromě toho z ideologických důvodů zavrhoval všechno, co Bush dělal. To se mu však vždycky nepovedlo.</p>

        <p>V tomto případě musel ustoupit. Na nátlak odborníků a politiků, především v Kongresu, přistoupil na kompromis. V dubnu 2011 souhlasil s dokončením vývoje Orionu, byť pod označením Víceúčelová pilotovaná loď (Multi-Purpose Crew Vehicle - MPCV), pouze pro čtyři lidi (tedy pouze o jednoho víc než Apollo) a s těžkým nosičem SLS (Space Launch System). Přitom vyhlásil, že cesty na Měsíc jsou zbytečné, MPCV má zamířit k asteroidům a k Marsu. Opět však vykládal nesmysl, protože o tom budou rozhodovat příští prezidenti.</p>

        <p>Pro novou osobní loď NASA se používá označení jak Orion, tak MPCV.</p>

        <h2>„Apollo na steroidech“</h2>

        <p>Novou pilotovanou loď pro NASA staví osvědčená firma  <a href="http://www.lockheedmartin.com/">Lockheed Martin</a>, která získala tuto zakázku už za Bushovy éry. MPCV je kopií Orionu. Připomíná velitelskou kabinu Apolla, proto se od začátku mluvilo o „Apollu na steroidech“. Má tvar kužele bez špičky. Počítá se s třítýdenní cestou čtyř astronautů. To je samozřejmě málo, pobyt by se dal prodloužit na půl roku, pokud se připojí další servisní modul. Pro vzdálenější cesty od Země budou nutné další úpravy. Stroj by měl startovat a přistávat desetkrát.</p>

        <p>Servisní modul postaví podle smlouvy NASA-ESA z listopadu 2012 firma Airbus v německých Brémách. Ponese motory pohonného systému a pohonné hmoty, termoregulační zařízení, sluneční baterie, palivové články, vodu, kyslík a dusík.</p>

        <p>Bezpečnost Orionu má být vyšší než u raketoplánů. Mimo jiné ji zvýší <strong>záchranná věžička na špici kabiny</strong>, jakou měly stroje Mercury a Apollo. Tato věžička vybavená vlastními motory a padáky může v případě havarijní situace během startu do výšky 50 kilometrů vynést astronauty do bezpečí mimo raketu. (Mimochodem, Američané to v praxi nemuseli nikdy vyzkoušet, zato tento systém jednou použili Sověti při špatném vypuštění lodě Sojuz.) Na kritických místech má Orion tepelný štít silný 4 cm, který musí odolávat teplotám přes 2 000 stupňů.</p>

        <div class="gallery">

          <h2>Fotogalerie</h2>

          <p class="gallery-item">
            <a class="fancybox" href="dist/img/content/orion_3-large.jpg">
              <img src="dist/img/content/orion_3-small.jpg" alt="Orion" width="600" height="338">
            </a>
          </p>
          <p class="gallery-item">
            <a class="fancybox" href="dist/img/content/orion_4-large.jpg">
              <img src="dist/img/content/orion_4-small.jpg" alt="Orion" width="600" height="338">
            </a>
          </p>
          <p class="gallery-item last">
            <a class="fancybox" href="dist/img/content/orion_5-large.jpg">
              <img src="dist/img/content/orion_5-small.jpg" alt="Orion" width="600" height="338">
            </a>
          </p>
          <p class="gallery-item">
            <a class="fancybox" href="dist/img/content/orion_6-large.jpg">
              <img src="dist/img/content/orion_6-small.jpg" alt="Orion" width="600" height="338">
            </a>
          </p>
          <p class="gallery-item">
            <a class="fancybox" href="dist/img/content/orion_7-large.jpg">
              <img src="dist/img/content/orion_7-small.jpg" alt="Orion" width="600" height="338">
            </a>
          </p>
          <p class="gallery-item last">
            <a class="fancybox" href="dist/img/content/orion_8-large.jpg">
              <img src="dist/img/content/orion_8-small.jpg" alt="Orion" width="600" height="338">
            </a>
          </p>
        </div>

        <p>Ředitel projektu Orion u NASA <em>Mark Geyer</em> upozornil, že vzhledem k plánu používat tento stroj k dalekým letům mimo Zemi má i lepší stínění proti radiaci, aby ochránilo posádku, a také lepší ochranu palubní elektroniky. Zatímco Apollo vycházelo z techniky používané v šedesátých letech minulého století, tato kabina se opírá o techniku o půl století mladší. „Je to úplně nový svět,“ poznamenal Mike Hawes, šéfkonstruktér od firmy Lockheed Martin.</p>


        <p>Projekt Orion přijde na 15 miliard dolarů, rovněž tak rakety řady SLS.</p>

        <h2>Let 4,5 hodiny</h2>

        <p>Vypuštění bezpilotního Orionu bude letos pro NASA největší akcí, řekl v říjnu 2014 náměstek ředitele kosmické agentury <em>William Hill</em>. Po 33 letech od prvního startu raketoplánu má agentura připravené plavidlo schopné vydat se i do dalekého vesmíru.</p>

        <p>Kabina má vyletět <strong>do výšky 5 800 km nad Zemí, takže pronikne Van Allenovými pásy záření</strong>. Odtud se vrátí do atmosféry. Tento první letový test má ověřit její ochranný štít, aerodynamiku, palubní přístroje, padákový systém. Na palubě má na 1 200 snímačů pro měření vibrací, hluku, teploty a dalších charakteristik.</p>

        <p>Jak je u amerických pilotovaných strojů zvykem, bude přistávat na padácích do oceánu, v tomto případě do Pacifiku. Za 4 hodiny a 23 minut letu vletí do zemské atmosféry rychlostí okolo 30 000 km/h, tedy rychleji, než je obvyklé. Kabinu budou 1 000 km od kalifornského San Diega čekat lodě válečného námořnictva.</p>

        <p>„Je to náš první krok na cestě k Marsu,“ prohlásil Bob Cabana, ředitel Kennedyho kosmického střediska.</p>

        <h2>Lidé nejdřív v roce 2018?</h2>

        <p>Než bude Orion nasazen do provozu, bude muset projít sérií zkoušek. Podle plánu NASA by se měl vydat na automatický oblet Měsíce, tedy bez lidí, v roce 2017.
        Další termíny nejsou jednotné. Kosmická agentura oficiálně uvádí, že první astronauti se svezou na Orionu koncem roku 2017, nebo začátkem roku 2018. Firma Airbus však píše, že servisní modul dodá pro start v roce 2018. Mike Wall na internetové stránce Space.com. napsal, že pomocí nové rakety SLS poletí posádka v roce 2021. Následovat by měla mise k asteroidům poblíž Země a do roku 2030 i pilotovaný let na Mars. Orion však dokáže zabezpečit posádku „jen“ na 21 dní, pro delší lety by tedy k němu byl připojen další modul pro tyto účely.</p>

        <p>Ovšem ani tyto plány nejsou svaté, při letech do vesmíru zdržují starty mnohé technické a finanční potíže. Buďme střízliví. Jestliže všechny přípravy proběhnou bez větších obtíží, <strong>vyzkouší první posádka Orion koncem tohoto desetiletí</strong>. Na Měsíc nebo k asteroidům se vydá spíše ke konci první poloviny dvacátých let a na Mars v polovině let třicátých.</p>

        <p>
          Autor:
          <a href="#">Karel Pacner</a>
        </p>

        <h2>Podobné články</h2>

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

<!-- Mene dulezity obsah -->

      <div class="side" role="complementary" id="data">

        <h2>Srovnání lodí</h2>

        <div class="responsive-table">

          <table class="table-order">
            <thead>
              <tr>
                <th></th>
                <th>Apollo<br>(NASA)</th>
                <th>Orion<br>(NASA)</th>
                <th>Dragon<br>(SpaceX)</th>
                <th>Sojuz TMA–M<br>(Rusko)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Délka:</th>
                <td>9,92&nbsp;m</td>
                <td>8,10&nbsp;m</td>
                <td>6,10&nbsp;m</td>
                <td>7,50&nbsp;m</td>
              </tr>
              <tr>
                <th>Průměr:</th>
                <td>2,5&nbsp;m</td>
                <td>5,03&nbsp;m</td>
                <td>3,7&nbsp;m</td>
                <td>2,7&nbsp;m</td>
              </tr>
              <tr>
                <th>Rozpětí:</th>
                <td>12&nbsp;m</td>
                <td>17&nbsp;m</td>
                <td>11&nbsp;m</td>
                <td>10,07&nbsp;m</td>
              </tr>
              <tr>
                <th>Objem kabiny:</th>
                <td>8,2&nbsp;m<sup>3</sup></td>
                <td>10,23&nbsp;m<sup>3</sup></td>
                <td>14&nbsp;m<sup>3</sup></td>
                <td>9,23&nbsp;m<sup>3</sup></td>
              </tr>
            </tbody>
          </table>

        </div>


        <h2>Video</h2>

        <p class="media">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ib4djfbik40" frameborder="0" allowfullscreen></iframe>
        </p>

      </div><!-- .side -->

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
