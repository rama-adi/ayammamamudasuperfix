<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DineInResource\Pages;
use App\Filament\Resources\DineInResource\RelationManagers;
use App\Models\DineIn;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DineInResource extends Resource
{
    protected static ?string $model = DineIn::class;

    protected static ?string $navigationGroup = 'CMS';
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('table_no')
                    ->required()
                    ->numeric(),
                Forms\Components\Repeater::make('orders')
                    ->required()
                    ->columns(4)
                    ->schema([
                        Forms\Components\Select::make('menu_id')
                            ->columnSpan(3)
                            ->label('Menu')
                            ->options(fn() => Menu::all()->pluck('name', 'id'))
                            ->required(),
                        Forms\Components\TextInput::make('quantity')
                            ->label('Qty')
                            ->numeric()
                            ->required()
                    ]),
                Forms\Components\Textarea::make('note')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('table_no')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListDineIns::route('/'),
            'create' => Pages\CreateDineIn::route('/create'),
            'edit' => Pages\EditDineIn::route('/{record}/edit'),
        ];
    }
}
