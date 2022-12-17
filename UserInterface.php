<?php

interface UserInterface
{
	public function store(User $user);

	public function index(): bool|string|array;
}