<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataProvinsiResource\Pages;
use App\Filament\Resources\DataProvinsiResource\RelationManagers;
use App\Models\DataProvinsi;
use App\Models\NamaData;
use App\Models\Provinsi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataProvinsiResource extends Resource
{
    protected static ?string $model = DataProvinsi::class;

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
                Forms\Components\Select::make('provinsi_id')
                    ->required()
                    ->options(
                        \App\Models\Provinsi::all()->pluck('name', 'id')
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
                Tables\Columns\TextColumn::make('provinsi.name')
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
            'index' => Pages\ListDataProvinsis::route('/'),
            'create' => Pages\CreateDataProvinsi::route('/create'),
            'edit' => Pages\EditDataProvinsi::route('/{record}/edit'),
        ];
    }
}
