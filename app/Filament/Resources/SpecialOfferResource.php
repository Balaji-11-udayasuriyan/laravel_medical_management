<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpecialOfferResource\Pages;
use App\Filament\Resources\SpecialOfferResource\RelationManagers;
use App\Models\SpecialOffer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Enums\SpecialOfferServiceType;

class SpecialOfferResource extends Resource
{
    protected static ?string $model = SpecialOffer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('service_type')
                    ->options(SpecialOfferServiceType::class),
                Forms\Components\TextInput::make('discount_amount')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('discount_percentage')
                    ->numeric()
                    ->default(null),
                Forms\Components\DatePicker::make('valid_from')
                    ->required(),
                Forms\Components\DatePicker::make('valid_until')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('discount_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount_percentage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('valid_from')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('valid_until')
                    ->date()
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
            'index' => Pages\ListSpecialOffers::route('/'),
            'create' => Pages\CreateSpecialOffer::route('/create'),
            'edit' => Pages\EditSpecialOffer::route('/{record}/edit'),
        ];
    }
}
