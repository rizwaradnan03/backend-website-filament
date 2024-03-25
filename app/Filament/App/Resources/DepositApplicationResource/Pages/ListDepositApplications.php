<?php

namespace App\Filament\App\Resources\DepositApplicationResource\Pages;

use App\Filament\App\Resources\DepositApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDepositApplications extends ListRecords
{
    protected static string $resource = DepositApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
