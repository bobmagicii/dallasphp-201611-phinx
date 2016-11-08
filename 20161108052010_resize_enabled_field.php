<?php

use Phinx\Migration\AbstractMigration;

class ResizeEnabledField
extends AbstractMigration {

	public function
	Up() {

		$this
		->Table('UserAccounts')
		->ChangeColumn('Enabled', 'boolean', ['default'=>1])
		->Save();

		return;
	}

	public function
	Down() {

		$this
		->Table('UserAccounts')
		->ChangeColumn('Enabled','integer',['default'=>1])
		->Save();

		return;
	}

}
