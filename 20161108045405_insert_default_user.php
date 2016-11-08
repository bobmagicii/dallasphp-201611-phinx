<?php

use Phinx\Migration\AbstractMigration;

class InsertDefaultUser
extends AbstractMigration {

	public function
	Up() {

		$Users = [
			[ 'Name' => 'bobmagicii', 'Email' => 'bob@zomg.local' ],
			[ 'Name' => 'dcousinope', 'Email' => 'dannehboh@zomg.local' ]
		];

		$this->Insert('UserAccounts', $Users);

		return;
	}

	public function
	Down() {

		$this->Execute('DELETE FROM UserAccounts WHERE Email LIKE "%@zomg.local";');

		return;
	}

}
