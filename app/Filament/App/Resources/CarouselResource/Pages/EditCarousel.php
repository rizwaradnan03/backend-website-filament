<?php

namespace App\Filament\App\Resources\CarouselResource\Pages;

use App\Filament\App\Resources\CarouselResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarousel extends EditRecord
{
    protected static string $resource = CarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
