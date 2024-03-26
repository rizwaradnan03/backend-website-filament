<?php
namespace App\Filament\App\Resources\DepositApplicationResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\DepositApplicationResource;
use Illuminate\Routing\Router;


class DepositApplicationApiService extends ApiService
{
    protected static string | null $resource = DepositApplicationResource::class;

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
