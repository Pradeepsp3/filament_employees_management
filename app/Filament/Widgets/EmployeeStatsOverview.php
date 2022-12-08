<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Employees', Employee::all()->count()),
            Card::make('Employees in Laravel', Employee::where('department_id','1')->count()),
            Card::make('Employees in React JS', Employee::where('department_id','2')->count()),
            Card::make('Employees in Freshwork', Employee::where('department_id','3')->count()),
            Card::make('Employees in Javascript', Employee::where('department_id','4')->count()),
        ];
    }
}
