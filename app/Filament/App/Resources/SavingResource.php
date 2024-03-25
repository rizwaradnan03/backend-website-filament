<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\SavingResource\Pages;
use App\Filament\App\Resources\SavingResource\RelationManagers;
use App\Models\Saving;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class SavingResource extends Resource
{
    protected static ?string $model = Saving::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('product')->required(),
                TextInput::make('slug')->required(),
                TextInput::make('suku_bunga')->required()->numeric(),
                FileUpload::make('image')->required()->image(),
                TinyEditor::make('content')->required(),
                TinyEditor::make('terms_and_conditions')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListSavings::route('/'),
            'create' => Pages\CreateSaving::route('/create'),
            'edit' => Pages\EditSaving::route('/{record}/edit'),
        ];
    }
}
