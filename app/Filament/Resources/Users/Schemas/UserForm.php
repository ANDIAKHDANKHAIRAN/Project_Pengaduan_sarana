<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\components\ToggleButtons;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                ToggleButtons::make('role')
                    ->label('Sebagai')
                    ->options([
                        'admin' => 'Admin',
                        'siswa' => 'Siswa',
                    ])
                    ->inline()
                    ->default('siswa'),
                TextInput::make('nis')
                    ->default(null),
                TextInput::make('kelas')
                    ->default(null),
                DateTimePicker::make('email_verified_at')
                ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
            ]);
    }
}
