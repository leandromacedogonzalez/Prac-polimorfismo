<?php

require_once __DIR__ . '/Empleadofijo.php';
require_once __DIR__ . '/EmpleadoPorHora.php';
require_once __DIR__ . '/Vendedor.php';

$empleados = [
    new EmpleadoFijo(),
    new EmpleadoPorHora(160, 500),
    new EmpleadoPorHora(120, 600),
    new Vendedor(50000, 200000, 0.05),
];

foreach ($empleados as $empleado) {
    echo 'Sueldo: $' . number_format($empleado->calcularSueldo(), 0, ',', '.') . PHP_EOL;
}