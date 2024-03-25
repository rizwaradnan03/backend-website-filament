<?php

namespace App\Filament\App\Resources\NewsResource\Pages;

use App\Filament\App\Resources\NewsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;
}
