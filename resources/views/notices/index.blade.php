@extends('main')

@section('title', '| Notices')

@section('content')



<br>

<div class="jumbotron jumbotron-fluid">
  <div class="container-fluid">
    <h2>Latest Post and Events</h2>
    <p>Events Happenning Now.</p>
  </div>
</div>
<hr>
<br>


<section style="background-color: #2c3e50; padding: 100px;">
     <h1 style="color:white;">Notices and Events</h>
            
            <br>
            <div class="card" style="width:400px">
              <h1 style="color:white;">@foreach ($notices as $notice)</h1>
  <img class="card-img-top" src="{{ asset('images/'.$notice->img) }}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"> <h3 style="color:white;">TITLE: {{ $notice->title }}</h3></h4>
    <p class="card-text">          <b style="color:white;"> Posted at: {{date('M j, Y', strtotime($notice->created_at)) }} </b>
      <hr>
                                      @foreach($descriptions as $description)
                  
                                      @if($notice->id == $description->notice_id)
        
           <h3 style="color:white;"><i class="far fa-check-square"></i>{{ $description->body }}</h3></p>

                                   @endif
     
                                   @endforeach 
          <br>
          <hr>
                                    @endforeach
         <br>
         
    
  </div>
</div>
             
          
         
                    
             
     
        
  
   
  </section>
 
   <style>
.logo {
  font-size: 200px;
}
@media screen and (max-width: 768px) {
  .col-sm-4 {
    text-align: center;
    margin: 25px 0;
  }
    .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .containers{
    text-align: center;
    background-position: center;
  }
  .col{
     text-align: center;
    margin: 25px 0;
    padding-bottom: 5px;
    margin-bottom: 2px;

  }
  .col img{
    position: right;
    text-align: right;
  }
  .card{
    width: 100%;
  }
}
</style>

<hr>
<br>

 <div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company and Its Management.</h2>
      <h4>Electronic Service And Information.
      <p> Our comprehensive range of products provides users with solutions for test and measurement 
        applications within their respective industries. Models include decade boxes, electrical calibrators, digital multimeters, process calibrators, pressure testing 
        instruments and calibration software. In addition we manufacture customised multifunction test benches, 
        and design and supply turnkey calibration labs, electrical and instrument workshops, and engineer training centres..
<br>
Quality is an integral part of our company philosophy. In addition to building accurate and durable test instruments we provide extensive technical support. We focus on establishing strong business relationships based on 
customer satisfaction and commitment to providing quality products and services. This has given us a valuable reputation with organisations worldwide, and is one reason for our continued success in international markets. 
We have a global distribution network and are represented by companies with strong technical capabilities and skilled engineers. Time Electronics Ltd is accredited to ISO 9001:2008.
      </p></h4>
      <button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>
<br>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span> 
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2>
      <h4><strong>MISSION:</strong> <br>
      Nepal Electronic Technician Research Center PVT.LTD. is dedicated to providing the highest quality electrical services at the fairest price to commercial sites throughout Connecticut and Massachusetts. Our team of highly skilled electricians will work within the local, 
        state, and OSHA guidelines to see your project through from start to finish.</h4> 
        <br>
      <p><strong>VISION:</strong> 
        <br>
       <h4> We put hard work, attention to detail, and determination in each and every project we complete at NETRC.
        We provide our customers with the innovative ideas, appropriate equipment and up-to-date technologies in order to complete their project successfully, on-time, and within budget.</p>
         </h4><br>
       <p><strong>VALUE</strong>
        <br>


<h4><li>Safety</li>
At ECI, safety is our primary focus.  Audits are performed on a regular basis and every employee completes a safety training program.  Our track record is something we take seriously every day, as evidenced by our .79 MOD.
<li>Quality</li>
Every project ECI undertakes is completed by our team of highly skilled electricians with the best equipment and knowledge available. We strive to exceed our customers’ expectations and appreciate their repeat business and referrals.
<li>Customer Service</li>
Our customers are critical to us. From implementation to conclusion, we will work alongside our customers to ensure that their vision is being delivered by our team.
<li>Teamwork</li>
Our experienced team consists of over 100 professionally licensed and registered apprentice electricians with more than 25 skilled managers and support staff.  We are qualified and equipped to handle the challenges and complexities of any size job.
</h4>
    </div>
  </div>
</div>
<br>
</div>
</div>
</div>
</div>





  @endsection
