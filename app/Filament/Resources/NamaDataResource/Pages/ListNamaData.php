<?php

namespace App\Filament\Resources\NamaDataResource\Pages;

use App\Filament\Resources\NamaDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNamaData extends ListRecords
{
    protected static string $resource = NamaDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
