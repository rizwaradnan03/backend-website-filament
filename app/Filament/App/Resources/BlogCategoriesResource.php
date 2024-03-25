<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\BlogCategoriesResource\Pages;
use App\Filament\App\Resources\BlogCategoriesResource\RelationManagers;
use App\Models\BlogCategories;
use App\Models\BlogCategory;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogCategoriesResource extends Resource
{
    protected static ?string $model = BlogCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
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

    // public function infoList(Infolist $infolist): infoList
    // {
    //     return $infolist
    //         ->schema([
    //             Section::make('Blog Categories Info')
    //                 ->schema([
    //                     TextEntry::make('name'),
    //                     TextEntry::make('blog_categories_count')
    //                         ->state(function (Model $record): int {
    //                             return $record->blogcategories->count();
    //                         }),
    //                 ])->columns(2)
    //         ]);
    // }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogCategories::route('/'),
            'create' => Pages\CreateBlogCategories::route('/create'),
            'edit' => Pages\EditBlogCategories::route('/{record}/edit'),
        ];
    }
}
