<!DOCTYPE html>
<html lang="nl-BE">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitKaptan</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="scripts/script.js" defer></script>
  </head>
  <body id="index-body">
    <header>
      <a href="index.html"
        ><img
          class="logo"
          src="assets/fitkaptan-logo-transparant.png"
          alt="fitkaptan-logo-transparant"
      /></a>
      <div class="headerimage"></div>
      <nav>
        <ul class="nav_links">
          <li><a href="index.html">Home</a></li>
          <li><a href="shop.html">Producten</a></li>
          <li><a href="klanten.html">Klanten</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="#about-me">Over mezelf</a></li>
          <li>
            <form action="">
              <input
                type="search"
                name="search"
                id="searchInput"
                placeholder="Zoek naar producten.."
              />
              <button class="search-icon">
                <img src="assets/search-icon.png" alt="search" width="15px" />
              </button>
            </form>
          </li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="slider">
        <div class="list">
          <div class="item">
            <img src="assets/nutrition.jpg" alt="nutrition" />
          </div>
          <div class="item">
            <img src="assets/chestguy.jpg" alt="chestguy" />
          </div>
          <div class="item">
            <img
              src="assets/gymwithpersonaltrainer.jpg"
              alt="gymwithpersonaltrainer"
            />
          </div>
          <div class="item">
            <img src="assets/peopleholdingropes.jpg" alt="peopleholdingropes" />
          </div>
          <div class="item">
            <img src="assets/pressing.jpg" alt="pressing" />
          </div>
          <div class="item">
            <img src="assets/swimming_gym.jpg" alt="swimming_gym" />
          </div>
        </div>
        <div class="buttons">
          <button id="prev"><</button>
          <button id="next">></button>
        </div>
        <ul class="dots">
          <li class="active"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <section class="introduction">
        <article>
          <h2>FitKaptan: Jouw Fitnesspartner</h2>
          <p>
            Welkom bij FitKaptan, jouw ultieme bestemming voor
            fitnessbenodigdheden en -advies. Ontdek een uitgebreid assortiment
            hoogwaardige producten en abonnementen die jou helpen je
            fitnessdoelen te bereiken, of je nu traint in de sportschool of
            thuis. Duik in onze collectie en laat FitKaptan je gids zijn op weg
            naar een betere versie van jezelf!
          </p>
        </article>
        <article>
          <img src="assets/introductie-collage.png" alt="introductie-collage" />
        </article>
      </section>

      <section class="subscriptions">
        <h1>Onze Abonnementen</h1>
        <section class="cards">
          <div class="card shadow">
            <ul>
              <li class="pack">Basic</li>
              <li id="basic" class="price bottom-bar">&euro; 19.99</li>
              <li>&#10004; Standaard workouts en nutrition plans</li>
              <li>&#10004; Snelle e-mail support</li>
              <li><button class="btn">Meer info</button></li>
            </ul>
          </div>
          <div class="card active">
            <ul>
              <li class="pack">Pro</li>
              <li id="pro" class="price bottom-bar">&euro; 35.99</li>
              <li>&#10004; Express levering</li>
              <li>&#10004; 24/7 prioriteit support & AD-Free</li>
              <li>&#10004; Toegang tot ALLE workouts en nutrition plans</li>
              <li>&#10004; 1-op-1 virtueel coaching sessie elke maand</li>
              <li>
                &#10004; Exclusieve content & early access bij nieuwe functies
              </li>
              <li><button class="btn active-btn">Meer info</button></li>
            </ul>
          </div>
          <div class="card shadow">
            <ul>
              <li class="pack">Advanced</li>
              <li id="advanced" class="price bottom-bar">&euro; 25.99</li>
              <li>&#10004; AD-Free ervaring</li>
              <li>&#10004; Express levering & telefoon support</li>
              <li>&#10004; Standaard workouts & nutrition plans</li>
              <li><button class="btn">Meer info</button></li>
            </ul>
          </div>
        </section>
      </section>

      <section class="product-section">
        <h1>ONZE BESTSELLERS</h1>
        <div class="product-grid">
          <div class="card">
            <div class="card-pill">Meest verkocht</div>
            <img
              class="card-img"
              src="assets/adjustabledumbbells.jpg"
              alt="adjustabledumbbells"
            />
            <div class="flex-row space-between w-full mb-sm">
              <p class="product-brand">FitKaptan</p>
            </div>
            <h1 class="product-name">adjustable dumbbells</h1>
            <div class="flex-row">
              <p class="price strike"><span>174.95</span>&euro;</p>
              <p class="price"><span>125.99</span>&euro;</p>
            </div>
            <div class="btn-col">
              <a href="adjustabledumbbell.html" class="icon-link"> Bekijk nu</a>
            </div>
          </div>
          <div class="card">
            <img
              class="card-img"
              src="assets/liftinggloves.jpg"
              alt="liftinggloves"
            />
            <div class="flex-row space-between w-full mb-sm">
              <p class="product-brand">FitKaptan</p>
            </div>
            <h1 class="product-name">Lifting Gloves</h1>
            <div class="flex-row">
              <p class="price"><span>16.99</span>&euro;</p>
            </div>
            <div class="btn-col">
              <a href="liftinggloves.html" class="icon-link"> Bekijk nu </a>
            </div>
          </div>
          <div class="card">
            <img
              class="card-img"
              src="assets/fitnesswatch.jpg"
              alt="product-image"
            />
            <div class="flex-row space-between w-full mb-sm">
              <p class="product-brand">FitKaptan</p>
            </div>
            <h1 class="product-name">Fitness Watch</h1>
            <div class="flex-row">
              <p class="price"><span>89.99</span>&euro;</p>
            </div>
            <div class="btn-col">
              <a href="fitnesswatch.html" class="icon-link"> Bekijk nu </a>
            </div>
          </div>
        </div>
      </section>

      <section id="about-me">
        <article>
          <img src="assets/orhan_kaptan.JPG" alt="orhan_kaptan_selfie" />
        </article>
        <article>
          <h2>OVER MEZELF</h2>
          <p>
            Mijn naam is Orhan Kaptan Calik, en ik ben meer dan alleen een
            fitnessliefhebber - ik ben een gepassioneerde student in
            programmeren en een aspirerende ondernemer in de wereld van fitness.
            Momenteel zet ik mijn eerste stappen in mijn fitness reis, waarbij
            ik mijn eigen webshop wil creëren die jou voorziet van hoogwaardige
            fitnessproducten die je nodig hebt om je doelen te bereiken.
          </p>
          <p>
            Terwijl ik mijn graduaat in programmeren nastreef, werk ik ook als
            jobstudent in de filmindustrie. Mijn passie voor coderen komt voort
            uit de mogelijkheden die het biedt om creatieve ideeën om te zetten
            in functionele en boeiende digitale ervaringen.
          </p>
          <p>
            Ik nodig je uit om deel uit te maken van deze reis naar een
            gezondere levensstijl. Samen zullen we streven naar een betere
            versie van onszelf, stap voor stap. Met sportieve groeten, Orhan
            Kaptan
          </p>
        </article>
        <article>
          <img
            class="about-me-logo"
            src="assets/fitkaptan-logo-transparant.png"
            alt="fitkaptan-logo-transparant"
          />
        </article>
      </section>
    </main>

    <footer>
      <section class="row">
        <section class="col">
          <h3>
            Betaalmethoden
            <section class="underline"><span></span></section>
          </h3>
          <section class="betaalmethoden">
            <ul>
              <li><img src="assets/PayPal.png" alt="" /></li>
              <li><img src="assets/Mastercard.png" alt="" /></li>
              <li><img src="assets/Visa.png" alt="" /></li>
              <li><img src="assets/Klarna.png" alt="" /></li>
              <li><img src="assets/ApplePay.png" alt="" /></li>
              <li><img src="assets/GooglePay.png" alt="" /></li>
            </ul>
          </section>
        </section>
        <section class="col">
          <h3>
            Adres
            <section class="underline"><span></span></section>
          </h3>
          <p>FitKaptan</p>
          <p>Parklaan 22</p>
          <p>9100 Sint-Niklaas | België</p>
          <p class="email-id">info@fitkaptan.com</p>
          <h4>+32 479 23 12 00</h4>
        </section>
        <section class="col">
          <h3>
            Links
            <section class="underline"><span></span></section>
          </h3>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="shop.html">Producten</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#">Over mezelf</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </section>
        <section class="col">
          <h3>
            Nieuwsbrief
            <section class="underline"><span></span></section>
          </h3>
          <form>
            <input type="email" placeholder="Voer uw e-mailadres in" required />
            <button type="submit">
              <img class="arrow" src="assets/arrow_forward.png" />
            </button>
          </form>
        </section>
      </section>
      <p class="copyright">FitKaptan &copy; 2023 - All Rights Reserved</p>
    </footer>
<?php
include_once("config.php");
$stmt = $mysqli->prepare("insert into fitkaptan(name, age, email, wachtwoord, registratie_datum) values (?,?,?,?,NOW())");
$name = "Orhan";
$age = 22;
$email = "orhan.calik@student.ap.be";
$wachtwoord = "test";
$stmt->bind_param("siss", $name, $age, $email, $wachtwoord);
$stmt->execute();
?>
echo "Data inserted successfully.";
  </body>
</html>
