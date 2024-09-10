<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeliveryPartnerResource\Pages;
use App\Filament\Resources\DeliveryPartnerResource\RelationManagers;
use App\Models\DeliveryPartner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeliveryPartnerResource extends Resource
{
    protected static ?string $model = DeliveryPartner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('api_url')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('api_key')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('contact_info')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('api_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('api_key')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_info')
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
            'index' => Pages\ListDeliveryPartners::route('/'),
            'create' => Pages\CreateDeliveryPartner::route('/create'),
            'edit' => Pages\EditDeliveryPartner::route('/{record}/edit'),
        ];
    }
}
