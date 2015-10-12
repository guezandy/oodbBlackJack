<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StrategyResult extends Model {
    protected $table = 'strategy_results';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['wins', 'losses', 'pushes', 'aggregate_wins', 'doubleCount', 'hands',
                          'winlose', 'random', 'insert_cards', 'insert_strategy',
                           'simulation', 'id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
