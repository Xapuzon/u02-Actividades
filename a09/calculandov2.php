<?php
function sumar(float $primerNumero, float $segundoNumero): float
{
    return $primerNumero + $segundoNumero;
}

function restar(float $primerNumero, float $segundoNumero): float
{
    return $primerNumero - $segundoNumero;
}

function multiplicar(float $primerNumero, float $segundoNumero): float
{
    return $primerNumero * $segundoNumero;
}

function dividir(float $primerNumero, float $segundoNumero): ?float
{
    if ($segundoNumero == 0) {
        return null;
    }

    return $primerNumero / $segundoNumero;
}

function calcularModulo(int $primerNumero, int $segundoNumero): ?int
{
    if ($segundoNumero === 0) {
        return null;
    }

    return $primerNumero % $segundoNumero;
}

function sonIguales(int|float $primerNumero, int|float $segundoNumero): bool
{
    return $primerNumero === $segundoNumero;
}

function esPar(int $numero): bool
{
    return $numero % 2 === 0;
}