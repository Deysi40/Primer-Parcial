<?php declare(strict_types=1);
namespace App\Entities\Interfaces;

interface AnimalInterface{
    public function setColor(string $color) : void;
    public function getColor() : string;
    public function setSexo(string $color) : void;
    public function getSexo() : string;
    
}