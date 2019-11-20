
<style>
 
.jumbotron {
  background-image: url("../../../photo/banner.jpg");
  background-attachment: fixed;
  background-size: auto;
  color: #fff;
}

.jumbotron-fluid {
  background-color: #f4511e; /* Orange */
  color: #ffffff;
  background-image: 
}
.d-flex .flex-column{
margin-top: 0px;
}
  </style>




<!-- 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top"> -->
<nav class="navbar  navbar-expand-sm sticky-top" style="background-color: #3498db;">
 
  <a class="navbar-brand" href="/">
   <!--  <img src="" alt="logo" style="width:40px;"> -->
    <h2>Nepal Electronic</h3></a>

<ul class="nav justify-content-center">
     <li class="{{ Request::is('/') ? "active" : "" }}">
      <a class="nav-link active" href="/" ><h3 style="color: black;">Home</h3></a>
    </li>

    <li class="{{ Request::is('services') ? "active" : "" }}">
      <a  class="nav-link active" href="/services"  style="color: black;"><h3 style="color: black;">Services</h3></a>
    </li>

     <li class="{{ Request::is('about') ? "active" : "" }}">
      <a  class="nav-link active" href="/complains" style="color: black;"><h3 style="color: black;">Register Your Complain</h3></a>
    </li>

    <li class="{{ Request::is('about') ? "active" : "" }}">
     <a  class="nav-link active" href="/notices" style="color: black;"><h3 style="color: black;">Notices & Events</h3></a>
   </li>

      <li class="{{ Request::is('contact') ? "active" : "" }}">
        <a class="nav-link active" href="/contact" style="color: black;"><h3 style="color: black;">Contact</h3></a>
      </li>
<!--
      <form class="navbar-form nav justify-content-end" action="/action_page.php">
  <div class="input-group">

    </div>
  </div>
</form> -->
 </ul>
<ul class="nav justify-content-end">

        @if (Auth::check())

        <li>
          <a href="{{ route('complain.index') }}" > {{ Auth::user()->name }}</a>

        </li>

        @else





        @endif


    </li>
  </ul>
</nav>
<style type="text/css">
html {
  scroll-behavior: smooth;
}


nav {
  box-shadow: 1px 2px 2px 2px;
}

.jumbotron {
  background-image: url("../../../photo/banner.jpg");
  background-attachment: fixed;
  background-size: auto;
  color: #fff;
}

section .tambahan1 {
  background-color: #3498db;
}

i {
  color: #3498db;
}

.contact {
  text-decoration: none;
}
  
  .navbar {
  font-family: Montserrat, sans-serif;

  
}
.navbar {
  margin-bottom: 0;
  background-color: transparent;
  z-index: 9999;
  border: 0;
  font-size: 8px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 1px;
  border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
  color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color:transparent;
  background-color:red;
}


</style>

  <script src="public/js/jquery.js"></script>
  <script type="text/javascript">
$('.navbar').on('click', 'li', function()){
  $('.nabbar li.active').removeClass('active');
  $(this).addClass('active');

});
  </script>
</script>





<!--
      </ul>
    </div>/.navbar-collapse
  </div><!-- /.container-fluid -->
<!-- </nav> -->
