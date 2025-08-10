<?php declare(strict_types=1);

namespace App\Entities;
use App\Entities\Interfaces\DogInterface;

class DogEntity implements DogInterface{
    private bool $entrenado;
    private string $color;
    private string $sexo;

    public function isEntrenado() : bool {
        return $this->entrenado;
    }
    public function entrenado(bool $isEntrenado) : void {
        $this->entrenado = $isEntrenado;
    }
    public function setColor(string $color): void{
        $this->color = $color;
    }
    public function getColor() : string {
        return $this->color;
    }
    public function setSexo(string $sexo): void{
        $this->sexo = $sexo;
    }
    public function getSexo() : string {
        return $this->sexo;
    }


}

