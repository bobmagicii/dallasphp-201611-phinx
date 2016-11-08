<?php

use Phinx\Migration\AbstractMigration;

class DropDeleteMeTable
extends AbstractMigration {

	public function
	Up() {

		$this->DropTable('DeleteMe');

		return;
	}

	public function
	Down() {

		$this
		->Table('DeleteMe', ['id' => false, 'primary_key' => 'LOL'])
		->AddColumn('LOL', 'integer', ['signed' => false])
		->AddColumn('HERP', 'string', ['limit' => 16])
		->AddColumn('DERP', 'string', ['limit' => 64])
		->Save();

		return;
	}

}
