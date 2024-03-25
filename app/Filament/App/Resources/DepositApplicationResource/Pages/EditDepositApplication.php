<?php

namespace App\Filament\App\Resources\DepositApplicationResource\Pages;

use App\Filament\App\Resources\DepositApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDepositApplication extends EditRecord
{
    protected static string $resource = DepositApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
