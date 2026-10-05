<?php

require_once __DIR__ . '/Empleado.php';

class Vendedor extends Empleado
{
	private $sueldoBase;
	private $ventas;
	private $porcentajeComision;

	public function __construct($sueldoBase, $ventas, $porcentajeComision)
	{
		$this->sueldoBase = $sueldoBase;
		$this->ventas = $ventas;
		$this->porcentajeComision = $porcentajeComision;
	}

	public function calcularSueldo()
	{
		return $this->sueldoBase + ($this->ventas * $this->porcentajeComision);
	}
}
