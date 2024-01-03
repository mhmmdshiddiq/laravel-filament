<?php

namespace App\Filament\Resources\PartnerResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PartnerResource;
use App\Models\Partner;

class EditPartner extends EditRecord
{
    protected static string $resource = PartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function(partner $record){
                if($record->thumbnail){
                    Storage::disk('public')->delete($record->thumbnail);
                }
            }),
        ];
    }
}
