<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Book;

//use http\Env\Request;
use Illuminate\Http\Request;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Select;


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

          

            Select::make('books.genre')
                ->required()
                ->title(__('Жанр'))
                ->options([
                    'Cпорт'  => 'Cпорт',
                    'Хобби'  => 'Хобби',
                    'Родителям'  => 'Родителям',
                    'История' => 'История',
                    'Детские книги'  => 'Детские книги',
                    'Бизнес книги'  => 'Бизнес книги',
                    'Биографии'  => 'Биографии',
                    'Научная литература'  => 'Научная литература',
                  
                ])->empty('Не выбрано')
                ->placeholder(__('Жанр')),
            

           

            // Input::make('books.year_write')
            //     ->type('text')
            //     
            //     ->title(__('Дата написания книги'))
            //     ->placeholder(__('Дата написания книги')),
            DateTimer::make('books.year_publish')
                ->required()
                ->title(__('Дата публикации'))
                ->placeholder(__('Дата публикации'))
                ->format('Y'),

            DateTimer::make('books.year_write')
                ->required()
                ->title(__('Дата написания книги'))
                ->placeholder(__('Дата написания книги'))
                ->format('Y'),
                

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

            // Cropper::make('test.hero')
            //     ->targetId()
            //     ->title('Large web banner image, generally in the front and center')
            //     ->width(1000)
            //     ->height(500),

            Upload::make('books.attachment')
                ->title('Добавить картинку не более 3Mb')
                ->maxFiles(1)
                ->parallelUploads(1)
                // ->maxFileSize(1080)
                ,

            Upload::make('books1.attachment')
                ->title('Добавить книгу(файл) не более 50Mb')
                ->maxFiles(1)
                ->parallelUploads(1)
                // ->maxFileSize(1024)
            // Picture::make('picture')->storage('file'),
        ];
    }
}
