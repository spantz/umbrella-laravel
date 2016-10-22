<?php

namespace App\Http\Response;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

class APIResponse
{
	private $status;

	private $message;

	private $data;

	private $httpStatus;

	private $headers;

	public function __construct($status = 'success', $message = 'Success', $data = [], $httpStatus = 200, $headers = [])
	{
		$this->status = $status;
		$this->message = $message;
		$this->data = $data;
		$this->httpStatus = $httpStatus;
		$this->headers = $headers;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function getData()
	{
		return $this->data;
	}

	public function getHttpStatus()
	{
		return $this->httpStatus;
	}

	public function getHeaders()
	{
		return $this->headers;
	}

	public function getContent()
	{
		return [
		'status' => $this->getStatus(),
		'message' => $this->getMessage(),
		'data' => $this->getData()
		];
	}

	public function toArray()
	{
		return $this->getContent();
	}

	public funtion toJson($options = 0)
	{
		return json_encode($this->toArray(), $options);
	}

	private function jsonSerialize()
	{
		return $this->toJson();
	}

	public function toResponse()
	{
		return response($this->toArray(), $this->getHttpStatus(), $this->getHeaders());
	}
}