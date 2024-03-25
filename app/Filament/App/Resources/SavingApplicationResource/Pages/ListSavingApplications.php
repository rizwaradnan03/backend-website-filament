<?php

namespace App\Filament\App\Resources\SavingApplicationResource\Pages;

use App\Filament\App\Resources\SavingApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSavingApplications extends ListRecords
{
    protected static string $resource = SavingApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
