<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StrategyResult extends Model {
    protected $table = 'strategy_results';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['wins', 'losses', 'doubleCount',
                          'winlose', 'random'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
