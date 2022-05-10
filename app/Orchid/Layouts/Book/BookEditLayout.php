<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Book;

//use http\Env\Request;
use Illuminate\Http\Request;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class BookEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]

     * @param Books    $books
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */


    public function getBook(Request $request): array
    {
        return dd($request);
    }

    public function fields(): array
    {
        return [

            Input::make('books.name')
                ->type('text')
                ->max(255)
                ->value('')
                ->method('getBook')
                ->required()
                ->title(__('Название книги'))
                ->placeholder(__('Название книги')),

            Input::make('books.author')
                ->type('text')
                ->required()
                ->title(__('Автор'))
                ->placeholder(__('Автор')),

            Input::make('books.genre')
                ->type('text')
                ->required()
                ->title(__('Жанр'))
                ->placeholder(__('Жанр')),

            Input::make('books.year_publish')
                ->type('text')
                ->required()
                ->title(__('Дата публикации'))
                ->placeholder(__('Дата публикации')),

            Input::make('books.year_write')
                ->type('text')
                ->required()
                ->title(__('Дата написания книги'))
                ->placeholder(__('Дата написания книги')),

            Input::make('books.discription')
                ->type('text')
                ->required()
                ->title(__('Описание'))
                ->placeholder(__('Описание')),

            Input::make('books.count_page')
                ->type('text')
                ->required()
                ->title(__('Количество страниц'))
                ->placeholder(__('Количество страниц')),
        ];
    }
}
