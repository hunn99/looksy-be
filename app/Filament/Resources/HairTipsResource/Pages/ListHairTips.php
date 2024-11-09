<?php

namespace App\Filament\Resources\HairTipsResource\Pages;

use App\Filament\Resources\HairTipsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHairTips extends ListRecords
{
    protected static string $resource = HairTipsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
