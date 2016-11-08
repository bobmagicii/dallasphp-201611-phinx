# dallasphp-201611-phinx

The migration scripts from the demo on Phinx.

Drop these in your Phinx migration folder. Then you can do amazing
things like this

	php vendor/bin/phinx migrate
	php vendor/bin/phinx rollback -t 0
	php vendor/bin/phinx migrate

Careful that you are on a test database. I cannot be held responsible
for you blowing your stuff up.
