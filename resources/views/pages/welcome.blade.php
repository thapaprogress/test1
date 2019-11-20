@extends('main')

@section('title', '| Homepage')

@section('content')


<style type="text/css">

  .fakeimg {
    height: 490px;
    background: #aaa;
    
  }
img.full-width {
  width: 100%;
}
img.logo {
  width: 100px;
  height: 100px;
}

nav li {
  display: inline;
  margin-right: 20px;
  margin-left: 20px;
}


.container-fluidr{
   background-image: url("../../../photo/frame.png");

/*  background-size: relative;*/
  background-origin: relative;
  background-position: left ; margin-left: 20px;
  color: #fff;
  margin: 5px;
}
.card-body{
  height: 420px;
}
.thumbnail{
  height:290px;
  background-color: #eee;
}
#myCarousel{
  margin-top: 5px;
}
</style>

   <h1>NEPAL ELECTRONIC RESEARCH CENTER</h1>
   <br>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
 

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>The best place to find electronic service</span></h4>
      </div>
      <div class="item">
        <h4>"Experienced Technician and Quality products."<br><span>The Service Provided is Very Good.</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Low Price High Quality.</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section>
    <div class="jumbotron jumbotron-fluid mt-5">
      <div class="container text-center">
        <img src="../../../photo/logo.png" height="90" width="90">
        <h1 class="display-4">NEPAL ELECTRONIC TECHNICIAN RESEARCH CENTER</h1>
        <br>
        <h4>TEKU, KATHMANDU.</h4>
        <h4>Phone:01-4222622. Email:net.rctltd@gmail.com</h4>
      
      </div>
    </div>
  </section>
  <!-- End -->

  <!-- About -->
  <section style="padding-top: 100px; padding-bottom: 50px;" id="about">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img src="../../../photo/01.png" class="img-fluid">
        </div>
        <div class="col-6">
          <h1><b>About Us</b></h1>
          <h4>NEPAL ELECTRONICS TECHNICIAN RESEARCH CENTER PVT.LTD.</h4>
          <p>Our Company was Establish in 2019-04-17.
            This Company is based on Electronic Repairment and Electronic Technical Services and Classes.
            All Kind of Technical Knowledge are Provided and Employment Opportunity is Also Given.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End -->

  <!-- Imbuhan 1 -->
  <section class="tambahan1 pt-5" style="background-color: #3498db; padding-bottom: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h2>ALL ELECTRONIC ITEMS ARE REPAIRED AND MAINTAINED WITH REASONABLE PRICE AND SERVICE.</h2>
        
        </div>

        
        </div>
      </div>
    </div>
  </section>
  <!-- End -->

    <!-- Fitur -->
  <section style="background-color: #2c3e50; padding: 100px;">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img src="../../../photo/02.jpg" height="296" width="445" class="img-fluid">
        </div>
        <div class="col-6" style="color: #ecf0f1;">
          <br>
          <br>
          <h1>Why NETRC ?</h1>
          <h3>The Best Place To Find Electronic Service.</h3>
       

            <i class="far fa-check-square"></i> All Electronic Products Repair <br>
            <i class="far fa-check-square"></i> Home Service <br>
            <i class="far fa-check-square"></i> Reasonable Price <br>
            <i class="far fa-check-square"></i> Best Quality Products. <br>
            <i class="far fa-check-square"></i> Electronic Training Program and information.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End -->


  <!-- We Are -->
  

  <!-- Tambahan2 -->

 
<div class="jumbotron jumbotron-fluid jumbotron-fluid-center">

  <h2 style="color:white">NEPAL ELECTRONIC TECHNICIAN RESEARCH CENTER PVT.LTD</h2>
  <p style="color: white">For All Electronic Repairment and Service.</p>
     <p style="color: white">Teku, Kathmandu.</p>
  </div>
