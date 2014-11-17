<?php

class MembreSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('membres')->delete();
		
		$membreUn = Membre::create(array(
			'name'         => 'Michel Dupond',
			'mail'         => 'michel.dupond@gmail.com',
			'address' => '12, allée de la pépinière, 67200 Strasbourg',
			'number' => '+33678653490',
			'password' => 'Laravel101'
		));
		
		$membreDeux = Membre::create(array(
			'name'         => 'Julie Duchene',
			'mail'         => 'julie.duchene@gmail.com',
			'address' => '42, rue de la Criée, 78400 Chatou',
			'number' => '+33656432367',
			'password' => 'Laravel101'
		));

		$membreTrois = Membre::create(array(
			'name'         => 'Matthieu Thomas',
			'mail'         => 'matthieu.thomas@gmail.com',
			'address' => '12 rue Vésale, 75005 Paris',
			'number' => '+33689674523',
			'password' => 'Laravel101'
		));
		
		$membreQuatre = Membre::create(array(
			'name'         => 'Pierre Hiraud',
			'mail'         => 'pierre.hiraud@gmail.com',
			'address' => '10 rue Carnot, 75001 Paris',
			'number' => '+33745678978',
			'password' => 'Laravel101'
		));
		
		$this->command->info('Les membres sont enregistrés !');
	
	}
}
