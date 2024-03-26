<?php
namespace App\Filament\App\Resources\LoanApplicationResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\LoanApplicationResource;
use Illuminate\Routing\Router;


class LoanApplicationApiService extends ApiService
{
    protected static string | null $resource = LoanApplicationResource::class;

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
