@extends('Ngo_org.main')

@section('content')




<div class="jumbotron">
    <div class="container-fluid">
      



        <div class="row">
          <div class="col-lg-6" >
              <h5 id="dm">

                </h5>
              <img src="{{$post->img}}" height="300PX" width="300px">
              <h2>AMOUNT REQUIRED: {{$post->amount_req}}</h2>
              <h2>AMOUNT RAISED:{{$post->amount_raised}}</h2>
          </div>
          <div class="col-lg-6">
              <h1>{{$post->title}}</h1>
              <p>{{$post->body}}</p>
          </div>
        </div>
      </div>
      
 
       
</div>
<br>


<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button "  
data-href="<?php echo 'http://www.goodwill.com' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" 
data-layout="button_count" style="height:150px;width:300px">
</div>

</div>
<!---->
<script
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
      if(this.readyState==4&& this.status==200){
        document.getElementById('dm').innerHTML=this.responseText;
        console.log(this.responseText);
      }
  };


xhttp.open("GET", 'http://127.0.0.1:8080/linear_regression/load.php?user_type=customer&location=lahore&category=medical&desc=450&product=yes&amt=10000', true);
xhttp.send();

console.log('http://127.0.0.1:8080/linear_regression/load.php?user_type=customer&location=lahore&category=medical&desc=450&product=yes&amt=10000');
</script>


@endsection