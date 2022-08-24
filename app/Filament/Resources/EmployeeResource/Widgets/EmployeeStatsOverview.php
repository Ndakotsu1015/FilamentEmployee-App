<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $Nigeria = Country::where('country_code', +234)->withCount('employees')->first();
        $Ghana = Country::where('country_code', 'GH')->withCount('employees')->first();
        $UnitedState = Country::where('country_code', 'US')->withCount('employees')->first();
        $UnitedKingdom = Country::where('country_code', 'UK')->withCount('employees')->first();
        $BeninRepublic = Country::where('country_code', 'BR')->withCount('employees')->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make('Nigeria Employees', $Nigeria ? $Nigeria->employees_count: 0),
            Card::make('Ghana Employees',  $Ghana ? $Ghana->employees_count: 0),

            Card::make(' United State Employees', $UnitedState ? $UnitedState->employees_count: 0),
            Card::make('United Kingdom Employees', $UnitedKingdom ? $UnitedKingdom->employees_count: 0),
            Card::make('BeninRepublic Employees', $BeninRepublic ? $BeninRepublic->employees_count: 0),
            
        ];
    }
}
