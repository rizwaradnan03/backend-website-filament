<?php
namespace App\Filament\App\Resources\OfficeResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\OfficeResource;
use Illuminate\Routing\Router;


class OfficeApiService extends ApiService
{
    protected static string | null $resource = OfficeResource::class;

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
