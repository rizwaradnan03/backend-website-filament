<?php
namespace App\Filament\App\Resources\MetaResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\MetaResource;
use Illuminate\Routing\Router;


class MetaApiService extends ApiService
{
    protected static string | null $resource = MetaResource::class;

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
