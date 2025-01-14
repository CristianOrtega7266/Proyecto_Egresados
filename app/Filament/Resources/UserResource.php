<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextInputColumn;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group'; 
    protected static ?string $navigationLabel = 'Usuarios';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Nombre'),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Correo Electrónico'),

                TextInput::make('password')
                    ->password()
                    ->label('Contraseña')
                    ->required(fn($context) => $context === 'create') // Requerido solo en creación
                    ->minLength(8)
                    ->dehydrateStateUsing(fn($state) => bcrypt($state)), // Encriptar la contraseña antes de guardarla

                Select::make('roles')
                    ->relationship('roles', 'name')
                    ->options(Role::all()->pluck('name', 'id')) // Cargar la lista de roles
                    ->label('Roles')
                    ->required()
                    ->searchable(), // Habilitar búsqueda en el select
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nombre'),
                Tables\Columns\TextColumn::make('email')->label('Correo Electrónico'),
                Tables\Columns\TextColumn::make('roles.name')->label('Roles'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
