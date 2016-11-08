<?php

use Phinx\Migration\AbstractMigration;

class CreateIndexOnUserName
extends AbstractMigration {

	public function
	Up() {

		$this
		->Table('UserAccounts')
		->AddIndex(['Name'], ['unique'=>TRUE])
		->AddIndex(['Email'], ['unique'=>TRUE])
		->AddIndex(['Enabled'])
		->Save();

		return;
	}

	public function
	Down() {

		$this
		->Table('UserAccounts')
		->RemoveIndex(['Email'])
		->RemoveIndex(['Name'])
		->RemoveIndex(['Enabled'])
		->Save();

		return;
	}

}