</div>

  <!-- End -->



    <section class="action">
    <div class="containerss">
      <div class="left-text hidden-xs">
        <h4 style="margin:4px;" >Research Lab and Information</h4>
        <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam.
          Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
      </div>
      <div class="right-image hidden-xs">
       <img src="../../../photo/lab1.jpg" class="img-fluid"></div>
    </div>
  </section>
  <style type="text/css">
.containerss{
  height: 435px;
}
.fakeimge{
  height: 250px;
}
  </style>

  <br>
  <br>

       <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Lab Work </h2>
      <h5>Pannel Bonding machine</h5>
      <div class="fakeimge"> <img src="../../../photo/lab3.jpg" class="img-fluid"></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>

<br>
<hr>
<h2>TV Repairnment </h2>
      <h5>Highly Experienced Technician</h5>
      <div class="fakeimge"> <img src="../../../photo/lab7.jpg" class="img-fluid"></div>
      <p>Some text about me in culpa qui of</p>
      <hr>
      <h2>Quality Service and Managment </h2>
      <h5>Friendly Environment</h5>
      <div class="fakeimge"> <img src="../../../photo/lab9.jpg" class="img-fluid"></div>
      <p>Some text about me in culpa qui of</p>


      <h3>OUR SERVICES</h3>
      <p>WE PROVIDE ALL KIND OF ELECTRONIC SERVICES</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Home Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Technical Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Research lab</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Quality Product</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg"> <img src="../../../photo/lab4.jpg" height="400" width="730" class="img-responsive"></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg"> <img src="../../../photo/lab5.jpg" height="400" width="730"class="img-responsive"></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

  <section style="padding-bottom: 50px;">
    <div class="container" style="padding-top: 80px;">
      <div class="row">
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-body">

              <i class="fas fa-atom fa-5x"></i>
              <h5 class="card-title">Responsive Management</h5>
              <br>
               <img src="../../../photo/1.2.jpg" class="img-fluid"> 
               <br>
              <p class="card-text"><br>We have one of the best management team, which helps to provide best management services and facilities
                offered by the company to users.
          </p>
            </div>
          </div>
        </div>




        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-body">
              <i class="fas fa-shopping-cart fa-5x"></i>
              <h5 class="card-title">Best Quality</h5>
              <br>
               <img src="../../../photo/1.4.jpg" class="img-fluid"> 
               <br>
              <p class="card-text"><br>We ensure that the custumer can have best quality product in a reasonable price and enjoy the service provided 
                by the company
                </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-body">
              <i class="fas fa-users fa-5x"></i>
              <h5 class="card-title">Explore With Team</h5>
              <br>
               <img src="../../../photo/12.jpg" class="img-fluid"> 
               <br>
              <p class="card-text"><br>We have the best technician to provide you our services.
                They are highly qualified and experienced in their technical field.
                .</p>
            </div>
          </div>
        </div>
      </div>
     
      </div>
    </div>
  </section>
  <!-- End -->
 <br>
 <br>
 <br>
 <BR>

   
 <a name="services"></a>

           <section class="services">

            <div class="container-fluids">

                  <div class="section-data">

                        <div class="row">
                          <section style="padding: 30px;" class="slider">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../../../photo/ss.jpg" alt="New York" height="500px">
      <div class="carousel-caption">
        <h3>Nepal Electronic </h3>
       <p>Quality Product.</p>

      </div>
    </div>

    <div class="item">
      <img src="../../../photo/ee.jpg" height="500px" alt="Chicago">
      <div class="carousel-caption">
        <h3>Nepal Electronic training center</h3>
                 <p>Panel Repairnment</p>
      </div>
    </div>

    <div class="item">
      <img src="../../../photo/vv.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>Nepal Electronic Center</h3>
        <p>Home Service Facilities</p>
      </div>
    </div>
  </div>



  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
  </div>
</section>

                        </div>

                        
                  </div>

            </div>

          
  


  
