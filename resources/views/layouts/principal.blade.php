<!DOCTYPE html>
<html>
{!!Html::style('vendor/css/app.css')!!}
{!!Html::style('vendor/css/main.css')!!}
{!!Html::style('vendor/css/superposiciondivs.css')!!}
{!!Html::style('vendor/css/styles.min.css')!!}

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


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