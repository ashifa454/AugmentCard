<div class="android-header mdl-layout__header mdl-layout__header--waterfall">
    <div class="mdl-layout__header-row">
      <span class="android-title mdl-layout-title">
        <img class="android-logo-image" src="https://greetingsbucket.nyc3.digitaloceanspaces.com/static/arlogo%20(2).png">
      </span>
      <!-- Add spacer, to align navigation to the right in desktop -->
      <div class="android-header-spacer mdl-layout-spacer"></div>
      <!--<div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
        <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" id="search-field">
        </div>
      </div>!-->
      <!-- Navigation -->
      <div class="android-navigation-container">
        <nav class="android-navigation mdl-navigation">
          @if(isset($isHome))   
            <a href="{{route('baseListing')}}" class="mdl-navigation__link mdl-typography--text-uppercase">Get Started</a>        
          @endif  
        </nav>
      </div>
      <span class="android-mobile-title mdl-layout-title">
        <img class="android-logo-image" src="https://greetingsbucket.nyc3.digitaloceanspaces.com/static/arlogo%20(2).png">
      </span>
      <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
        <i class="material-icons">more_vert</i>
      </button>
      <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
        <li class="mdl-menu__item">About Us</li>
        <li class="mdl-menu__item">Privacy Policy</li>
        <li disabled class="mdl-menu__item">Terms of Use</li>
        <li class="mdl-menu__item">Free Ar Cards</li>
      </ul>
    </div>
  </div>