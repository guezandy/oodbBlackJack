@extends('app')

@section('content')
<div class="container">
	<div class="card">
	    <div class="card-header">
	        <h2>Select your strategy <small>These rules will be followed as you play blackjack</small></h2>
	    </div>
	    <div class="card-body card-padding">
	    <div class="row">
	    	<div class="col-sm-1">Dealer->   You
	    	</div>
	    	@for($k = 2; $k < 12; $k++)
	    		<div class="col-sm-1">
	    		<p class="text-right">{{$k}}</p>
	    		</div>
	    	@endfor
	    </div>
	    {!! Form::open(array('files' => TRUE, 'action' => 'BlackJackController@strategy')) !!}
		<div class="">
		  {!! csrf_field() !!}
		</div>
		<div class="row">
			<div class="col-sm-1">18+</div>
				<div class="col-sm-1">{!! Form::select('18v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('18v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('18v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('18v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('18v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('18v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('18v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('18v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('18v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('18v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
		</div>
	    <div class="row">
			<div class="col-sm-1">17</div>
				<div class="col-sm-1">{!! Form::select('17v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('17v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('17v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('17v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('17v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('17v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('17v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('17v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('17v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('17v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">16</div>
				<div class="col-sm-1">{!! Form::select('16v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('16v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('16v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('16v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('16v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('16v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('16v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('16v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('16v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('16v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">15</div>
				<div class="col-sm-1">{!! Form::select('15v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('15v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('15v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('15v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('15v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('15v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('15v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('15v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('15v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('15v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">14</div>
				<div class="col-sm-1">{!! Form::select('14v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('14v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('14v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('14v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('14v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('14v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('14v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('14v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('14v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('14v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">13</div>
				<div class="col-sm-1">{!! Form::select('13v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('13v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('13v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('13v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('13v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('13v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('13v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('13v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('13v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('13v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
	    <div class="row">
			<div class="col-sm-1">12</div>
				<div class="col-sm-1">{!! Form::select('12v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('12v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('12v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('12v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('12v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 's')) !!}</div>
				<div class="col-sm-1">{!! Form::select('12v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('12v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('12v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('12v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('12v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">11</div>
				<div class="col-sm-1">{!! Form::select('11v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('11v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('11v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('11v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('11v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('11v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('11v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('11v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('11v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('11v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">10</div>
				<div class="col-sm-1">{!! Form::select('10v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('10v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('10v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('10v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('10v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('10v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('10v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('10v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('10v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('10v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">9</div>
				<div class="col-sm-1">{!! Form::select('9v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('9v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('9v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('9v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('9v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'd')) !!}</div>
				<div class="col-sm-1">{!! Form::select('9v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('9v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('9v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('9v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('9v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">8</div>
				<div class="col-sm-1">{!! Form::select('8v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('8v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('8v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('8v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('8v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('8v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('8v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('8v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('8v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('8v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">7</div>
				<div class="col-sm-1">{!! Form::select('7v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('7v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('7v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('7v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('7v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('7v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('7v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('7v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('7v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('7v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">6</div>
				<div class="col-sm-1">{!! Form::select('6v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('6v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('6v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('6v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('6v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('6v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('6v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('6v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('6v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('6v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">5</div>
				<div class="col-sm-1">{!! Form::select('5v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('5v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('5v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('5v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('5v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('5v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('5v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('5v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('5v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('5v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
		<div class="row">
			<div class="col-sm-1">4</div>
				<div class="col-sm-1">{!! Form::select('4v2', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('4v3', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('4v4', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('4v5', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('4v6', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('4v7', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('4v8', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('4v9', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('4v10', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
				<div class="col-sm-1">{!! Form::select('4v11', array('s' => 'Stand', 'd' => 'Double', 'h' =>'Hit'), array('placeholder' => 'h')) !!}</div>
		</div>
	    <br>
	    <div class="row">
	    	<!--<a class="btn btn-default text-center" href="{{url("submitStrategy")}}">Submit Strategy</a>-->
	    	 {!! Form::submit('Submit Strategy') !!}
	    </div>
	    </div>
	    {!! Form::close() !!}
	</div>

</div>
@endsection