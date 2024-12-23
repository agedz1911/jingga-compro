<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeSliderResource\Pages;
use App\Filament\Resources\HomeSliderResource\RelationManagers;
use App\Models\HomeSlider;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeSliderResource extends Resource
{
    protected static ?string $model = HomeSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        $user = auth()->user();

        return $form
            ->schema([
                FileUpload::make('image')
                    ->directory('homeslider')
                    ->image()
                    ->helperText('image size: 1920x1080')
                    ->required(),
                TextInput::make('title'),
                Textarea::make('description'),
                TextInput::make('tage')
                    ->label('tag'),
                Hidden::make('created_by')
                    ->default($user ? $user->name : ''),
                Hidden::make('updated_by')
                    ->default($user ? $user->name : ''),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Home Slider')
                    ->stacked()
                    ->square(),
                TextColumn::make('title')
                    ->limit(30),
                TextColumn::make('description')
                    ->limit(50),
                TextColumn::make('tage')
                    ->label('tag'),
                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                TextColumn::make('updated_by')
                    ->visible(auth()->user()->hasRole('super_admin')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListHomeSliders::route('/'),
            'create' => Pages\CreateHomeSlider::route('/create'),
            'edit' => Pages\EditHomeSlider::route('/{record}/edit'),
        ];
    }
}
