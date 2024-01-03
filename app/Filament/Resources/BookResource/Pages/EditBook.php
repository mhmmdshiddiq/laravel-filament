<?php

namespace App\Filament\Resources\BookResource\Pages;

use App\Filament\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;


class EditBook extends EditRecord
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function(book $record){
                if($record->thumbnail){
                    Storage::disk('public')->delete($record->thumbnail);
                }
            }),
        ];
    }
}
