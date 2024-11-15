<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ButacaResource\Pages;
use App\Filament\Resources\ButacaResource\RelationManagers;
use App\Models\Butaca;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class ButacaResource extends Resource
{
    protected static ?string $model = Butaca::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('asiento')
                ->label('ID Asiento')
                    ->required(),
                Forms\Components\TextInput::make('cliente')
                ->label('Nombre de cliente'),
                Forms\Components\TextInput::make('codigo_pago')
                ->label('Código de pago'),
                Forms\Components\Select::make('estado')
                ->options([
                    'Disponible' => 'Disponible',
                    'Reservado' => 'Reservado',
                    'No disponible' => 'No disponible',
                ])
                ->default('Disponible')
                ->label('Estado')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('asiento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cliente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('codigo_pago')
                    ->searchable(),
                Tables\Columns\TextColumn::make('estado')
                    ->badge()
                    ->colors([
                        'success' => 'Disponible',
                        'warning' => 'Reservado',
                        'danger' => 'No disponible',
                    ]),
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
                Tables\Filters\SelectFilter::make('estado')
                    ->options([
                        'Disponible' => 'Disponible',
                        'Reservado' => 'Reservado',
                        'No disponible' => 'No disponible',
                    ]),
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
            'index' => Pages\ListButacas::route('/'),
            'create' => Pages\CreateButaca::route('/create'),
            'edit' => Pages\EditButaca::route('/{record}/edit'),
        ];
    }
}
