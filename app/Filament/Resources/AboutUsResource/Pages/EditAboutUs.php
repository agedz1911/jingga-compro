<?php

namespace App\Filament\Resources\AboutUsResource\Pages;

use App\Filament\Resources\AboutUsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditAboutUs extends EditRecord
{
    protected static string $resource = AboutUsResource::class;

    protected function afterSave(): void
    {
        // Mengupdate nilai updated_by dengan pengguna yang sedang aktif
        $this->record->updated_by = Auth::user() ? Auth::user()->name : '';
        $this->record->save();
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
