<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataKabkotaResource\Pages;
use App\Filament\Resources\DataKabkotaResource\RelationManagers;
use App\Models\DataKabkota;
use App\Models\KabKota;
use App\Models\NamaData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataKabkotaResource extends Resource
{
    protected static ?string $model = DataKabkota::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tahun')
                    ->required(),
                Forms\Components\Select::make('nama_data_id')
                    ->required()
                    ->options(
                        \App\Models\NamaData::all()->pluck('name', 'id')
                    ),
                Forms\Components\Select::make('kabkota_id')
                    ->required()
                    ->options(
                        \App\Models\Kabkota::all()->pluck('name', 'id')
                    ),
                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('NamaData.name')
                    ->label('nama data')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kabkota.name')
                    ->label('provinsi')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDataKabkotas::route('/'),
            'create' => Pages\CreateDataKabkota::route('/create'),
            'edit' => Pages\EditDataKabkota::route('/{record}/edit'),
        ];
    }
}
