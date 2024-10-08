<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeSampleCollectionResource\Pages;
use App\Filament\Resources\HomeSampleCollectionResource\RelationManagers;
use App\Models\HomeSampleCollection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Enums\HomeSampleCollectionStatus;

class HomeSampleCollectionResource extends Resource
{
    protected static ?string $model = HomeSampleCollection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Health Test Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user','name'),
                Forms\Components\Select::make('appointment_id')
                    ->relationship('appointment','name'),
                Forms\Components\Textarea::make('collection_address')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('scheduled_date')
                    ->required(),
                Forms\Components\TextInput::make('scheduled_time')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options(HomeSampleCollectionStatus::scheduled)
                    ->default('scheduled'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('appointment_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('scheduled_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('scheduled_time'),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
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
            'index' => Pages\ListHomeSampleCollections::route('/'),
            'create' => Pages\CreateHomeSampleCollection::route('/create'),
            'edit' => Pages\EditHomeSampleCollection::route('/{record}/edit'),
        ];
    }
}
