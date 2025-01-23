<?php

namespace App\Filament\Resources\NamaDataResource\Pages;

use App\Filament\Resources\NamaDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNamaData extends EditRecord
{
    protected static string $resource = NamaDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
