<?php

class RobotController extends Controller {

	public function Robot()
	{
					
		$membres = Membres::all();

		return View::make('RobotView', array('membres' => $membres));
		
		
		
		//return View::make('RobotView');
	}

}