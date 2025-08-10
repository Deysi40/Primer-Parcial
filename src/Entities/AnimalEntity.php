<?php declare (strict_types=1);

namespace App\Entities;

use App\Entities\Interfaces\AnimalInterface;

abstract class AnimalEntity implements AnimalInterface{
    
    protected int $id;
    protected string $color;
    protected string $sexo;

    public function getId() : int {
        return $this->id;
    }
    public function setId(int $id) : void {
         $this->id = $id;
    }
     public function getColor() : string {
        return $this->color;
    }
    public function setColor(string $color) : void {
        $this->color = $color;
    }
    public function getSexo() : String {
        return $this->sexo;
    }
    public function setSexo(String $sexo) : void {
         $this->sexo = $sexo;
    }



   
}
// incluir dos repositorios y dos repositorios