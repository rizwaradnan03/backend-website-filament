<?php
namespace App\Filament\App\Resources\SavingApplicationResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\SavingApplicationResource;
use Illuminate\Routing\Router;


class SavingApplicationApiService extends ApiService
{
    protected static string | null $resource = SavingApplicationResource::class;

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
