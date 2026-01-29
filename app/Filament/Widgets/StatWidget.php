<?php

namespace App\Filament\Widgets;

use App\Models\Produk;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('', Produk::count())
                ->description('Total Produk')
                ->descriptionIcon('heroicon-o-archive-box', IconPosition::Before)
                ->color('info'),
            Stat::make('', Produk::where('status_id', '1')->count())
                ->description('Bisa Dijual')
                ->descriptionIcon('heroicon-o-check-circle', IconPosition::Before)
                ->color('success'),
            Stat::make('', Produk::where('status_id', '2')->count())
                ->description('Tidak Bisa Dijual')
                ->descriptionIcon('heroicon-o-x-circle', IconPosition::Before)
                ->color('danger'),
        ];
    }
}
