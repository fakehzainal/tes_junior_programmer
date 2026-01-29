<?php

namespace App\Filament\Resources\ProdukResource\Pages;

use App\Filament\Resources\ProdukResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListProduks extends ListRecords
{
    protected static string $resource = ProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('Semua'),
            'Bisa Dijual' => Tab::make()->query(fn($query) => $query->where('status_id', '1')),
            'Tidak Bisa Dijual' => Tab::make()->query(fn($query) => $query->where('status_id', '2'))
        ];
    }
}
