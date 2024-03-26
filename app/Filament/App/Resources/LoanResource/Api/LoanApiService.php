<?php
namespace App\Filament\App\Resources\LoanResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\LoanResource;
use Illuminate\Routing\Router;


class LoanApiService extends ApiService
{
    protected static string | null $resource = LoanResource::class;

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
