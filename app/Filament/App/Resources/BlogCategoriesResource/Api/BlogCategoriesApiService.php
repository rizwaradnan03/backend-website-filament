<?php
namespace App\Filament\App\Resources\BlogCategoriesResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\BlogCategoriesResource;
use Illuminate\Routing\Router;


class BlogCategoriesApiService extends ApiService
{
    protected static string | null $resource = BlogCategoriesResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
