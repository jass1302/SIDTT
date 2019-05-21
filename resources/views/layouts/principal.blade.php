<!DOCTYPE html>
<html>
{!!Html::style('vendor/css/app.css')!!}
{!!Html::style('vendor/css/main.css')!!}
{!!Html::style('vendor/css/superposiciondivs.css')!!}
{!!Html::style('vendor/css/styles.min.css')!!}
{!!Html::script('vendor/js/jquery.js')!!}
<script src='https://www.google.com/recaptcha/api.js'></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script type="text/javascript" src="{{URL::asset('vendor/js/cruds.js')}}"></script>
<body onload="Menu();">  
  <div class="navbar">
      <div class="container">
        <a class="brand" href="">SIDTT</a>
        
<div class="brand-full">
                    <i> Sistema Interino de Desarrollo</i><br>
                    <i>de Trabajos Terminales</i>
                     </div> 
  </div>  
    </div>
      <div id="body">
        
            @yield('content')  
      
    </div>
<div class="footer fixed-bottom copyright">
Instituto Politécnico Nacional
</div>
<script type="text/javascript">
function Menu(){ 
var name=document.getElementById('PageN').name;
       document.getElementById(name).className+="active";
}
</script>
</body>

</html>