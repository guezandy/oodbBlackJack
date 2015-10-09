<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model {
    protected $table = 'cards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['value', 'suit', 'session_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
}
