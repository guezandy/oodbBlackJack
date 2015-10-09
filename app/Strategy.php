<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model {
    protected $table = 'strategy';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['dealer', 'card1', 'card2',
                          'move', 'session_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
