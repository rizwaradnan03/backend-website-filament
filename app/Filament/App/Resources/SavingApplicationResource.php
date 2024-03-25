<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\SavingApplicationResource\Pages;
use App\Filament\App\Resources\SavingApplicationResource\RelationManagers;
use App\Models\Saving;
use App\Models\SavingApplication;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SavingApplicationResource extends Resource
{
    protected static ?string $model = SavingApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('saving_id')->options(Saving::all()->pluck('product', 'id'))->required(),
                TextInput::make('first_name')->required(),
                TextInput::make('last_name')->required(),
                TextInput::make('address')->required(),
                TextInput::make('phone')->required()->numeric(),
                TextInput::make('amount')->required()->numeric(),
                // TextInput::make('jangka_waktu')->required()->numeric(),
                TextInput::make('no_identitas')->required(),
                TextInput::make('email')->required(),
                TextInput::make('kode_pengajuan')->required(),
                Select::make('status')->options([
                    'pending' => 'pending',
                    'processing' => 'processing',
                    'accepted' => 'accepted',
                ])->required(),
                TextInput::make('ibu_kandung')->required(),
                FileUpload::make('ktp_upload')->required()->image(),
                FileUpload::make('ktp_selfie')->required()->image(),
                TextInput::make('employment')->required(),
                TextInput::make('salary')->required()->numeric(),
                TextInput::make('province')->required(),
                TextInput::make('city')->required(),
                TextInput::make('subdistrict')->required(),
                TextInput::make('ward')->required(),
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
            'index' => Pages\ListSavingApplications::route('/'),
            'create' => Pages\CreateSavingApplication::route('/create'),
            'edit' => Pages\EditSavingApplication::route('/{record}/edit'),
        ];
    }
}
