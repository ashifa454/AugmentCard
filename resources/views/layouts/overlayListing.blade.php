<!doctype html>
<html lang="{{ app()->getLocale() }}">
  @include('head/index')
  <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    #view-source2 {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 100px;
      z-index: 900;
    }
    .mdl-dialog{
      width:50% !important;
      
    }
    .mdl-dialog__content{
      padding:15px !important;
    }
    </style>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      @include('head/header')
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Choose an Overlay</div>
          <div class="android-card-container mdl-grid">
            @foreach($overlay as $item)
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
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="{{URL::to('complete/'.$item->id)}}">
                   Continue
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>          
            @endforeach
                <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                          <div class="mdl-card__media">
                            <img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX11787748.jpg">
                          </div>
                          <div class="mdl-card__title">
                             <h4 class="mdl-card__title-text">Add Your Overlay</h4>
                          </div>
                          <div class="mdl-card__supporting-text">
                            <span class="mdl-typography--font-light mdl-typography--subhead">
                              Your Emotions can only only be expressed by you, Upload Any Image or a Video to Overlay
                            </span>
                          </div>
                          <div class="mdl-card__actions">
                             <label for="video" class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase">
                               Upload
                               <i class="material-icons">file_upload</i>
                             </label>
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
   <!-- <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-color--blue-800" id="view-source">
        <i class="material-icons">videocam</i>
    </button>!-->
    <label for="video" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-color--blue-800" id="view-source2">
      <i class="material-icons">file_upload</i>
    </label>    
    <form style="visibility:hidden;" method="post" action="{{URL::to('/files/upload')}}" enctype="multipart/form-data">
      {{ csrf_field() }}      
        <input type="file" name="file" id="video" accept=".mp4"/> 
    </form>
      <dialog class="mdl-dialog">
        <h4 class="mdl-dialog__title">Recording</h4>
        <div class="mdl-dialog__content" id="video-preview">
            <video width="100%" height="400" id="VDPLAYER" >
            </video>
        <span id="remainingTime" class="android-section-title mdl-typography--font-light mdl-typography--subhead">
          
        </span>    
        </div>
        <div class="mdl-dialog__actions">
          <button type="button" class="mdl-button close">Clear</button>
        </div>
      </dialog>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="{{asset('assets/dialog-polyfill/dialog-polyfill.js')}}"></script>    
    <script src="https://unpkg.com/sweetalert2@7.11.0/dist/sweetalert2.all.js"></script>
    <script src="https://cdn.webrtc-experiment.com/MediaStreamRecorder.js"> </script>
    <script>
      document.querySelector('#video').addEventListener('change',(e)=>{
        var formData=new FormData();
        formData.append('userFile',document.querySelector('#video').files[0]);
        var xhr=new XMLHttpRequest();
        xhr.onprogress = function (e) {
          if (e.lengthComputable) {
              console.log(e.loaded+  " / " + e.total)
          }
      }
      xhr.onloadend = function (e) {
        if(e.currentTarget.status==200){
          swal({
            position: 'top-end',
            type:'success',
            title: 'Wolla',
            backdrop:true,
            confirmButtonText:'Continue',
            text:'Your Card has been Generated!'})
            .then((result)=>{
              if(result.value){
                window.location.href='/complete/'+e.currentTarget.response;
              }
            })
        }else{
          swal('Hello world!')
        }
      }
      xhr.open('POST','/files/upload');
      xhr.setRequestHeader('X-CSRF-TOKEN','{{ csrf_token() }}')      
      xhr.send(formData);
      })
/*        var dialog = document.querySelector('dialog');
        var showDialogButton = document.querySelector('#view-source');
        if (! dialog.showModal) {
          dialogPolyfill.registerDialog(dialog);
        }
        showDialogButton.addEventListener('click', function() {
          var mediaConstraints = {
            audio: true,
            video: true
        };
        this._startTime = undefined;
        navigator.getUserMedia(mediaConstraints, onMediaSuccess, onMediaError);
        function updateCountDown(){
          _video=document.getElementById('VDPLAYER');          
              if(!this._startTime) 
                this._startTime = _video.currentTime;
            var playedTime = _video.currentTime - this._startTime;
            if (playedTime >= 12) {
              document.querySelector('#remainingTime').innerText=playedTime;
              _video.stop();
            }
            else{
              document.querySelector('#remainingTime').innerText=playedTime;              
            }

        }
        function onMediaSuccess(stream) {
            var video=document.getElementById('VDPLAYER');     
            video.control=false;     
            video.duration=12;
            video.srcObject=stream;
            video.addEventListener('timeupdate',updateCountDown);
            video.play();
            dialog.showModal();
            var mediaRecorder = new MediaStreamRecorder(stream);
            mediaRecorder.mimeType = 'video/mp4';
            mediaRecorder.ondataavailable = function (blob) {

                this.stop();
                console.log("DONE")
                /*var file = new File([blob], 'msr-' + (new Date).toISOString().replace(/:|\./g, '-') + '.mp4', {
                  type: 'video/mp4'
                });
                var formData = new FormData();
                formData.append('userFile', file);
                var xhr=new XMLHttpRequest();
                xhr.onprogress = function (e) {
                  if (e.lengthComputable) {
                      console.log(e.loaded+  " / " + e.total)
                  }
              }
              xhr.onloadend = function (e) {
                if(e.currentTarget.status==200){
                  swal({
                    position: 'top-end',
                    type:'success',
                    title: 'Wolla',
                    confirmButtonText:'Continue',
                    text:'Your Card has been Generated!'})
                    .then((result)=>{
                      if(result.value){
                        window.location.href='/complete';
                      }
                    })
                }else{
                  swal('Hello world!')
                }
              }
              xhr.open('POST','http://127.0.0.1:8000/files/upload');
              xhr.setRequestHeader('X-CSRF-TOKEN','{{ csrf_token() }}')      
              xhr.send(formData);
            };
            mediaRecorder.start(12000);
        }
        function onMediaError(e) {
            console.error('media error', e);
        }
        });
        dialog.querySelector('.close').addEventListener('click', function() {
          dialog.close();
          mediaRecorder.stop();
        });
*/
      </script>
  </body>
</html>