<?php
namespace App\Filament\App\Resources\NewsResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\NewsResource;
use Illuminate\Routing\Router;


class NewsApiService extends ApiService
{
    protected static string | null $resource = NewsResource::class;

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
