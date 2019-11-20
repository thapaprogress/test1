@extends('main')

@section('title', '| Services')

@section('content')


        
  <br>
  <style type="text/css">
   
    #tour{
      width: 100%;
    }
   /* .container{
      background-color: #2c3e50;
      width: 100%;
    }*/
      .carousel{
        height: 150px;
        width: 100%;

      }
      .corousel-inner{
        margin-top: 5px;

      }
      .p{
        color: black;

      }
      .rows{
        background-color: #eee;
      }
      .thumbnail{
        height: 510px;
        width: 400px;
        padding: 5px;
        margin-bottom: 10px;
        background-color: #eee;
      }
    
  </style>

  

   <h2 style="color:white;">What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <br>
        <h4 >"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4 >"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4 >"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
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


  <hr>
  <br>

    <h3 class="text-center">OUR Services</h3>
    <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
  
    
    <div class="rows text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../../photo/tvre.jpg" alt="Paris" width="400" height="400px">
          <hr>
          <p><strong>TV REPAIR</strong></p>
          <p>ALL KIND OF TV REPAIRMENT</p>
          <a href="/complains"><button class="btn" style="color: white; background-color: black" data-toggle="modal" data-target="#myModal">GIVE YOUR COMPLAIN</button> </a>
      
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../../photo/ffridge.jpg" alt="New York" width="400" height="300px">
          <hr>
          <p><strong>FRIDGE REPAIR</strong></p>
          <p>ALL KIND OF FRIDGE REPAIRMENT</p>
           <a href="/complains"><button class="btn" style="color: white; background-color: black" data-toggle="modal" data-target="#myModal">GIVE YOUR COMPLAIN</button> </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../../photo/wash1.png" alt="San Francisco" width="400" height="100px">
          <hr>
          <p><strong>WASHING MACHINE</strong></p>
          <p>ALL KIND OF WASHING MACHINE IS REPAIR</p>
            <a href="/complains"><button class="btn" style="color: white; background-color: black" data-toggle="modal" data-target="#myModal">GIVE YOUR COMPLAIN</button> </a>
        </div>
      </div>
    </div>
  </div>
  <br>

   <div class="rows text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../../photo/air.png" alt="Paris" width="400" height="400">
          <hr>
          <p><strong>AC</strong></p>
          <p>All KIND OF AC REPAIR</p>
            <a href="/complains"><button class="btn" style="color: white; background-color: black" data-toggle="modal" data-target="#myModal">GIVE YOUR COMPLAIN</button> </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../../photo/vaccum.jpg" alt="New York" width="400" height="400">
          <hr>
          <p><strong>VACCUM CLEANER</strong></p>
          <p>ALL KIND OF VACCUM REPAIR</p>
            <a href="/complains"><button class="btn" style="color: white; background-color: black" data-toggle="modal" data-target="#myModal">GIVE YOUR COMPLAIN</button> </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../../photo/deeep.png" alt="San Francisco" width="400" height="400">
          <hr>
          <p><strong>DE-FRIDGE</strong></p>
          <p>ALL KIND OF DE-FRIDGE REPAIR</p>
     <a href="/complains"><button class="btn" style="color: white; background-color: black" data-toggle="modal" data-target="#myModal">GIVE YOUR COMPLAIN</button> </a>
        </div>
      </div>
    </div>
  </div>
  <br>
   <div class="rows text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../../photo/oven.png" alt="Paris" width="400" height="400">
          <hr>
          <p><strong>MICROWAVE OVEN</strong></p>
          <p>ALL KIND OF MICROVEN IS REPAIR</p>
          <a href="/complains"><button class="btn" style="color: white; background-color: black" data-toggle="modal" data-target="#myModal">GIVE YOUR COMPLAIN</button> </a>>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../../photo/home.png" alt="New York" width="400" height="400">
          <hr>
          <p><strong>HOME APPLIANCE</strong></p>
          <p>ALL KIND OF HOME APPLIANCE</p>
            <a href="/complains"><button class="btn" style="color: white; background-color: black" data-toggle="modal" data-target="#myModal">GIVE YOUR COMPLAIN</button> </a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../../../photo/ledrep.jpg" alt="San Francisco" width="400" height="300">
          <hr>
          <p><strong>PANEL REPAIRNMENT</strong></p>
          <p>TV PANEL IS REPAIRED </p>
        <a href="/complains"><button class="btn" style="color: white; background-color: black" data-toggle="modal" data-target="#myModal">GIVE YOUR COMPLAIN</button> </a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <hr>
  <hr>



<!--   <h1>Our Services</h1>
  
    <br>
  </div>
  @foreach ($services as $service)
  <ul>
    <li>
    <h4> {{ $service->title }}</h4>
    <img src = "{{ asset('images/'.$service->img) }}" height="100px" width="100px">
      
      <ul>

          @foreach($descriptions as $description)
          @if($service->id == $description->service_id)
          <li>{{ $description->body }}</li>
          @endif
          @endforeach

      </ul>
    </li>
  </ul>
  @endforeach
<br> -->





  
  <section style="background-color: #2c3e50; padding: 100px;">
    
    <div class="container">
      
    
      <div class="row">
       
        <div class="col">
          
           <h1 style="color:white;">Our Services</h>
            <br>
          <h1 style="color:white;">@foreach ($services as $service)</h1>
          <img src = "{{ asset('images/'.$service->img) }}" height="296px" width="445px" class="img-fluid">
          
                    
          <h3 style="color:white;">{{ $service->title }}</h3>
          <br>
             
               
                   @foreach($descriptions as $description)
                   @if($service->id == $description->service_id)
               <h3 style="color:white;"><i class="far fa-check-square"></i>{{ $description->body }}</h3>
          
          
@endif

@endforeach
 
<br>
   @endforeach
   </div>
   </div>
 </div>
</section>
    @endsection
  



  
   

 




</body>








