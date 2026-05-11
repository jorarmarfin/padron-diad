<?php

namespace App\Filament\Resources\Postulantes;

use App\Filament\Resources\Postulantes\Pages\CreatePostulante;
use App\Filament\Resources\Postulantes\Pages\EditPostulante;
use App\Filament\Resources\Postulantes\Pages\ListPostulantes;
use App\Filament\Resources\Postulantes\Schemas\PostulanteForm;
use App\Filament\Resources\Postulantes\Tables\PostulantesTable;
use App\Models\Postulante;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PostulanteResource extends Resource
{
    protected static ?string $model = Postulante::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PostulanteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PostulantesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPostulantes::route('/'),
            'create' => CreatePostulante::route('/create'),
            'edit' => EditPostulante::route('/{record}/edit'),
        ];
    }
}
