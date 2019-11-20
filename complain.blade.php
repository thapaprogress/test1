@extends('main')

@section('title', '| Help & Support')

@section('content')
<style type="text/css">
  
  .carousel{
        height: 100px;
        width: 100%;

      }
      .corousel-inner{
        margin-top: 5px;

      }
      .form-group{
        background-color: #eee;
        padding: 3px;

      }
</style>

<br>

  

  @if(isset($message))
  <div class="alert alert-success">
  <strong>Thankyou!</strong> {{$message}}
  </div>
  @endif
  <div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Register Your Electronics Complain</h3>
      </div>
      <div class="card-body">
     
      <div class="card-body">
  <form action="/complains" class="needs-validation" novalidate method="POST" style="margin-left: 0px; padding: 4px;">
      {{ csrf_field() }}
    <div class="form-group">
      <label for="uname"><h3>Fullname*</h3></label>
      <input type="text" class="form-control"  placeholder="Enter username" name="name" style="padding: 4px; font-size: 15px;">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname"><h3>Product*</h3></label>
      <input type="text" class="form-control"  placeholder="E.G Samsung T.V 4k UHD" name="product" style="padding: 4px; font-size: 15px;">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname"><h3>Model Number</h3></label>
      <input type="text" class="form-control"  placeholder="E.G. Q900 " name="model" style="padding: 4px; font-size: 15px;" >

    </div>


    <div class="form-group">
      <label for="uname"><h3>Phone Number*</h3></label>
      <input type="text" class="form-control"  placeholder="Enter Your Contact Number" name="phone" style="padding: 4px; font-size: 15px;">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname"><h3>E-mail address</h3></label>
      <input type="text" class="form-control"  placeholder="Enter Your Email Address" name="email" style="padding: 4px; font-size: 15px;">

    </div>

    <div class="form-group">
      <label for="uname"><h3>Complain*</h3></label>
      <textarea class="form-control"  placeholder="Enter Your Complain" name="complain" style="padding: 4px; font-size: 15px;"></textarea>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <br><br>
</div>
</div>
</div>
</div>
</div>
<br>

<div class="jumbotron jumbotron-fluid jumbotron-fluid-center">

  <h2 style="color:white">NEPAL ELECTRONIC TECHNICIAN RESEARCH CENTER PVT.LTD</h2>
     <p style="color: white">We specialize in blablabla</p>
  </div>
</div>
<!-- Contact -->
  <section style="padding: 50px;" class="contact">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-4">
          <h2>Contact Information</h2>
          <p><i class="fas fa-home"></i> Teku., kathmandu.</p>
          <p><i class="fas fa-envelope-open-text"></i> Email: net.rcpvtltd@gmail.com</p>
          <p><i class="fas fa-phone"></i> Phone: 01-4222622</p>
        </div>
        <div class="col-md-4">
          <h2>Social Media</h2>
          <p><a href="https://www.instagram.com/aramadhan009/"><i class="fab fa-instagram fa-2x"></i> Instagram</a></p>
          <p><a href="https://www.facebook.com/ahmadramadhan009"><i class="fab fa-facebook-square fa-2x"></i> Facebook</a></p>
          <p><a href="https://www.youtube.com/channel/UC5Ri2fjuAp_HFPpL5W7nSnA"><i class="fab fa-youtube-square fa-2x"></i> Youtube</a></p>
        </div>
      </div>
    </div>
  </section>



<style>
@import url('https://fonts.googleapis.com/css?family=Numans') ;

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}


.card{
height: auto;
margin-top: auto;
margin-bottom: auto;
width: 100%;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}


</style>


<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>
@endsection
