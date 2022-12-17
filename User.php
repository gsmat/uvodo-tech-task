<?php

class User
{
	public int $id;
	public string $email;
	public string $first_name;
	public string $last_name;

	public function __construct(array $data)
	{
		$this->email = $data['email'];
		$this->first_name = $data['first_name'];
		$this->last_name = $data['last_name'];
	}

	public function getFirstName()
	{
		return $this->first_name;
	}

	public function getLastName()
	{
		return $this->last_name;
	}

	public function getEmail()
	{
		return $this->email;
	}

}
