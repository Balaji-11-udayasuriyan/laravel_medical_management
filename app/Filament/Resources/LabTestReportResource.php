<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LabTestReportResource\Pages;
use App\Filament\Resources\LabTestReportResource\RelationManagers;
use App\Models\LabTestReport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Enums\LabTestReportStatus;

class LabTestReportResource extends Resource
{
    protected static ?string $model = LabTestReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user','name'),
                Forms\Components\Select::make('appointment_id')
                    ->relationship('appointment','name'),
                Forms\Components\FileUpload::make('report_file')
                    ->image(),
                Forms\Components\Textarea::make('remarks')
                    ->columnSpanFull(),
                Forms\Components\Select::make('status')
                    ->options(LabTestReportStatus::Pending)
                    ->default('pending'),
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
                Tables\Columns\TextColumn::make('report_file')
                    ->searchable(),
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
            'index' => Pages\ListLabTestReports::route('/'),
            'create' => Pages\CreateLabTestReport::route('/create'),
            'edit' => Pages\EditLabTestReport::route('/{record}/edit'),
        ];
    }
}
