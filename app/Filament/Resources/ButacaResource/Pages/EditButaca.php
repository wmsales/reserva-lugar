<?php

namespace App\Filament\Resources\ButacaResource\Pages;

use App\Filament\Resources\ButacaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditButaca extends EditRecord
{
    protected static string $resource = ButacaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
