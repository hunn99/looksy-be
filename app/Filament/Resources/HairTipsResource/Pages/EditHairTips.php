<?php

namespace App\Filament\Resources\HairTipsResource\Pages;

use App\Filament\Resources\HairTipsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHairTips extends EditRecord
{
    protected static string $resource = HairTipsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
