<?php

class motor
{
	public $roda,$merk,$warna;

	public function __construct($roda,$merk,$warna)
	{
		$this->roda=$roda;
		$this->merk=$merk;
		$this->warna=$warna;
	}
	public function get_roda()
	{
		return $this->roda;
	}
	public function get_warna()
	{
		return $this->warna;
	}
	public function get_merk()
	{
		return $this->merk;
	}
}


?>