<div class="gallery">
    <div class="text-center">
      <h2>Gallery</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi,<br> dolores obcaecati ex aliquid, dolor provident </p>
    </div>
    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/1.3.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/1.4.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/1.5.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/1.6.jpg" alt="" class="img-responsive" />
          <figcaption>
           <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/1.7.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/1.8.jpg" alt="" class="img-responsive" />
          <figcaption>
          <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
    </div>
 


    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/lab10.jpg" alt="" class="img-responsive" />
          <figcaption>
           <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/lab11.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/lab12.jpg" alt="" class="img-responsive" />
          <figcaption>
          <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
    </div>
  

    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/lab13.jpg" alt="" class="img-responsive" />
          <figcaption>
           <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/lab14.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="../../../photo/lab18.jpg" alt="" class="img-responsive" />
          <figcaption>
          <h4>NETRC</h4>
            <p>Our enviroment and working technology</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>




         </section>

           <a name="team"></a>

            <section class="team">

                  <div class="container-fluid">

                        <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">03</div>
                              <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">Our team</div>
                        </div>

                        <div class="row members">

                              <div class="col-md-4"></div>

                              <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-member">
                                          <div class="team-img team-one"> </div>
                                    </div>
                                    <div class="team-title">
                                          <h5>Martin Smith</h5>
                                          <span>Founder & CEO</span>
                                    </div>
                              </div>

                              <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                                          <div class="team-member">
                                                <div class="team-img team-two"></div>
                                          </div>
                                          <div class="team-title">
                                                <h5>John Doe</h5>
                                                <span>Co-founder</span>
                                          </div>
                                    </div>

                        </div>

                  </div>

            </section>
            <!-- Contact -->
  <section style="padding: 50px;" class="contact" >
    <div class="container" style="background:#eee" >
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
 .col-md-4{
  height: 300px;
 }
 .services {
      background: #161616;
      margin-top: 5px;
}

.service {
      margin: 30px 0;
}

.icon ion-icon {
      font-size: 36px;
      color: #d3ae87;
}

.icon-title {
      font-size: 28px;
      margin-bottom: 4px;
      color: rgb(182, 182, 182);
      font-weight: lighter;
}

/*--------------- our team section starts  --------------- */

.team-member, .team-img {
      position: relative;
}

.team-img {
      background: grey;
      height: 340px;
}

.members {
      margin: 50px 0;
}

.team-title {
      margin: 20px 0;
}

.team-title h5 {
      font-size: 35px;
}

.team-title span {
      font-size: 25px;
}

.team-member {
      overflow: hidden;
}

.team-one {
      background: url("../../../photo/lab15.jpg") no-repeat 50% 50%;
      background-size: cover;
}

.team-two {
      background: url("../../../photo/lab16.jpg")(no-repeat 50% 50%;
      background-size: cover;
}

.icon ion-icon {
      font-size: 36px;
      color: #d3ae87;
}

.icon-title {
      font-size: 28px;
      margin-bottom: 4px;
      color: rgb(182, 182, 182);
      font-weight: lighter;
}

    
.carousel-inner img {
 /* -webkit-filter: grayscale(90%);*/
  filter: none; /* make all photos black and white */
  width: 100%; /* Set width to 100% */
  margin: auto;
}

.carousel-caption h3 {
  color: #fff !important;
}

@media (max-width: 600px) {
  .carousel-caption {
    display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
  }
 
  body {
    position: inherit;
  }
  .affix {
    top: 20px;
    z-index: 9999 !important;
  }
  div.col-sm-9 div {
    height: 150px;
    font-size: 28px;
  }
  #section1 {color: #fff; background-color: #1E88E5;}
  #section2 {color: #fff; background-color: #673ab7;}
  #section3 {color: #fff; background-color: #ff9800;}
  #section41 {color: #fff; background-color: #00bcd4;}
  #section42 {color: #fff; background-color: #009688;}

  @media screen and (max-width: 100%) {
    #section1, #section2, #section3, #section41, #section42  {
      margin-left: 50px;
    }
  



</style>


@stop 
