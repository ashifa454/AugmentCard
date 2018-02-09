<!doctype html>
<html lang="en">
  @include('components.headers.head')
  <style>
    .demo-ribbon{
      height:68vh;
    }
    .social-button{
      text-align: center;
      letter-spacing: 1px;
    }
  </style>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      @include('components.headers.mainHeader')
      @Auth
            @include('components.headers.aside')
      @endAuth
      <div class="android-content mdl-layout__content">
          <div class="demo-ribbon" style="background:url('https://dapore.files.wordpress.com/2009/10/landscape298.jpg');background-size:cover;background-position:center"></div>
            <div class="demo-main android-more-section">
            @include('components.mainComponents.loginCard')
            </div>
        @include('components.footer.footer')
      </div>
    </div>
    <script src="https://getmdl.io/material.min.js"></script>
  </body>
</html>