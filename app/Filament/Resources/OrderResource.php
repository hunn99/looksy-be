<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ViewAction;



class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('order_date')
                    ->label('Order Date')
                    ->required(),
                TimePicker::make('order_time')
                    ->label('Order Time')
                    ->required(),
                BelongsToSelect::make('user_id')
                    ->label('Customer')
                    ->relationship('user', 'username')
                    ->required(),
                TextInput::make('total_price')
                    ->label('Total Price')
                    ->numeric()
                    ->required(),
                // Select::make('status')
                //     ->label('Status')
                //     ->options([
                //         'on_process' => 'On Process',
                //         'finished' => 'Finished',
                //         'declined' => 'Canceled',
                //     ])
                //     ->required(),
                Select::make('service.name')
                    ->label('Service')
                    ->multiple()
                    ->relationship('service', 'name')
                    ->options(function () {
                        return \App\Models\Service::all()->mapWithKeys(function ($service) {
                            return [$service->id => "{$service->name} - Rp. {$service->price}"];
                        })->toArray();
                    })
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order_date')
                    ->searchable()
                    ->sortable()
                    ->label('Order Date'),
                TextColumn::make('order_time')
                    ->searchable()
                    ->sortable()
                    ->label('Order Time'),
                TextColumn::make('user.username')
                    ->searchable()
                    ->sortable()
                    ->label('Customer'),
                TextColumn::make('total_price')
                    ->searchable()
                    ->sortable()
                    ->label('Total Price'),
                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'primary' => 'on_process',
                        'success' => 'finished',
                        'danger' => 'canceled',
                    ]),
            ])
            ->filters([
                // Tambahkan filter di sini jika diperlukan
            ])
            ->actions([
                Action::make('done')
                    ->label('Done')
                    ->color('success')
                    ->icon('heroicon-o-check')
                    ->button()
                    ->action(function ($record) {
                        $record->update(['status' => 'finished']);
                    })
                    ->visible(fn($record) => !in_array($record->status, ['finished', 'canceled'])), // Hanya tampil jika status bukan 'finished'

                ViewAction::make()->label('View Details'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relations jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'view' => Pages\ShowOrder::route('/{record}'),
        ];
    }
}
