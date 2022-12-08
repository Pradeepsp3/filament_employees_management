<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

     // redirect to view page after creating
     protected function getRedirectUrl(): string
     {
         return $this->getResource()::getUrl('index');
     }
}
