<?php
class Users 
{
	protected $db;
	protected $faker;
	
	public function __construct()
	{
		$this->db = new PDO("mysql:host=localhost;dbname=codecrud","root","");
		$this->faker = Faker\Factory::create();
	}

	public function generateUser()
	{
		$ps = $this->db->prepare("INSERT INTO user (nombre,email)
		VALUES (:nombre,:email)");

		$ps->execute([
			':nombre'=> $this->faker->name,
			
			':email'=> $this->faker->email
			//':address'=> $this->faker->address

			]);
		
	}

	public function getAll()
	{
		$ps = $this->db->prepare("select * FROM user");
		$ps->execute();
		return $ps->fetchAll(PDO::FETCH_OBJ);

	}

}
