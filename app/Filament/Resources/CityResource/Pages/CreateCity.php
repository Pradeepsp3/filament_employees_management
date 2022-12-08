<?php

namespace App\Filament\Resources\CityResource\Pages;

use App\Filament\Resources\CityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCity extends CreateRecord
{
    protected static string $resource = CityResource::class;

     // redirect to view page after creating
     protected function getRedirectUrl(): string
     {
         return $this->getResource()::getUrl('index');
     }
}
