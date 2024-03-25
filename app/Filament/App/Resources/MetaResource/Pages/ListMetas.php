<?php

namespace App\Filament\App\Resources\MetaResource\Pages;

use App\Filament\App\Resources\MetaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetas extends ListRecords
{
    protected static string $resource = MetaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
