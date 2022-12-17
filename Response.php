<?php

class Response
{
	public static function json($data = [], $responseCode = 200): bool
	{
		header('Content-type:application/json;charset=utf-8');
		http_response_code($responseCode);
		echo json_encode($data);
		return true;
	}
}