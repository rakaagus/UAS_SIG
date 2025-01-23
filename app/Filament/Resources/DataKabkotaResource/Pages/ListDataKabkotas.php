<?php

namespace App\Filament\Resources\DataKabkotaResource\Pages;

use App\Filament\Resources\DataKabkotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataKabkotas extends ListRecords
{
    protected static string $resource = DataKabkotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
