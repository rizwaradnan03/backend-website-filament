<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\BlogResource\Pages;
use App\Filament\App\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\BlogCategory;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

// $blog = Blog::find('1');
// echo "<pre>";
// print_r($blog->blog_categories);
// die;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('slug')->required(),
                Select::make('blog_category_id')
                    ->relationship(name: 'blog_categories', titleAttribute: 'name', modifyQueryUsing: fn (Builder $query) => $query->whereBelongsTo(Filament::getTenant()))
                    ->options(BlogCategory::all()->pluck('name', 'id'))
                    ->preload()
                    ->searchable()
                    ->required(),
                FileUpload::make('image')->required()->image(),
                TinyEditor::make('content')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('slug')->searchable(),
                TextColumn::make('blog_categories.name')->searchable(),
            ])
            ->filters([
                // SelectFilter::make('blog_category_id')
                // ->options(BlogCategory::pluck('name', 'id'))
                // ->searchable()
                // ->label('Filter Blog By Category')
                // ->indicator('Blog Category')
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
            // BlogCategory::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
