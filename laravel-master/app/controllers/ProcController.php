<?php

class ProcController extends Controller {

	public function Processor()
	{
					
		$composants = Composants::all();

		return View::make('ProcView', array('composants' => $composants));
		
		
		
		//return View::make('ProcView');
	}

}