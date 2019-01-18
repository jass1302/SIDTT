<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@if(count($errors)>0)
<div>
<script>
			
			toastr.options.progressBar=true;
			@foreach($errors->all() as $error)
			toastr.error("{!!$error!!}"); 
			@endforeach
</script>	
</div>
@endif
