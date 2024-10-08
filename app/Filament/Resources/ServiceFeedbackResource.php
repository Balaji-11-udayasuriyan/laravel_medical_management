<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceFeedbackResource\Pages;
use App\Filament\Resources\ServiceFeedbackResource\RelationManagers;
use App\Models\ServiceFeedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceFeedbackResource extends Resource
{
    protected static ?string $model = ServiceFeedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Review and Feedback Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user','name'),
                Forms\Components\Select::make('service_id')
                    ->relationship('service','name'),
                Forms\Components\TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Textarea::make('comment')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('service_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rating')
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
            'index' => Pages\ListServiceFeedback::route('/'),
            'create' => Pages\CreateServiceFeedback::route('/create'),
            'edit' => Pages\EditServiceFeedback::route('/{record}/edit'),
        ];
    }
}
