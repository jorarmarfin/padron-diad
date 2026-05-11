<?php

namespace App\Filament\Resources\Postulantes\Pages;

use App\Filament\Resources\Postulantes\PostulanteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPostulante extends EditRecord
{
    protected static string $resource = PostulanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
