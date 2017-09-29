@if(!$errors->isEmpty())
   <div id="card-alert" class="card red">
     <div class="card-content white-text">
       <p><string class="mdi-alert-error">Oopps!..</strong>Se detectaron errores</p>
       	<ul>
       	@foreach($errors->all() as $error)
       	<li>
       		{{$error}}
       	</li>
       	@endforeach
       	</ul>
     </div>
     <button type="button" class="close white-texalert" aria-label="Close">
       <span aria-hidden="true">×</span>
     </button>
 </div>
@endif