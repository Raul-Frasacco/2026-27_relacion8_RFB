<?php

class RegistroTexto{

    private string $cadena;
    private DateTime $hora;

    public function __construct(string $cadena)
    {
        $this->cadena = $cadena;
        $this->hora = new DateTime("now", new DateTimeZone("Europe/Madrid"));
    }

    public function getCadena(): string{
        return $this->cadena;
    }

    public function getHora(): DateTime{
        return $this->hora;
    }

    public function __toString()
    {
        return $this->getCadena() . " -> " . $this->getHora()->format("H:i:s");
    }
}