<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StateStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Employees', Employee::all()->count()),
            Card::make('Employees in Tamilnadu', Employee::where('State_id','1')->count()),
            Card::make('Employees in London', Employee::where('State_id','2')->count()),
            Card::make('Employees in Midlands', Employee::where('State_id','3')->count()),
            Card::make('Employees in Karnataka', Employee::where('State_id','4')->count()),
        ];
    }
}
