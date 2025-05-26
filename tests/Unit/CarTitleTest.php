<?php
use App\Models\Car;
use App\Models\Maker;
use App\Models\Model;

it('returns correct title string from year, maker and model', function () {
    $maker = new Maker(['name' => 'Toyota']);
    $model = new Model(['name' => 'Corolla']);

    $car = new Car([
        'year' => 2020,
    ]);

    $car->setRelation('maker', $maker);
    $car->setRelation('model', $model);

    expect($car->getTitle())->toBe('2020 - Toyota Corolla');
});
