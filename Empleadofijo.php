<?php

require_once __DIR__ . '/Empleado.php';

class EmpleadoFijo extends Empleado
{
	public function calcularSueldo()
	{
		return 50000;
	}
}
