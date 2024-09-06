<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrescriptionReviewResource\Pages;
use App\Filament\Resources\PrescriptionReviewResource\RelationManagers;
use App\Models\PrescriptionReview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrescriptionReviewResource extends Resource
{
    protected static ?string $model = PrescriptionReview::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('prescription_id')
                    ->required(),
                Forms\Components\Select::make('pharmacist_id')
                    ->required(),
                Forms\Components\Textarea::make('review_notes')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('approval_status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prescription_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pharmacist_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('approval_status'),
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
            'index' => Pages\ListPrescriptionReviews::route('/'),
            'create' => Pages\CreatePrescriptionReview::route('/create'),
            'edit' => Pages\EditPrescriptionReview::route('/{record}/edit'),
        ];
    }
}
