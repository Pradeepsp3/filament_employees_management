<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
                Card::make('Total Employees', Employee::all()->count()),
                Card::make('Employees in India', Employee::where('country_id','1')->count()),
                Card::make('Employees in UK', Employee::where('country_id','2')->count()),
            ];
    }
}
