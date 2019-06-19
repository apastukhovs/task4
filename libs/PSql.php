<?php
class PSql extends DB
{
	public function __construct($driver, $host, $db, $user, $pass)
	{
		parent::__construct($driver, $host, $db, $user, $pass);
	}
}