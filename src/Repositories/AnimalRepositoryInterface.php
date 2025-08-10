<?php declare(strict_types=1);
namespace App\Repositories;

use App\Entities\Interfaces\AnimalInterface;

interface AnimalRepositoryInterface{
    public function save(AnimalInterface $animal) : AnimalInterface;
    public function getByColor(string $color) :AnimalInterface;
    public function update(AnimalInterface $animal) : void;
    public function delete(AnimalInterface $animal) : void;
}