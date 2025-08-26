<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Textarea::make('short_description')
                    ->required(),
                FileUpload::make('profile_pictures')
                    ->image()
                    ->required(),
            ]);
    }
}
