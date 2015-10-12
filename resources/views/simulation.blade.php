@extends('app')

@section('content')
<div class="container">
<div class="card">
		<div class="card-header">
	        <h2>Lets run the analysis <small>
	        	@if($session_token != NULL)
	        		Our current Session Token is: {{$session_token}}
	        	@else
	        		No session token
	        	@endif
	        </small></h2>
		</div>
		<div class="card-body card-padding"> 
			<div class="row">
				<p>Enter SESSION TOKEN AND Select Number of Decks</p>
				<div class="col-sm-3">	                
			    {!! Form::open(array('files' => TRUE, 'action' => 'BlackJackController@insertcards')) !!}
				<div class="">
				  {!! csrf_field() !!}
				</div>
  				{!! Form::text('session_token', null, array('placeholder' => $session_token)) !!}
				{!! Form::select('deck_count', array('1' => '1', '10' => '10', '100' =>'100', '1000' =>'1000', '10000' => '10000'), array('placeholder' => '1')) !!}
	            </div>
	        </div>
	        <br>
	        <div class="row">
	        	<div class="col-sm-2">
	    	 	{!! Form::submit('Insert in SQL') !!}
	    	 	{!! Form::close() !!}
		    	</div>
		    	<div class="col-sm-2">
		    		<p>RUNTIME: </p>
		    	</div>
		    </div>
		    <br>
		    <div class="row">
	        	<div class="col-sm-2">
		    		<a class="btn btn-default text-center" href="">Insert Decks Mongo</a>
		    	</div>
		    	<div class="col-sm-2">
		    		<p>RUNTIME: </p>
		    	</div>
		    </div>
		</div>
	</div>
	</div>
@endsection