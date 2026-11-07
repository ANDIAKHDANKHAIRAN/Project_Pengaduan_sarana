<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('role')
                    ->label('Sebagai Siapa')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nis')
                    ->label('Nis')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kelas')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email_verified_at')
                    ->label('Email Verified_at')
                    ->dateTime()
                    ->placeholder('Belum diverifikasi')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
