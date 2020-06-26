<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    {!! Html::style('yogalife/fonts/icomoon/style.css') !!}

    {!! Html::style('yogalife/css/bootstrap.min.css') !!}
    {!! Html::style('yogalife/css/magnific-popup.css') !!}
    {!! Html::style('yogalife/css/jquery-ui.css') !!}
    {!! Html::style('yogalife/css/owl.carousel.min.css') !!}
    {!! Html::style('yogalife/css/owl.theme.default.min.css') !!}
    {!! Html::style('yogalife/css/bootstrap-datepicker.css') !!}
    {!! Html::style('yogalife/yogalife/css/animate.css') !!}
    
    {!! Html::style('https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css') !!}
    
    
    
    {!! Html::style('fonts/flaticon/font/flaticon.css') !!}
  
    {!! Html::style('yogalife/css/aos.css') !!}

    {!! Html::style('yogalife/css/style.css') !!}
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">Yogalife</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="{{route('index.web')}}">Inicio</a>
                      </li>
                      <li class="has-children">
                        <a href="{{route('program.web')}}">Clases de yoga</a>
                        {{--  <ul class="dropdown arrow-top">
                          <li><a href="classes.html">Yoga Dance</a></li>
                          <li><a href="classes.html">Bare Workout</a></li>
                          <li><a href="classes.html">Peace of Mind</a></li>
                          <li class="has-children">
                            <a href="classes.html">More</a>
                            <ul class="dropdown">
                              <li><a href="classes.html">Yoga Dance</a></li>
                              <li><a href="classes.html">Bare Workout</a></li>
                              <li><a href="classes.html">Peace of Mind</a></li>
                              
                            </ul>
                          </li>

                        </ul>  --}}
                      </li>
                      {{--  <li><a href="events.html">Events</a></li>
                      <li><a href="about.html">About Studio</a></li>
                      <li><a href="contact.html">Contact</a></li>  --}}
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    @yield('content')

    
    <footer class="site-footer">
      {{--  <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
            <p><a href="#" class="btn btn-primary pill text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Approach</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Classes</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Ministries</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Yoga for Health</a></li>
                    <li><a href="#">Yoga for Resilience</a></li>
                    <li><a href="#">Yoga Class</a></li>
                    <li><a href="#">Meditation</a></li>
                    <li><a href="#">Mind Balance</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>  --}}
    </footer>
  </div>

  {!! Html::script('yogalife/js/jquery-3.3.1.min.js') !!}
  {!! Html::script('yogalife/js/jquery-migrate-3.0.1.min.js') !!}
  {!! Html::script('yogalife/js/jquery-ui.js') !!}
  {!! Html::script('yogalife/js/popper.min.js') !!}
  {!! Html::script('yogalife/js/bootstrap.min.js') !!}
  {!! Html::script('yogalife/js/owl.carousel.min.js') !!}
  {!! Html::script('yogalife/js/jquery.stellar.min.js') !!}
  {!! Html::script('yogalife/js/jquery.countdown.min.js') !!}
  {!! Html::script('yogalife/js/jquery.magnific-popup.min.js') !!}
  {!! Html::script('yogalife/js/bootstrap-datepicker.min.js') !!}
  {!! Html::script('yogalife/js/aos.js') !!}

  
  {!! Html::script('yogalife/js/mediaelement-and-player.min.js') !!}

  {!! Html::script('yogalife/js/main.js') !!}
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>