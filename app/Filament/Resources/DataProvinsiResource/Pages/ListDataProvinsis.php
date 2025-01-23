<?php

namespace App\Filament\Resources\DataProvinsiResource\Pages;

use App\Filament\Resources\DataProvinsiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataProvinsis extends ListRecords
{
    protected static string $resource = DataProvinsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
