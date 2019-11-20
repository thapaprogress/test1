@extends('main')

@section('title', '| Contact')

@section('content')

<br>
<br>
        
                <h1>Contact Me</h1>
                @if(isset($message))
                <div class="alert alert-success">
                <strong>Thankyou!</strong> {{$message}}
                </div>
                @endif
                <hr>
                <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}

                     
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our customers!</em></p>

  <div class="row test">
    <div class="col-md-4">
      <p> Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>TEKU, Kathmandu</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 01-4222622</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: net.rcpvtltd@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
              <label name="subject">Name:</label>
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
           <label name="email">Email:</label>
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
       <label name="message">Message:</label>
      <textarea class="form-control" id="comments" name="message" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" value="send message">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

                    <!-- <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>
        </div> -->

        <!-- Image of location/map -->
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Nepal%20Electronics%20Technicians%20Research&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://usave.co.uk">usave</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
@endsection
