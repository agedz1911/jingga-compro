<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsUpdateResource\Pages;
use App\Filament\Resources\NewsUpdateResource\RelationManagers;
use App\Models\NewsUpdate;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class NewsUpdateResource extends Resource
{
    protected static ?string $model = NewsUpdate::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        $user = auth()->user();

        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                TextInput::make('location')
                    ->required(),
                MarkdownEditor::make('description'),
                Hidden::make('created_by')
                    ->default($user ? $user->name : ''),
                Hidden::make('updated_by')
                    ->default($user ? $user->name : ''),
                FileUpload::make('image')
                    ->helperText(new HtmlString('<small style="color:red; "><sup>*</sup><i>Max 3Mb</i></small>'))
                    ->required()
                    ->maxSize(3072)
                    ->downloadable()
                    ->reorderable()
                    ->panelLayout('grid')
                    ->image()
                    ->imageEditor()
                    ->directory('news_update'),
                Toggle::make('is_active')
                    ->inline()
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->allowDuplicates()
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('description')
                    ->limit(100)
                    ->markdown(),
                ImageColumn::make('image'),
                IconColumn::make('is_active')
                    ->sortable()
                    ->boolean()
                    ->label('Publish'),
                TextColumn::make('created_at')
                    ->since()
                    ->sortable()
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
            'index' => Pages\ListNewsUpdates::route('/'),
            'create' => Pages\CreateNewsUpdate::route('/create'),
            'edit' => Pages\EditNewsUpdate::route('/{record}/edit'),
        ];
    }
}
