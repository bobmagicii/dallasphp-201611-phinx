<?php

use Phinx\Migration\AbstractMigration;

class RemoveIndexOnEnabled
extends AbstractMigration {

	public function
	Up() {

		$this
		->Table('UserAccounts')
		->RemoveIndex(['Enabled'])
		->Save();

		return;
	}

	public function
	Down() {

		$this
		->Table('UserAccounts')
		->AddIndex(['Enabled'])
		->Save();

		return;
	}

}
