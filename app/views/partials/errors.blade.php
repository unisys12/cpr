@if($errors->count()) 
<section class="error-panel">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</section>
@endif