<?php
declare(strict_types=1);
namespace App\Orchid\Layouts\Book;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Books;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use App\Orchid\Screens\Books\BookEditScreen;
use Orchid\Platform\Models\User;

class BookListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'books';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
             TD::make('name','Название книг'),
//              ->sort()
//                ->cantHide()
//                ->filter(Input::make())
//                ->render(function (Books $book) {
//                    return new Persona($book->presenter());
//                }),
//             ->Link::make(__('link'))
//                 ->route('platform.systems.BookEditScreen'),
             TD::make('author','Автор'),
             TD::make('genre','Жанр'),
             TD::make('year_publish','Год публикации'),
             TD::make('description','Описание'),
             TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Books $books) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Редактировать'))
                                ->route('platform.book.edit',$books->id)
                                ->icon('pencil'),

                            Button::make(__('Удалить'))
                                ->icon('trash')
                                ->confirm(__('Once the account '))
                                ->method('remove', [
                                    'id' => $books->id,
                                ]),

                        ]);
                }),
//            Button::make('hello'),
        ];
    }
}
