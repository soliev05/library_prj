<?php


declare(strict_types=1);

namespace App\Orchid\Screens\Books;

use App\Models\Books;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Fields\Input;
use App\Orchid\Screens\Books\BookEditScreen;
use App\Orchid\Layouts\Book\BookListLayout;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Toast;







class BooksList extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Книги';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Список книг';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'books' => Books::all()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make(__('Добавить'))
                ->icon('plus')
                ->route('platform.BookEditScreen'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [BookListLayout::class
//
        ];
    }

    /**
     * @param Request $request
     */
    public function remove(Request $request): void
    {
        Books::findOrFail($request->get('id'))->delete();

        Toast::info(__('Книга успешно удалено'));
    }



}

//use Carbon\Carbon;
//use Carbon\CarbonPeriod;
//
//
//use Orchid\Screen\Layouts\Table;
////use vendor\orchid\platform\src\Screen\Layouts\Table;
////use Orchid\Support\Facades\Layout;
//use Illuminate\Support\Facades\DB;
//
//
//class BooksList extends Screen
//{
//    /**
//     * Query data.
//     *
//     * @return array
//     */
//    public function query(): iterable
//    {
//        return [
//            'books' => Books::all()
//        ];
//    }
//
//    /**
//     * Display header name.
//     *
//     * @return string|null
//     */
//    public function name(): ?string
//    {
//        return 'BooksList';
//    }
//
//    /**
//     * Button commands.
//     *
//     * @return \Orchid\Screen\Action[]
//     */
//    public function commandBar(): iterable
//    {
//        return [];
//    }
//
//    /**
//     * Views.
//     *
//     * @return \Orchid\Screen\Layout[]|string[]
//     */
//    public function layout(): array
//    {
//
//        return [
//
//            Layout::table('books',[
//
//                TD::make('name','Название книг'),
//                TD::make('author','Автор'),
//                TD::make('genre','Жанр'),
//                TD::make('year_publish','Год публикации'),
//                TD::make('description','Описание'),
//            ])
//        ];
//    }
//}
