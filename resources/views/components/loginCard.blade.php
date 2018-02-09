<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
    <header id="siri-container" class="section__play-btn mdl-cell mdl-cell--1-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--red-600 mdl-color-text--white">
    </header>
        <div class="mdl-card mdl-cell mdl-cell--11-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
          <div class="mdl-card__title">
          <div class="mdl-typography--display-1 mdl-typography--text-center">{{__('login.welcomelogin')}}</div>
          </div>
          <div class="mdl-card__supporting-text">
            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--6-col">
              <a href="/login/facebook" class="social-button" id="facebook-connect"> <span>Connect with Facebook</span></a>
              </div>
              <div class="mdl-cell mdl-cell--6-col">
                  <a href="/login/google" class="social-button" id="google-connect"> <span>Connect with Google</span></a>
                  </div>
            </div>
            <hr/>
    <form action="#" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('email') ? ' is-invalid is-dirty' : '' }} mdl-cell--12-col-desktop">
        <input class="mdl-textfield__input" type="text" id="emailId" name="email" value="" placeholder="johndoe@gmail.com" required>
        <label class="mdl-textfield__label" for="emaidId">{{__('login.label3')}}</label>
        <span class="mdl-textfield__error">{{ $errors->first('email') }}</span>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('password') ? ' is-invalid is-dirty' : '' }} mdl-cell--12-col-desktop">
        <input class="mdl-textfield__input" type="password" id="sample3" name="password" placeholder="Secret Password" required>
        <label class="mdl-textfield__label" for="sample3">{{__('login.label4')}}</label>
        <span class="mdl-textfield__error">{{ $errors->first('password') }}</span>
      </div>
      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
      <input type="checkbox" id="checkbox-1" name="remember"  class="mdl-checkbox__input" checked>
      <span class="mdl-checkbox__label">{{__('login.label5')}}</span>
    </label>
          </div>
          <div class="mdl-card__actions">
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect" id="playBtn">
              {{__('login.label6')}}
          </button>
          <a href="{{ route('password.request') }}" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent">
              {{__('login.label7')}}
          </a>  
        </div>
    </form>
        <div class="mdl-card__menu">
        <a href="{{route('register')}}" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">
            {{__('login.createaccont')}}
        </a>
        </div>
        </div>
    </section>