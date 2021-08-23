@if ($message = Session::get('seccess'))
	<div class="alaert alert-success">
		<p>{{$message}}</p>
	</div>
@endif

@if ($message = Session::get('error')) 
	<div class="alaert alert-danger">
		<p>{{$message}}</p>
	</div>
@endif

@if ($message = Session::get('warning')) 
	<div class="alaert alert-warning">
		<p>{{$message}}</p>
	</div>
@endif

@if ($message = Session::get('info')) 
	<div class="alaert alert-info">
		<p>{{$message}}</p>
	</div>
@endif
