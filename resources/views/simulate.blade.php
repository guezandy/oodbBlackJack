@extends('app')

@section('content')
<div class="container">
	<div class="col-sm-4">
	<div class="card">
		<div class="card-header">
	        <h2>Run Simulation on Session {{$session_token}} <small>Click run to see your strategy in action</small></h2>
		</div>
		<div class="card-body card-padding">
			<a href="{{{ URL::route('play', ['id' => $session_token]) }}}" class="delete">RUN</a>
		</div>
	</div>
	</div>
</div>
@endsection