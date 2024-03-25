<?php

namespace App\Filament\App\Resources\BlogCategoriesResource\Pages;

use App\Filament\App\Resources\BlogCategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogCategories extends CreateRecord
{
    protected static string $resource = BlogCategoriesResource::class;
}
