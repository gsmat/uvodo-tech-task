<?php
include "UserInterface.php";

class UserRepository implements UserInterface
{
	private PDO $connection;

	public function __construct(PDO $connection)
	{
		$this->connection = $connection;
	}

	public function store(User $user): void
	{
		$stmt = $this->connection->prepare("INSERT INTO users (email, first_name, last_name) VALUES (?, ?, ?)");
		$stmt->execute([$user->getFirstName(), $user->getLastName(), $user->getEmail()]);
		$stmt = null;
	}

	/**
	 * @throws JsonException
	 */
	public function index(): bool|string
	{
		return json_encode($this->connection->query("SELECT * FROM users")->fetch(PDO::FETCH_ASSOC), JSON_THROW_ON_ERROR);
	}
}
