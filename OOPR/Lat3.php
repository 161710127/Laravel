<?php

class mobil
{
	public $roda,$warna,$merk;

	public function __construct($roda,$warna,$merk)
	{
		$this->roda=$roda;
		$this->warna=$warna;
		$this->merk=$merk;

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