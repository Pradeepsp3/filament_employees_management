<?php

namespace App\Filament\Resources\CityResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\CityResource;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Widgets\CityStatsOverview;

class ListCities extends ListRecords
{
    protected static string $resource = CityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            CityStatsOverview::class,
        ];
    }
}
