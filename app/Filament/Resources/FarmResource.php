<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FarmResource\Pages;
use App\Models\Farm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Dotswan\MapPicker\Fields\Map;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;

class FarmResource extends Resource
{
    protected static ?string $model = Farm::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static int $globalSearchResultsLimit = 20;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\FileUpload::make('image_url')
                            ->image()
                            ->directory('farms')
                            ->label('Gambar')
                            ->columnSpanFull(),

                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Nama'),

                                Forms\Components\Hidden::make('user_id')
                                    ->default(fn() => auth()->id())
                                    ->required(),

                                Forms\Components\TextInput::make('capacity')
                                    ->required()
                                    ->numeric()
                                    ->minValue(0)
                                    ->label('Kapasitas'),

                                Forms\Components\Toggle::make('is_active')
                                    ->required()
                                    ->default(true)
                                    ->label('Aktif'),

                                Forms\Components\Textarea::make('description')
                                    ->required()
                                    ->maxLength(65535)
                                    ->columnSpanFull()
                                    ->label('Deskripsi'),

                                Forms\Components\Textarea::make('location')
                                    ->required()
                                    ->columnSpanFull()
                                    ->label('Lokasi'),
                                Grid::make()
                                    ->schema([
                                        TextInput::make('latitude')
                                            ->numeric()
                                            ->required()
                                            ->readonly()
                                            ->default(-5.2962)
                                            ->minValue(-90)
                                            ->maxValue(90)
                                            ->step('0.00000001') // 8 decimal places
                                            ->label('Latitude'),

                                        TextInput::make('longitude')
                                            ->numeric()
                                            ->required()
                                            ->readonly()
                                            ->default(105.4478)
                                            ->minValue(-180)
                                            ->maxValue(180)
                                            ->step('0.00000001') // 8 decimal places
                                            ->label('Longitude'),
                                    ])
                                    ->columns(2),

                                Map::make('coordinates')
                                    ->label('Peta Lokasi')
                                    ->liveLocation(true)
                                    ->afterStateUpdated(function (Set $set, ?array $state): void {
                                        $set('latitude',  $state['lat']);
                                        $set('longitude', $state['lng']);
                                    })
                                    ->columnSpanFull()
                                    ->defaultLocation(latitude: -5.2962, longitude: 105.4478)
                                    ->clickable(true)
                                    ->showMarker()
                                    ->showZoomControl()
                                    ->draggable()

                            ])
                            ->columns(2)
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Ukuran Kandang')
                            ->schema([
                                Forms\Components\TextInput::make('pan_width')
                                    ->numeric()
                                    ->required()
                                    ->minValue(0)
                                    ->suffix('m')
                                    ->label('Lebar Kandang')
                                    ->columnSpan(2),

                                Forms\Components\TextInput::make('pan_height')
                                    ->numeric()
                                    ->required()
                                    ->minValue(0)
                                    ->suffix('m')
                                    ->label('Tinggi Kandang')
                                    ->columnSpan(2),

                                Forms\Components\TextInput::make('pan_length')
                                    ->numeric()
                                    ->required()
                                    ->minValue(0)
                                    ->suffix('m')
                                    ->label('Panjang Kandang')
                                    ->columnSpan(2),
                            ])
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_url')
                    ->square()
                    ->label('Gambar'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('user.fullname')
                    ->searchable()
                    ->sortable()
                    ->label('Pemilik'),
                Tables\Columns\TextColumn::make('location')
                    ->searchable()
                    ->wrap()
                    ->label('Lokasi'),
                Tables\Columns\TextColumn::make('capacity')
                    ->numeric()
                    ->sortable()
                    ->label('Kapasitas'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable()
                    ->label('Aktif'),
                Tables\Columns\TextColumn::make('createdAt')
                    ->dateTime()
                    ->sortable()
                    ->toggleable()
                    ->label('Dibuat Pada'),
            ])
            ->defaultSort('createdAt', 'desc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Edit'),
                Tables\Actions\DeleteAction::make()->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Hapus Massal'),
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
            'index' => Pages\ListFarms::route('/'),
            'create' => Pages\CreateFarm::route('/create'),
            'edit' => Pages\EditFarm::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
            'location',
            'description',
            'user.fullname',
        ];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Pemilik' => $record->user->fullname,
            'Lokasi' => $record->location,
            'Kapasitas' => $record->capacity,
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Manajemen Peternakan';
    }

}
