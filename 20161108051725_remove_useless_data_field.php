<?php

use Phinx\Migration\AbstractMigration;

class RemoveUselessDataField
extends AbstractMigration {

	public function
	Up() {

		$this
		->Table('UserAccounts')
		->RemoveColumn('UselessData')
		->Save();

		return;
	}

	public function
	Down() {

		$this
		->Table('UserAccounts')
		->AddColumn('UselessData','string', [ 'after' => 'Enabled' ])
		->Save();

		return;
	}

}
