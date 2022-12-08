<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use App\Filament\Resources\DepartmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;

     // redirect to view page after creating
     protected function getRedirectUrl(): string
     {
         return $this->getResource()::getUrl('index');
     }
}
