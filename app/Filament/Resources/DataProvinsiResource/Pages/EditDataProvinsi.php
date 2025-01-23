<?php

namespace App\Filament\Resources\DataProvinsiResource\Pages;

use App\Filament\Resources\DataProvinsiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataProvinsi extends EditRecord
{
    protected static string $resource = DataProvinsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
