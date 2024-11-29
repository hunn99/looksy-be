<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HairTipsResource\Pages;
use App\Models\HairTips;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload; // Import FileUpload

class HairTipsResource extends Resource
{
    protected static ?string $model = HairTips::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('hair_type')
                    ->label('Hair Type')
                    ->required(),
                TextInput::make('characteristic_hair')
                    ->label('Characteristic')
                    ->required(),
                TextInput::make('description')
                    ->label('Description')
                    ->required(),
                FileUpload::make('photo') // Use FileUpload for uploading images
                    ->label('Photo')
                    ->image() // Specifies that this field is for images
                    ->directory('hair_tips') // Specify the directory where the images will be uploaded
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hair_type')
                    ->searchable()
                    ->sortable()
                    ->label('Hair Type'),
                TextColumn::make('characteristic_hair')
                    ->searchable()
                    ->sortable()
                    ->label('Characteristic')
                    ->limit(50),
                TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->label('Description')
                    ->limit(50),
                ImageColumn::make('photo') // Use ImageColumn for displaying the image
                    ->searchable()
                    ->sortable()
                    ->label('Photo'),
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
            'index' => Pages\ListHairTips::route('/'),
            'create' => Pages\CreateHairTips::route('/create'),
            'edit' => Pages\EditHairTips::route('/{record}/edit'),
        ];
    }
}
