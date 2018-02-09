<!doctype html>
<html lang="{{ app()->getLocale() }}">
  @include('head/index')
  <style>
    .android-more-section{
      max-width:900px;
    }
  </style>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      @include('head/header')
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Choose a Base Image</div>
          <div class="android-card-container mdl-grid">
            @foreach($base as $item)
            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="{{asset($item->image)}}">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">{{$item->title}}</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">{{$item->description}}</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="{{URL::to('overlay/'.$item->id.'.png')}}">
                   Continue
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>          
            @endforeach
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
            <p class="mdl-typography--font-light">Satellite imagery: © 2018 Delhi, Augmented Card</p>
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