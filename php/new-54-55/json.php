<?php

class Post implements JsonSerializable
{
	private $title, $date;

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function jsonSerialize()
	{
		return [
			'title' => $this->getTitle(),
			'date'  => $this->getDate(),
			'somevalue' => '123'
		];
	}
}
	$post = new Post;
	$post->setTitle('Hello, world');
	$post->setDate(new DateTime());

	echo json_encode($post, JSON_PRETTY_PRINT);
