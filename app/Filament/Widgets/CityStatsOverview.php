<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class CityStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Employees', Employee::all()->count()),
            Card::make('Employees in Tirupur', Employee::where('city_id','1')->count()),
            Card::make('Employees in Coimbatore', Employee::where('city_id','2')->count()),
            Card::make('Employees in Bangalore', Employee::where('city_id','3')->count()),
            Card::make('Employees in Mysore', Employee::where('city_id','4')->count()),
            Card::make('Employees in London', Employee::where('city_id','5')->count()),
            Card::make('Employees in Coventry', Employee::where('city_id','6')->count()),
        ];
    }
}
