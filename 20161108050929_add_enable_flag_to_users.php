<?php

use Phinx\Migration\AbstractMigration;

class AddEnableFlagToUsers
extends AbstractMigration {

	public function
	Up() {

		$this
		->Table('UserAccounts')
		->AddColumn('Enabled', 'integer', [ 'after'=> 'Email', 'default' => 1 ])
		->AddColumn('UselessData','string')
		->Save();

		return;
	}

	public function
	Down() {

		$this
		->Table('UserAccounts')
		->RemoveColumn('Enabled')
		->RemoveColumn('UselessData')
		->Save();

		return;
	}

}
