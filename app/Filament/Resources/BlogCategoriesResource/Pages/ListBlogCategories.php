<?php

namespace App\Filament\Resources\BlogCategoriesResource\Pages;

use App\Filament\Resources\BlogCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogCategories extends ListRecords
{
    protected static string $resource = BlogCategoriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
