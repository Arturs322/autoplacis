<?php

class Car
{

    private string $brand;
    private int $horsePower;
    private int $year;
    private int $price;

    public function __construct(string $brand, int $horsePower, int $year, int $price)
    {
        $this->brand = $brand;
        $this->horsePower = $horsePower;
        $this->year = $year;
        $this->price = $price;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getHorsePower()
    {
        return $this->horsePower;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getInfo(): string
    {
        return "Car brand: {$this->brand}, horsepower: {$this->horsePower}, year: {$this->year}, price: {$this->price}" . PHP_EOL;
    }
}

class Store
{
    private array $items;

    public function __construct(array $items)
    {
        foreach ($items as $item) {
            $this->add($item);
        }
    }

    public function add(StoreItem $item): void
    {
        $this->items[] = $item;
    }

    public function getItems(): array
    {
        return $this->items;
    }


}

class StoreItem
{
    private Car $car;
    private int $price;

    public function __construct(Car $car, int $price)
    {
        $this->car = $car;
        $this->price = $price;
    }

    public function getCar(): object
    {
        return $this->car;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

}

class client
{
    private string $name;
    private int $money;

    public function __construct(string $name, int $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    public function getInfo()
    {
        return "{$this->name} has {$this->money}$, what will he buy?" . PHP_EOL;
    }

    public function getMoney()
    {
        return $this->money;
    }
}


$janis = new client("Janis", 220000);

echo $janis->getInfo();

$items = [
    new Car("Audi", 500, 2020, 200000),
    new Car("BMW", 400, 2021, 100000),
    new Car("Mercedes", 450, 2020, 150000),
];


foreach ($items as $key => $item) {
    echo "{$key} ";
    echo $item->getInfo() . PHP_EOL;
}
$choice = (int)readline("Choose your car: ") . PHP_EOL;

if ($choice == $key) {
    echo "You chose to buy: {$item->getBrand()} for {$item->getPrice()}$" . PHP_EOL;
} else {
    echo "" . PHP_EOL;
}
if ($janis->getMoney() < $item->getPrice()) {
    echo "You dont have enough money " . PHP_EOL;
} else {
    $totalLeft = $janis->getMoney() - $item->getPrice();
    echo "You paid {$item->getPrice()}$ for a brand new {$item->getBrand()}!" . PHP_EOL;
    echo "You have {$totalLeft}$ left!" . PHP_EOL;
}

