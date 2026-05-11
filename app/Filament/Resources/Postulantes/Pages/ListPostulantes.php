<?php

namespace App\Filament\Resources\Postulantes\Pages;

use App\Filament\Resources\Postulantes\PostulanteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPostulantes extends ListRecords
{
    protected static string $resource = PostulanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
