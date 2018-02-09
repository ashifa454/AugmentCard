<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
    <header id="siri-container" class="section__play-btn mdl-cell mdl-cell--1-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--red-600 mdl-color-text--white">
    </header>
        <div class="mdl-card mdl-cell mdl-cell--11-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
          <div class="mdl-card__title">
          <div class="mdl-typography--display-1 mdl-typography--text-center">{{__('forgetPass.label1')}}</div>
          </div>
          <div class="mdl-card__supporting-text">
    <form method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}       
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('email') ? ' is-invalid is-dirty' : '' }} mdl-cell--12-col-desktop">
        <input class="mdl-textfield__input" type="text" id="emailId" name="email" value="" placeholder="johndoe@gmail.com" required>
        <label class="mdl-textfield__label" for="emaidId">{{__('login.label3')}}</label>
        <span class="mdl-textfield__error">{{ $errors->first('email') }}</span>
      </div>
          </div>
          <div class="mdl-card__actions">
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect" id="playBtn">
              {{__('forgetPass.label2')}}
          </button>  
        </div>
    </form>
        <div class="mdl-card__menu">
        <a href="{{route('register')}}" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">
            {{__('login.label6')}}
        </a>
        </div>
        </div>
    </section>