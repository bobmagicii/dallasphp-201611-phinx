<?php

use Phinx\Migration\AbstractMigration;

class UserTableCreate
extends AbstractMigration {

	public function
	Change() {

		$this
		->Table('Users', ['id' => 'UserID'])
		->AddColumn('Name', 'string', ['limit' => 16])
		->AddColumn('Email', 'string', ['limit' => 64])
		->Create();

		$this
		->Table('DeleteMe', ['id' => 'LOL'])
		->AddColumn('HERP', 'string', ['limit' => 16])
		->AddColumn('DERP', 'string', ['limit' => 64])
		->Create();

		return;
	}

}


