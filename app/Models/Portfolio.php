<?php namespace MWD\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model {

	protected $table = 'portfolios';

	use SoftDeletes;

    protected $dates = ['deleted_at'];

}
