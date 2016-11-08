<?php

use Phinx\Migration\AbstractMigration;

class RenameUserTable
extends AbstractMigration {

	public function
	Up() {

		$this
		->Table('Users')
		->Rename('UserAccounts');

		return;
	}

	public function
	Down() {

		$this
		->Table('UserAccounts')
		->Rename('Users');

		return;
	}

}
