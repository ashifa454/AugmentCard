<!doctype html>
<html lang="{{ app()->getLocale() }}">
  @include('head/index')
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      @include('head/header')
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
          <div class="logo-font android-slogan">Express Your <span id="SLOGAN"></span></div>
          <div class="logo-font android-sub-slogan">Your Emotion Needs a Better way to come up.</div>
          <div class="logo-font android-create-character">
            
          </div>
          <a href="#screens">
            <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
              <i class="material-icons">expand_more</i>
            </button>
          </a>
        </div>
        <div class="android-screen-section mdl-typography--text-center">
          <a name="screens"></a>
          <div class="mdl-typography--display-1-color-contrast">Powering screens of all sizes</div>
          <div class="android-screens">
            <div class="android-wear android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/wear-silver-on.png">
                <img class="android-screen-image" src="images/wear-black-on.png">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android Wear</a>
            </div>
            <div class="android-phone android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/nexus6-on.jpg">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Phones</a>
            </div>
            <div class="android-tablet android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/nexus9-on.jpg">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Tablets</a>
            </div>
            <div class="android-tv android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/tv-on.jpg">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android TV</a>
            </div>
            <div class="android-auto android-screen">
              <a class="android-image-link" href="">
                <img class="android-screen-image" src="images/auto-on.jpg">
              </a>
              <a class="android-link mdl-typography--font-regular mdl-typography--text-uppercase mdl-typography--text-left" href="">Coming Soon: Android Auto</a>
            </div>
          </div>
        </div>
        <div class="android-wear-section">
          <div class="android-wear-band">
            <div class="android-wear-band-text">
              <div class="mdl-typography--display-2 mdl-typography--font-thin">Moments Express via AR</div>
              <p class="mdl-typography--headline mdl-typography--font-thin">
                More About Feature
              </p>
              <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
                  Get Started&nbsp;<i class="material-icons">chevron_right</i>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="android-customized-section">
          <div class="android-customized-section-text">
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Customised by you, for you</div>
            <p class="mdl-typography--font-light">
              Put the stuff that you care about right on your home screen: the latest news, the weather or a stream of your recent photos.
              <br>
              <a href="" class="android-link mdl-typography--font-light">Customise your phone</a>
            </p>
          </div>
          <div class="android-customized-section-image"></div>
        </div>
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Blogs</div>
          <div class="android-card-container mdl-grid">
            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-1.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Get going on Android</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   Read the Blog
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-4.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Create your own Android character</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Turn the little green Android mascot into you, your friends, anyone!</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                  Read the Blog
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/more-from-2.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Get a clean customisable home screen</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">A clean, simple, customisable home screen that comes with the power of Google Now: Traffic alerts, weather and much more, just a swipe away.</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                  Read the Blog
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
          </div>
        </div>

        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn"></button>
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Back to Top
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Satellite imagery: © 2014 Astrium, DigitalGlobe</p>
            <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="android-link android-link-menu mdl-typography--font-light" id="version-dropdown">
              Versions
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
              <li class="mdl-menu__item">5.0 Lollipop</li>
              <li class="mdl-menu__item">4.4 KitKat</li>
              <li class="mdl-menu__item">4.3 Jelly Bean</li>
              <li class="mdl-menu__item">Android History</li>
            </ul>
            <a class="android-link android-link-menu mdl-typography--font-light" id="developers-dropdown">
              For Developers
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
              <li class="mdl-menu__item">App developer resources</li>
              <li class="mdl-menu__item">Android Open Source Project</li>
              <li class="mdl-menu__item">Android SDK</li>
              <li class="mdl-menu__item">Android for Work</li>
            </ul>
            <a class="android-link mdl-typography--font-light" href="">Blog</a>
            <a class="android-link mdl-typography--font-light" href="">Privacy Policy</a>
          </div>

        </footer>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.6/typed.min.js"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>
      var options = {
        strings: ["Love.", "Care.","Joy.","Apraisal."],
        typeSpeed: 220,
        backSpeed:90
      }
      
      var typed = new Typed("#SLOGAN", options);
    </script>
  </body>
</html>