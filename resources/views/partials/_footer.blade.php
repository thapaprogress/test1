<button id="buttonScrollTop" type="button" class="btn btn-danger">
<span class="glyphicon glyphicon-chevron-up"></span>
</button>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('public/user/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('public/user/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>



<script>
$(document).ready(function () {
var scrollTop = $('#buttonScrollTop');

$(window).scroll(function() {
if ($(window).scrollTop() > 250) {
scrollTop.addClass('show');
} else {
scrollTop.removeClass('show');
}
});

scrollTop.on('click', function(e) {
e.preventDefault();
$('html, body').animate({scrollTop:0}, '250');
});
})
</script>


<style>
#buttonScrollTop{
border-radius: 50%;
padding: 15px 20px;
right: 30px;
bottom:50px;
position:fixed;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
display: none;
}
#buttonScrollTop:active{
outline: none;
}
.show{
display: block!important;
}
footer.glyphicon {
font-size: 20px;
margin-bottom: 20px;
color: #f4511e;
}
</style>
<footer class="container-fluids text-center">
<a href="#myPage" title=" To Top">

</a>
<p>Nepal Electronic Center</p>
<br>
<a href="https://www.nepalelectroniccenter.com">www.nepalelectroniccenter.com</a></p>
Rights Reserved</p>
@if (Auth::check())
@else
<a href="{{ route('login') }}" >ERP Login</a>
@endif
</footer>

<!-- Button Scroll Top -->


<style type="text/css">
.container-fluids{
background-color: black;
}
.container{

width: 100%;
}
</style>








{{ Html::style('js/jquery.js') }}
{{ Html::style('js/bootstrap.min.js') }}
{{ Html::style('js/wow.min.js') }}