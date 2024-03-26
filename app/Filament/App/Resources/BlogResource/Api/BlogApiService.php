<?php
namespace App\Filament\App\Resources\BlogResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\BlogResource;
use Illuminate\Routing\Router;


class BlogApiService extends ApiService
{
    protected static string | null $resource = BlogResource::class;

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
