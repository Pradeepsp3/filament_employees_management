<?php

namespace App\Filament\Resources\StateResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Widgets\StateStatsOverview;
use App\Filament\Resources\StateResource;
use Filament\Resources\Pages\ListRecords;

class ListStates extends ListRecords
{
    protected static string $resource = StateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            StateStatsOverview::class,
        ];
    }
}
