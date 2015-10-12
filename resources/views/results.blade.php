@extends('app')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-4">
	        <div class="card">
	            <div class="card-header">
	                <h2>Strategy Results<small>Blackjack results and runtime results</small></h2>
	            </div>
	            
	            <div class="table-responsive">
	                <table class="table table-hover">
	                    <tbody>
	                    	<tr>
	                    		<td>Hands:</td>
	                    		<td>{{$strategy_result->hands}}</td>
	                    	</tr>
	                        <tr>
	                            <td>Wins</td>
	                            <td>{{$strategy_result->wins}}</td>
	                        </tr>
	                        <tr>
	                            <td>Losses</td>
	                            <td>{{$strategy_result->losses}}</td>
	                        </tr>
	                        <tr>
	                            <td>Pushes</td>
	                            <td>{{$strategy_result->pushes}}</td>
	                        </tr>
	                        <tr>
	                            <td>Doubles win/loss</td>
	                            <td>{{$strategy_result->doubleCount}} / {{$strategy_result->random}}</td>
	                        </tr>
	                        <tr>
	                            <td>Aggregate Wins</td>
	                            <td>{{$strategy_result->aggregate_wins}}</td>
	                        </tr>
	                        <tr>
	                            <td>Win Loss</td>
	                            <td>{{$strategy_result->winlose}}</td>
	                        </tr>
	                        <tr>
	                            <td>Insert Cards</td>
	                            <td>{{$strategy_result->insert_cards}}</td>
	                        </tr>
	                        <tr>
	                            <td>Insert Strategy</td>
	                            <td>{{$strategy_result->insert_strategy}}</td>
	                        </tr>
	                        <tr>
	                            <td>Simulation</td>
	                            <td>{{$strategy_result->simulation}}</td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	        </div>
		</div>
		<div class="col-sm-8">
			<div class="card">
			    <div class="card-header">
			        <h2>Result of your strategy</h2>
			    </div>
			    
			    <div class="table-responsive">
			        <table class="table">
			            <thead>
			                <tr>
			                    <th>You Start</th>
			                    <th>Dealer Start</th>
			                    <th>Move</th>
			                    <th>You End</th>
			                    <th>Dealer End</th>
			                    <th>Result</th>
			                </tr>
			            </thead>
			            <tbody>
			            @foreach($all_results as $result)
			            	@if($result->results == 'p')
			                <tr class="info">
			                    <td>{{$result->youstart}}</td>
			                    <td>{{$result->dealerstart}}</td>
			                    <td>{{$result->move}}</td>
			                    <td>{{$result->youstop}}</td>
			                    <td>{{$result->dealerstop}}</td>
			                    <td>{{$result->results}}</td>
			                </tr>
			                @elseif ($result->results == 'w')
			                <tr class="success">
			                    <td>{{$result->youstart}}</td>
			                    <td>{{$result->dealerstart}}</td>
			                    <td>{{$result->move}}</td>
			                    <td>{{$result->youstop}}</td>
			                    <td>{{$result->dealerstop}}</td>
			                    <td>{{$result->results}}</td>
			                </tr>
			                @else
			                <tr class="danger">
			                    <td>{{$result->youstart}}</td>
			                    <td>{{$result->dealerstart}}</td>
			                    <td>{{$result->move}}</td>
			                    <td>{{$result->youstop}}</td>
			                    <td>{{$result->dealerstop}}</td>
			                    <td>{{$result->results}}</td>
			                </tr>
			                @endif

			              @endforeach  
			            </tbody>
			        </table>
			    </div>
			</div>
		</div>
	</div>
</div>
@endsection