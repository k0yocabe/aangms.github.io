<!DOCTYPE html>
  <html>
    <head>

      <title>TRIAL!</title>


      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="css/style.css">



    </head>

    <body>


      <!-- NAVBAR -->
        <div class="navbar-fixed">
          <nav class="pink">
            <div class="container">
              <div class="nav-wrapper">
                <a href="#" class="brand-logo ">
                  <img class="brand responsive-img" width="65px" height="auto" src="img/portfolio/gst-gold.png">
                </a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#clients">Client</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

        <ul class="sidenav" id="mobile-nav">
          <li><a href="#about">About Us</a></li>
          <li><a href="#clients">Client</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>

        <!-- SLIDER -->

        <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/slider/1.png">
            <div class="caption left-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/2.png">
            <div class="caption left-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/3.png">
            <div class="caption right-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>

      <!-- ABOUT US -->
      <section id="about" class="about">
        <div class="container">
          <div class="row">
            <h3 class="center light grey-text text-darken-3">About Us</h3>
            <div class="col m6 light">
              <h5>We Are Professionals</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. </p>
            </div>
            <div class="col m6 light">
              <p>WEB DEVELOPMENT</p>
              <div class="progress">
                  <div class="determinate pink" style="width: 90%"></div>
              </div>
              <p>MOBILE APP DEVELOPMENT</p>
              <div class="progress">
                  <div class="determinate pink" style="width: 80%"></div>
            </div>
            <p>GAME DEVELOPMENT</p>
              <div class="progress">
                  <div class="determinate pink" style="width: 70%"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- CLIENTS -->

<div class="parallax-container">
      <div class="parallax" id="clients"><img src="img/slider/4.png"></div>
      <div class="container clients">
        <h3 class="center light white-text">Our Clients</h3>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/clients/gojek.png">
          </div>
            <div class="col m4 s12 center">
            <img src="img/clients/tokopedia.png">
          </div>
            <div class="col m4 s12 center">
            <img src="img/clients/traveloka.png">
          </div>
        </div>
      </div>
    </div>

    <!-- SERVICES -->

    <section id="services" class="services grey lighten-3">
      <div class="container">
        <div class="row">
          <h3 class="light center grey-text text-darken-3">Our Services</h3>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">desktop_windows</i>
              <h5>Web Development</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">developer_mode</i>
              <h5>Mobile App</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col m4 s12">
            <div class="card-panel center">
              <i class="material-icons medium">games</i>
              <h5>Game Development</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="portfolio">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Portfolio</h3>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/1.png" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/2.png" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/3.png" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/4.png" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="row">
          <div class="col m3 s12">
            <img src="img/portfolio/5.png" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/6.png" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/1.png" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="img/portfolio/2.png" class="responsive-img materialboxed">
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact grey lighten-3">
      <div class="container">
        <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
        <div class="row">
          <div class="col m5 s12">
            <div class="card-panel pink center white-text">
              <i class="material-icons">
                email
              </i>
              <h5>Contact</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
            <ul class="collection with-header">
              <li class="collection-header"><h5>Our Office</h5></li>
              <li class="collection-item">Office</li>
              <li class="collection-item">Jl. Bandara Juanda I No 11b Cemorokandang</li>
              <li class="collection-item">Malang, East Java</li>
            </ul>
          </div>
          <div class="col m7 s12">
            <form>
              <div class="card-panel">
                <h5>Please Fill out this form</h5>
                <div class="input-field">
                  <input type="text" name="name" id="name">
                  <label form="name">Name</label>
                </div>
                <div class="input-field">
                  <input type="email" name="email" id="email">
                  <label form="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="text" name="phone" id="phone">
                  <label form="phone">Phone Number</label>
                </div>
                <div class="input-field">
                  <textarea name="message" id="message" class="materialize-textarea"></textarea>
                  <label form="message">Message</label>
                </div>
                <button type="submit" class="btn pink">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>














      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);


      </script>

    </body>
  </html>