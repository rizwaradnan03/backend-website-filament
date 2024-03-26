<?php
namespace App\Filament\App\Resources\CarouselResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\App\Resources\CarouselResource;
use Illuminate\Routing\Router;


class CarouselApiService extends ApiService
{
    protected static string | null $resource = CarouselResource::class;

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
