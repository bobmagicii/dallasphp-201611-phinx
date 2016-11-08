<?php

use Phinx\Migration\AbstractMigration;

class CreateUserCommentsTable
extends AbstractMigration {

	public function
	Up() {

		$this->Execute(<<< LOL
CREATE TABLE `UserComments` (
	`CommentID` INT(11) UNSIGNED NOT NULL,
	`UserID` INT(11) NOT NULL,
	`Time` INT(10) UNSIGNED NOT NULL DEFAULT '0',
	`Message` TEXT NOT NULL,
	PRIMARY KEY (`CommentID`),
	INDEX `UserComments_UserAccounts` (`UserID`),
	CONSTRAINT `UserComments_UserAccounts` FOREIGN KEY (`UserID`) REFERENCES `UserAccounts` (`UserID`) ON UPDATE CASCADE ON DELETE CASCADE
)
COMMENT='things people said.'
ENGINE=InnoDB;
LOL
		);

		return;
	}

	public function
	Down() {

		$this->Execute(<<< LOL
DROP TABLE IF EXISTS UserComments;
LOL
		);

		return;
	}

}
