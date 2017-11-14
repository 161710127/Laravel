<?php

class Game
{
	public $dev,$nama,$genre;
	public function __construct($dev,$nama,$genre)
	{
		$this->dev=$dev;
		$this->nama=$nama;
		$this->genre=$genre;
	}
	public function get_dev()
	{
		return $this->dev;
	}
	public function get_nama()
	{
		return $this->nama;
	}
	public function get_genre()
	{
		return $this->genre;
	}
}


?>