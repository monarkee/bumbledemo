<?php namespace Demo;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Monarkee\Bumble\Models\BumbleModel;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Traits\BumbleUserTrait;

class User extends BumbleModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, BumbleUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setFields()
	{
		return new Fieldset([
			new TextField('title')
		]);
	}

}
