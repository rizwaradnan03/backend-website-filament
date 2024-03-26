<?php
namespace App\Filament\App\Resources\DepositResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\DepositResource;
use Illuminate\Routing\Router;


class DepositApiService extends ApiService
{
    protected static string | null $resource = DepositResource::class;

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
