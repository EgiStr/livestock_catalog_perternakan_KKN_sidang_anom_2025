<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IotSensorsResource\Pages;
use App\Models\IotSensors;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class IotSensorsResource extends Resource
{
    protected static ?string $model = IotSensors::class;
    protected static ?string $navigationIcon = 'heroicon-o-signal';
    protected static ?string $recordTitleAttribute = 'id';
    protected static int $globalSearchResultsLimit = 20;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('farm_id')
                            ->relationship('farm', 'name')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->label('Peternakan'),

                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('temperature')
                                    ->required()
                                    ->numeric()
                                    ->suffix('°C')
                                    ->label('Suhu'),

                                Forms\Components\TextInput::make('humidity')
                                    ->required()
                                    ->numeric()
                                    ->suffix('%')
                                    ->label('Kelembaban'),

                                Forms\Components\TextInput::make('ammonia')
                                    ->required()
                                    ->numeric()
                                    ->suffix('ppm')
                                    ->label('Amonia'),

                                Forms\Components\TextInput::make('light_intensity')
                                    ->required()
                                    ->numeric()
                                    ->suffix('lux')
                                    ->label('Intensitas Cahaya'),
                            ])
                            ->columns(2),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('farm.name')
                    ->sortable()
                    ->searchable()
                    ->label('Nama Peternakan'),
                Tables\Columns\TextColumn::make('temperature')
                    ->sortable()
                    ->numeric(2)
                    ->suffix('°C')
                    ->label('Suhu'),
                Tables\Columns\TextColumn::make('humidity')
                    ->sortable()
                    ->numeric(2)
                    ->suffix('%')
                    ->label('Kelembaban'),
                Tables\Columns\TextColumn::make('ammonia')
                    ->sortable()
                    ->numeric(2)
                    ->suffix('ppm')
                    ->label('Amonia'),
                Tables\Columns\TextColumn::make('light_intensity')
                    ->sortable()
                    ->numeric(2)
                    ->suffix('lux')
                    ->label('Intensitas Cahaya'),
                Tables\Columns\TextColumn::make('createdAt')
                    ->label('Dicatat Pada')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('createdAt', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('farm')
                    ->relationship('farm', 'name')
                    ->label('Peternakan'),
                Tables\Filters\Filter::make('createdAt')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('Dari Tanggal'),
                        Forms\Components\DatePicker::make('created_until')
                            ->label('Sampai Tanggal'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn($query) => $query->whereDate('createdAt', '>=', $data['created_from']),
                            )
                            ->when(
                                $data['created_until'],
                                fn($query) => $query->whereDate('createdAt', '<=', $data['created_until']),
                            );
                    })
                    ->label('Tanggal Pencatatan')
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Edit'),
                Tables\Actions\DeleteAction::make()->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Hapus Terpilih'),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()->label('Buat Baru'),
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
            'index' => Pages\ListIotSensors::route('/'),
            'create' => Pages\CreateIotSensors::route('/create'),
            'edit' => Pages\EditIotSensors::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'farm.name',
            'temperature',
            'humidity',
            'ammonia',
            'light_intensity',
        ];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Peternakan' => $record->farm->name,
            'Suhu' => $record->temperature . '°C',
            'Kelembaban' => $record->humidity . '%',
            'Amonia' => $record->ammonia . 'ppm',
            'Intensitas Cahaya' => $record->light_intensity . 'lux',
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Manajemen Peternakan';
    }
}
