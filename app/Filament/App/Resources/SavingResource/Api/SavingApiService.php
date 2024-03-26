<?php
namespace App\Filament\App\Resources\SavingResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\SavingResource;
use Illuminate\Routing\Router;


class SavingApiService extends ApiService
{
    protected static string | null $resource = SavingResource::class;

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
