<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\DepositApplicationResource\Pages;
use App\Filament\App\Resources\DepositApplicationResource\RelationManagers;
use App\Models\Deposit;
use App\Models\DepositApplication;
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

class DepositApplicationResource extends Resource
{
    protected static ?string $model = DepositApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('deposit_id')->options(Deposit::all()->pluck('product', 'id'))->required(),
                TextInput::make('first_name')->required(),
                TextInput::make('last_name')->required(),
                TextInput::make('address')->required(),
                TextInput::make('phone')->required()->numeric(),
                TextInput::make('amount')->required()->numeric(),
                TextInput::make('jangka_waktu')->required()->numeric(),
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
            'index' => Pages\ListDepositApplications::route('/'),
            'create' => Pages\CreateDepositApplication::route('/create'),
            'edit' => Pages\EditDepositApplication::route('/{record}/edit'),
        ];
    }
}