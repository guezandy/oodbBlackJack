<?php namespace App\Http\Controllers;

use Auth;
use DB;
use Input;
use Hash;
use Storage;
use App\Card;
use App\Hand;
use App\HandResult;
use App\StrategyResult;
use App\Strategy;


class MongoController extends Controller {

	public function strategy() {
//First create a strategy results
//use it's id as the session token for all the strategy instances
//Create all the strategy objects
//return the main view with session_token as a parm
//return runtime for insertions
		$strategyResult = new StrategyResult;
		$strategyResult->wins = 0;
		$strategyResult->losses = 0;
		$strategyResult->doubleCount = 0;
		$strategyResult->winlose = 0;
		$strategyResult->save();
		//return $strategyResult;

//$i = 18;
//$j =  2;
//return Input::get($i."v".$j);

//insert strategy time
		$time_start = microtime(true);
		for($i = 18; $i > 3; $i--) {
			for($j = 2; $j < 12; $j++) {
				$strategy = new Strategy;
				$strategy->session_token = $strategyResult->id;
				$strategy->card1 = $i;
				$strategy->dealer = $j;
				$strategy->move = Input::get($i."v".$j);
				//return $strategy;
				$strategy->save();
			}
		}
		$time_end = microtime(true);
		//return $time_end - $time_start;
		$strategyResult->insert_strategy = $time_end - $time_start;
		$strategyResult->save();
		//return $strategyResult->id;
		return view('simulation')->with('session_token', $strategyResult->id);
	}

	public function simulation() {
		return view('simulation');
	}

	public function simulate() {
		return view('simulate');
	}

	public function insertcards() {
//insert cards time
//number of decks
		$decks = Input::get('deck_count');
		$token = Input::get('session_token');
		//return $token;
		$strategy_result = StrategyResult::find($token);

		$suits = array('H','S','C','D');
		$time_start = microtime(true);
		for($i = 0; $i < $decks; $i++) {
			foreach($suits as $suit) {
				for($j=1; $j < 14; $j++) {
					$card = new Card;
					$card->session_token = $token;
					$card->suit = $suit;
					if($j == 1) {
						$card->value = 11;
					} else if($j > 10) {
						$card->value = 10;
					} else {
						$card->value = $j;
					}
					$card->save();
				}
			}
		}
		$time_stop = microtime(true);
		$strategy_result->insert_cards = $time_stop - $time_start;
		$strategy_result->save();
		return view('simulate')->with('session_token', $token);
	}

	public function play($id) {
		$strategy_result = StrategyResult::find($id);

		$cards = Card::where('session_token', '=', $id)->get();
		$arr = iterator_to_array($cards, true);
		shuffle($arr);

		$cards_dealt = 0;
		$hands = 0;

//time to play
		$start_time = microtime(true);
		while((count($arr) - $cards_dealt) > 10) {
			$hand = new Hand;
			$hand->session_token = $id;
			$hand->card1 = $arr[$cards_dealt];
			$cards_dealt++;
			$hand->hidden = $arr[$cards_dealt];
			$cards_dealt++;
			$hand->card2 = $arr[$cards_dealt];
			$cards_dealt++;
			$hand->visible = $arr[$cards_dealt];
			$cards_dealt++;
			$hands++;
			$hand->save();

			//here we have the hands:
			$hand_result = new HandResult;
			$hand_result->youstart = ($hand->card1->value + $hand->card2->value);
			$hand_result->dealerstart = $hand->visible->value;
			$hand_result->session_token = $id;
			$hand_result->move = 's';
			$move = '';

			//player hitting/staying
			$player_value = $hand_result->youstart;
			$dealer_value = $hand->visible->value;

			//return $id." ".$player_value. " ". $dealer_value;


			while(true) {
				//get strategy query to find the move
				//query: 
				//Strategy where session_token = token
				//Strategy where card1 = $hand_result->youstart
				//Strategy where dealer = $hand_result->dealerstart
				//return the appropriate move

				if($player_value > 18) {
					$player_test = 18;
				} else {
					$player_test = $player_value;
				} 
				$strategy = Strategy::where('session_token', '=', $id)->where('card1', '=', $player_test)->where('dealer', '=', $dealer_value)->get();
				//return $player_value. " ". $dealer_value. " ". $strategy . $strategy[0]->move;
				$move = $strategy[0]->move;
				if($move == 'h') {
					//get card
					$hand_result->move = 'h';
					$hand_result->didDouble = false;
					$new_card = $arr[$cards_dealt];
					$cards_dealt++;
					//add it to player value
					$player_value = $player_value + $new_card->value;
					//set the move in hand results
					//add another card and continue in the loop
					//return 'hit';
				} else if($move == 'd') {
					$hand_result->move = 'd';
					$hand_result->didDouble = true;
					$new_card = $arr[$cards_dealt];
					$cards_dealt++;
					//add another card and break;
					$player_value = $player_value + $new_card->value;
					//return 'double';
					break;
				} else { //stand
					break;
				}
			}
			$hand_result->youstop = $player_value;

			//dealer hitting
			$dealer_value = $hand->visible->value + $hand->hidden->value;
			while($dealer_value < 17) {
				//deal a card
				//delete card from array
				//add the value to dealer value
				$new_card = $arr[$cards_dealt];
				$cards_dealt++;
				$dealer_value = $dealer_value + $new_card->value;
			}
			$hand_result->dealerstop = $dealer_value;


			//get the results
			$result = '';
			if($player_value > 21) {
				$result = 'l';
			} else if($dealer_value > 21) {
				$result = 'w';
			} else if($dealer_value ==  $player_value) {
				$result = 'p';
			} else if($player_value > $dealer_value) {
				$result = 'w';
			} else {
				$result = 'l';
			}

			$hand_result->results = $result;
			$hand_result->save();
			//return $player_value . " " . $dealer_value . " ". $result;
		}
		$end_time = microtime(true);
		$strategy_result->simulation = $end_time - $start_time;
		$all_results = HandResult::where('session_token', '=', $id)->get();

		$wins = HandResult::where('session_token', '=', $id)->where('results','=','w')->get();
		$losses = HandResult::where('session_token', '=', $id)->where('results','=','l')->get();
		$pushes = HandResult::where('session_token', '=', $id)->where('results','=','p')->get();
		$win_double = HandResult::where('session_token', '=', $id)->where('results','=','w')->where('didDouble','=',1)->get();
		$all_double= HandResult::where('session_token', '=', $id)->where('didDouble','=',1)->get();
		$strategy_result->wins = count($wins); //all wins
		$strategy_result->losses = count($losses); //all losses
		$strategy_result->pushes = count($pushes); //all pushes
		$strategy_result->doubleCount = count($win_double); //all doubles
		$strategy_result->random = count($all_double) - count($win_double); //doubles lost
		$strategy_result->aggregate_wins = 2*(count($win_double) - $strategy_result->random) + count($wins);
		$strategy_result->winlose = $strategy_result->aggregate_wins / $strategy_result->losses;
		//return $wins;
		$strategy_result->hands = count($all_results);
		$strategy_result->save();

		$strategy_result = StrategyResult::find($id);
		return view('results')->with('all_results', $all_results)->with('strategy_result', $strategy_result);
		return $all_results;
	}

	public function results() {
		return view('results');
	}

}
