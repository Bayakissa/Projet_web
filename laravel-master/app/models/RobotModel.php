<?php


class RobotModel extends Eloquent {

	protected $fillable = array('brand', 'model', 'price');
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'composants';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}