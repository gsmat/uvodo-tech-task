<?php

class UserController
{
	private $users;

	public function __construct(UserInterface $users)
	{
		$this->users = $users;
	}

	public function addUser($params): void
	{
		$user = new User($params);
		$this->users->store($user);
	}

	public function getUsers(): bool|string|array
	{
		return $this->users->index();
	}
}
