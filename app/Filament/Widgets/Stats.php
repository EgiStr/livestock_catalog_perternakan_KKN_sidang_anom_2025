<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\Farm;

class Stats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pengguna', User::count())
                ->description('Jumlah pengguna terdaftar')
                ->icon('heroicon-o-user')
                ->color('success'),

            Stat::make('Total Peternakan', Farm::count())
                ->description('Jumlah peternakan')
                ->icon('heroicon-o-home')
                ->color('primary'),

            Stat::make('Peternakan Aktif', Farm::where('is_active', true)->count())
                ->description('Jumlah peternakan aktif')
                ->icon('heroicon-o-check-circle')
                ->color('warning'),
        ];
    }
}
