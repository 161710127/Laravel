<?php
class Laptop
{
	public $merk,$seri,$VGA,$RAM,$Processor;

	public function __construct($merk,$seri,$VGA,$RAM,$Processor)
	{
		$this->merk=$merk;
		$this->seri=$seri;
		$this->VGA=$VGA;
		$this->RAM=$RAM;
		$this->Processor=$Processor;
	}
	public function get_merk()
	{
		return $this->merk;
	}
	public function get_seri()
	{
		return $this->seri;
	}
	public function get_VGA()
	{
		return $this->VGA;
	}
    public function get_RAM()
	{
		return $this->RAM;
	}
	public function get_Processor()
	{
		return $this->Processor;
	}



}


?>