<?php

require_once __DIR__ . '/Empleado.php';

class EmpleadoPorHora extends Empleado
{
	private $horasTrabajadas;
	private $valorHora;

	public function __construct($horasTrabajadas, $valorHora)
	{
		$this->horasTrabajadas = $horasTrabajadas;
		$this->valorHora = $valorHora;
	}

	public function calcularSueldo()
	{
		return $this->horasTrabajadas * $this->valorHora;
	}
}
