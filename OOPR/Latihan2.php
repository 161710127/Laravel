<?php

class kucing
{
	public $Suara,$Berat,$Jenis;

	public function __construct($Suara,$Berat,$Jenis)
	{
		$this->Suara=$Suara;
		$this->Berat=$Berat;
		$this->Jenis=$Jenis;
	}
	public function get_Suara()
	{
		$this->Suara;
	}
	public function get_Berat()
	{
		$this->Berat;
	}
	public function get_Jenis()
	{
		$this->Jenis;
	}
}

?>