<?php

namespace RefactoringGuru\Builder\Conceptual;

abstract class Creator
{
    public $door;
    public $windows;
    public $wall;
    public $roof;
    public $foundation;
}

interface HouseBuilder
{
    public function buildDoors(): void;
    public function buildWindows(): void;
    public function buildWalls(): void;
    public function buildRoof(): void;
    public function buildFlooring(): void;
    public function buildFoundation(): void;
    public function getResult(): void;
}

class HouseWithGardenBuilder implements HouseBuilder
{
    private $houseWithGarden;

    public function buildDoors(): void
    {
        $this->houseWithGarden->buildDoors = "build Doors";
    }

    public function buildWindows(): void
    {
        $this->houseWithGarden->buildWindows = "build Windows";
    }

    public function buildWalls(): void
    {
        $this->houseWithGarden->buildWalls = "build Walls";
    }

    public function buildRoof(): void
    {
        $this->houseWithGarden->buildRoof = "build Roof";
    }

    public function buildFlooring(): void
    {
        $this->houseWithGarden->buildFlooring = "build Flooring";
    }

    public function buildFoundation(): void
    {
        $this->houseWithGarden->buildFoundation = "build Foundation";
    }

    public function buildGarden(): void
    {
        $this->houseWithGarden->buildGarden = "build Garden";
    }

    public function getResult(): houseWithGarden
    {
        $result = $this->houseWithGarden;

        return $getResult;
    }
}

class HouseWithGarageBuilder implements HouseBuilder
{
    private $houseWithGarage;

    public function buildDoors(): void
    {
        $this->houseWithGarage->buildDoors = "build Doors";
    }

    public function buildWindows(): void
    {
        $this->houseWithGarage->buildWindows = "build Windows";
    }

    public function buildWalls(): void
    {
        $this->houseWithGarage->buildWalls = "build Walls";
    }

    public function buildRoof(): void
    {
        $this->houseWithGarage->buildRoof = "build Roof";
    }

    public function buildFlooring(): void
    {
        $this->houseWithGarage->buildFlooring = "build Flooring";
    }

    public function buildFoundation(): void
    {
        $this->houseWithGarage->buildFoundation = "build Foundation";
    }

    public function buildGarage(): void
    {
        $this->houseWithGarage->buildGarage= "build Garage";
    }

    public function getResult(): houseWithGarage
    {
        $result = $this->houseWithGarage;

        return $getResult;
    }
}

class HouseWithSwimmingPoolBuilder implements HouseBuilder
{
    private $houseWithSwimmingPool;

    public function buildDoors(): void
    {
        $this->houseWithSwimmingPool->buildDoors = "build Doors";
    }

    public function buildWindows(): void
    {
        $this->houseWithSwimmingPool->buildWindows = "build Windows";
    }

    public function buildWalls(): void
    {
        $this->houseWithSwimmingPool->buildWalls = "build Walls";
    }

    public function buildRoof(): void
    {
        $this->houseWithSwimmingPool->buildRoof = "build Roof";
    }

    public function buildFlooring(): void
    {
        $this->houseWithSwimmingPool->buildFlooring = "build Flooring";
    }

    public function buildFoundation(): void
    {
        $this->houseWithSwimmingPool->buildFoundation = "build Foundation";
    }

    public function buildSwimmingPool(): void
    {
        $this->houseWithSwimmingPool->buildSwimmingPool= "build Swimming Pool";
    }

    public function getResult(): houseWithSwimmingPool
    {
        $result = $this->houseWithSwimmingPool;

        return $getResult;
    }
}

class HouseWithFancyStatuesBuilder implements HouseBuilder
{
    private $houseWithFancyStatues;

    public function buildDoors(): void
    {
        $this->houseWithFancyStatues->buildDoors = "build Doors";
    }

    public function buildWindows(): void
    {
        $this->houseWithFancyStatues->buildWindows = "build Windows";
    }

    public function buildWalls(): void
    {
        $this->houseWithFancyStatues->buildWalls = "build Walls";
    }

    public function buildRoof(): void
    {
        $this->houseWithFancyStatues->buildRoof = "build Roof";
    }

    public function buildFlooring(): void
    {
        $this->houseWithFancyStatues->buildFlooring = "build Flooring";
    }

    public function buildFoundation(): void
    {
        $this->houseWithFancyStatues->buildFoundation = "build Foundation";
    }

    public function buildFancyStatues(): void
    {
        $this->houseWithFancyStatues->buildFancyStatues= "build Fancy Statues";
    }

    public function getResult(): houseWithFancyStatues
    {
        $result = $this->houseWithFancyStatues;

        return $getResult;
    }
}

class HouseWithGarden
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class HouseWithGarage
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class HouseWithSwimmingPool
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class HouseWithFancyStatues
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class Director
{
    /**
     * @var HouseBuilder
     */
    private $builder;
    private $type;

    public function setHouseBuilder(HouseBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function makeHouse($type): void
    {
        $this->type->$type;
    }

    public function makeHouseWithGarden(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildGarden();
        $this->builder->getResult();
    }

    public function makeHouseWithGarage(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildGarage();
        $this->builder->getResult();
    }

    public function makeHouseWithSwimmingPool(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildSwimmingPool();
        $this->builder->getResult();
    }

    public function makeHouseWithFancyStatues(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildFancyStatues();
        $this->builder->getResult();
    }
}

function clientCode(Director $director)
{
    $builder = new ConcreteBuilder1();
    $director->setBuilder($builder);

    echo "Standard basic product:\n";
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();

    echo "Standard full featured product:\n";
    $director->buildFullFeaturedProduct();
    $builder->getProduct()->listParts();

    // Remember, the Builder pattern can be used without a Director class.
    echo "Custom product:\n";
    $builder->producePartA();
    $builder->producePartC();
    $builder->getProduct()->listParts();
}

$director = new Director();
clientCode($director);