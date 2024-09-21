<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrescriptionReportResource\Pages;
use App\Filament\Resources\PrescriptionReportResource\RelationManagers;
use App\Models\PrescriptionReport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrescriptionReportResource extends Resource
{
    protected static ?string $model = PrescriptionReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Reports & Analytics Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user','name'),
                Forms\Components\Select::make('doctor_id')
                    ->relationship('doctor','name'),
                Forms\Components\Select::make('medicine_name')
                    ->relationship('medicine','name'),
                Forms\Components\TextInput::make('dosage')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('frequency')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('prescription_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('doctor_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('medicine_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dosage')
                    ->searchable(),
                Tables\Columns\TextColumn::make('frequency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('prescription_date')
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
            'index' => Pages\ListPrescriptionReports::route('/'),
            'create' => Pages\CreatePrescriptionReport::route('/create'),
            'edit' => Pages\EditPrescriptionReport::route('/{record}/edit'),
        ];
    }
}
