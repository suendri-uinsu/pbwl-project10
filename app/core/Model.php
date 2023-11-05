<?php

namespace App\Core;

use PDO;

class Model
{

	protected object $db;

	public function __construct()
	{

		try {

			$this->db = new PDO("mysql:host=localhost;dbname=dbpbwl_project10", "root", "");
		} catch (Exception $e) {
			die("error! " . $e->getMessage());
		}
	}

	public function select($stmt)
	{
		//Menampilkan satu data
		return $stmt->fetch();
	}

	public function selects($stmt)
	{
		//Menampilkan banyak data
		$data = [];

		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}

		return $data;
	}
}
