<div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-card mdl-shadow--2dp">
    <div class="mdl-card__media">
      <img src="{{asset('assets/BASE1.jpeg')}}">
    </div>
    <div class="mdl-card__title">
       <h4 class="mdl-card__title-text">Enter Mobile Number Whom You wanna Send?</h4>
    </div>
    <div class="mdl-card__supporting-text">  
      <form action="{{URL::to('generateOrder')}}" method="POST">
        {{ csrf_field() }}
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="name" required>
                <label class="mdl-textfield__label" for="sample4">Name</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
        </div><br/>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="mobile" required>
                <label class="mdl-textfield__label" for="sample4">Receiver Mobile Number</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
    </div>
    <div class="mdl-card__actions">
       <button class="mdl-button mdl-js-button mdl-typography--text-uppercase">
        Send
         <i class="material-icons">chevron_right</i>
       </button>
       <!--<a class="mdl-button mdl-js-button mdl-typography--text-uppercase">
            Send a Physical Card
             <i class="material-icons">chevron_right</i>
           </a>!-->
    </div>
  </form>
  </div>
