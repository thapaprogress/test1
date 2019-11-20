@extends('main')

@section('title', '| Homepage')

@section('content')


<style type="text/css">


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
}
.card-body{
  height: 420px;
}
.thumbnail{
  height:280px;
  background-color: #eee;
}
</style>
<br>


   <h1>NEPAL ELECTRONIC RESEARCH CENTER</h1>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
 

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
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
        <h4>TEKU, KATHMANDU.</h4>
      
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

  <!-- We Are -->
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

  <!-- Tambahan2 -->

 
<div class="jumbotron jumbotron-fluid jumbotron-fluid-center">

  <h2 style="color:white">NEPAL ELECTRONIC TECHNICIAN RESEARCH CENTER PVT.LTD</h2>
  <p style="color: white">For All Electronic Repairment and Service.</p>
     <p style="color: white">Teku, Kathmandu.</p>
  </div>
</div>

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
          <h1>Why NETRC ?.</h1>
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
        <p>Panel Repairnment</p>
      </div>
    </div>

    <div class="item">
      <img src="../../../photo/ee.jpg" height="500px" alt="Chicago">
      <div class="carousel-caption">
        <h3>Nepal Electronic training center</h3>
        <p>Quality Product.</p>
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

          
  


  


<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-black">
  <h2 style="color: black;">Portfolio</h2><br>
  <h4 style="color: black;">Our events and Program</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../../../photo/1.3.jpg" alt="Paris" width="400" height="300">
        <p><strong>NETRC</strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../../../photo/event.jpg" alt="New York" width="400px" height="250px">
        <p><strong>NETRC</strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../../../photo/1.4.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>NETRC</strong></p>
        <p></p>
      </div>
    </div>
  </div><br>
  <hr>
  <!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2 style="color: black;">Our Environment and Management</h2><br>
  <h4 style="color: black;">What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../../../photo/123.jpg" alt="Paris" width="400" height="300">
        <p><strong>NETRC</strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../../../photo/1.5.jpg" alt="New York" width="400" height="300">
        <p><strong>NETRC</strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../../../photo/1.6.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>NETRC</strong></p>
        <p></p>
      </div>
    </div>
  </div>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../../../photo/1.8.jpg" alt="Paris" width="400" height="300">
        <p><strong>NETRC</strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../../../photo/ee.jpg" alt="New York" width="400" height="300">
        <p><strong>NETRC</strong></p>
        <p></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="../../../photo/g.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>NETRC</strong></p>
        <p></p>
      </div>
    </div>
  </div><br><br>
  </div>
</div>
</div>
</div>
</div>

         </section>

            <a name="team"></a>

            <section class="team">

                  <div class="container-fluidr">

                        <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s"><h2 >Our</h2></div>
                              <div class="col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s"><h1>Managing Directors</h1></div>
                        </div>

                        <div class="row members">

                             

                              <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-member">
                                         <img  class="img-fluid" src="../../../photo/12.jpg" alt="San Francisco" width="400" height="300" style="box-shadow: 1px 2px 4px 4px;">
                                        


                                    </div>
                                    <div class="team-title">
                                          <h5 >Martin Smith</h5>
                                          <span>Founder & CEO</span>
                                    </div>
                              </div>

                              <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                                          <div class="team-member">
                                             <img  class="img-fluid" src="../../../photo/1.8.jpg" alt="San Francisco" width="400" height="300" style="box-shadow: 1px 2px 4px 4px;" >

                                          </div>
                                          <div class="team-title">
                                                <h5 >John Doe</h5>
                                                <span >Co-founder</span>
                                          </div>
                                    </div>

                        </div>

                  </div>

            </section>
                                         
     




      
 <style>
 .team{
  width: 100%;
 }
.team-member, .team-img {
      position: relative;
      width:100%;
      margin: 6px;
      padding: 6px;
}

.team-img {
      background: grey;
      height: 350px;
      width: 100%;
}

.members {
      margin: 50px 0;
}

.team-title {
      margin: 20px 0;
}

.team-title h5 {
      font-size: 28px;
}

.team-title span {
      font-size: 20px;
}

.team-member {
      overflow: hidden;
}


/*.services {
      background: #2c3e50;
      
}*/

.service {
      margin: 15px 0;
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
