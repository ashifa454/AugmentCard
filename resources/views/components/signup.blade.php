<!--    <section class="mdl-cell mdl-cell--9-col mdl-cell--12-col-mobile mdl-card mdl-shadow--2dp">
    <section class="section--center mdl-grid mdl-grid--no-spacing">
        <header class="section__play-btn mdl-cell mdl-cell--2-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-900 mdl-color-text--white">
        </header>
    <div class="mdl-card mdl-cell mdl-cell--10-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
      <div class="mdl-card__title">
            <div class="mdl-typography--display-1 mdl-typography--text-center">Register to Continue</div>
      </div>
      <div class="mdl-card__supporting-text">
    <form action="{{ route('login') }}" method="POST">
    {{ csrf_field() }}
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-desktop">
        <input class="mdl-textfield__input" type="text" name="name" id="name" value="" placeholder="John Doe">
        <label class="mdl-textfield__label" for="name">Full Name*</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-desktop">
        <input class="mdl-textfield__input" type="email" id="emailId" name="email" value="" placeholder="johndoe@gmail.com">
        <label class="mdl-textfield__label" for="emaidId">Your personal Email Address*</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-desktop">
    <input class="mdl-textfield__input" type="password" id="sample3" name="password" placeholder="Secret Password">
    <label class="mdl-textfield__label" for="sample3">Password*</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--12-col-desktop">
    <input class="mdl-textfield__input" type="password" id="sample3" name="password_confirmation" placeholder="Confirm Password">
    <label class="mdl-textfield__label" for="sample3">Repeat Password*</label>
  </div>
    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
        <input type="checkbox" id="checkbox-1" name="remember" class="mdl-checkbox__input" {{ old('remember') ? 'checked' : '' }}>
        <span class="mdl-checkbox__label">Remember Me</span>
    </label>
      </div>
      <div class="mdl-card__actions">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect" id="playBtn">
        SignUp
      </button>
    </form>  
    </div>

    <div class="mdl-card__menu">
    <a href="{{ route('login') }}" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">
        Login
    </a>
    </div>
    </div>
    </section>
    </section>!-->
    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <header id="siri-container" class="section__play-btn mdl-cell mdl-cell--1-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--red-500 mdl-color-text--white">
        </header>
            <div class="mdl-card mdl-cell mdl-cell--11-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
              <div class="mdl-card__title">
              <div class="mdl-typography--display-1 mdl-typography--text-center">{{__('signup.label1')}}</div>
              </div>
              <div class="mdl-card__supporting-text">
                    <form action="{{ route('register') }}" method="post">
                        {{ csrf_field() }}
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('name') ? ' is-invalid is-dirty' : '' }} mdl-cell--12-col-desktop">
            <input class="mdl-textfield__input" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="John Doe">
            <label class="mdl-textfield__label" for="name">{{__('signup.label2')}}</label>
            <span class="mdl-textfield__error">{{$errors->first('name') }}</span>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('email') ? ' is-invalid is-dirty' : '' }} mdl-cell--12-col-desktop">
            <input class="mdl-textfield__input" type="email" id="emailId" name="email" value="{{ old('email') }}" placeholder="johndoe@gmail.com">
            <label class="mdl-textfield__label" for="emaidId">{{__('signup.label3')}}</label>
            <span class="mdl-textfield__error">{{$errors->first('email') }}</span>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('password') ? 'is-invalid is-dirty' : '' }} mdl-cell--12-col-desktop">
            <input class="mdl-textfield__input" type="password" id="sample3" name="password" placeholder="{{__('signup.label4')}}">
            <label class="mdl-textfield__label" for="sample3">{{__('signup.label4')}}</label>
            <span class="mdl-textfield__error">{{$errors->first('password') }}</span>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('password') ? 'is-invalid is-dirty' : '' }} mdl-cell--12-col-desktop">
            <input class="mdl-textfield__input" type="password" id="sample3" name="password_confirmation" placeholder="{{__('signup.label5')}}">
            <label class="mdl-textfield__label" for="sample3">{{__('signup.label5')}}</label>
          </div>
          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
          <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
          <span class="mdl-checkbox__label">{{__('signup.label6')}}</span>
        </label>
              </div>
              <div class="mdl-card__actions">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--green-400" id="playBtn">
                  {{__('signup.label7')}}
              </button>
            </div>
            </form>
            <div class="mdl-card__menu">
            <a href="/login" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">
              {{__('login.label6')}}
            </a>
            </div>
            </div>
        </section>