<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Books;

use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserPasswordLayout;
use App\Orchid\Layouts\User\UserRoleLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\UserSwitch;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use App\Orchid\Layouts\Book\BookEditLayout;
use App\Models\Books;
use App\Orchid\Screens\Books\BooksList;
use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\File;



use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Orchid\Filters\StatusFilter;
use App\Orchid\Layouts\Client\ClientListTable;
use App\Orchid\Layouts\CreateOrUpdateClient;
use App\Orchid\Layouts\OperatorSelection;
use App\View\Components\ProgressBoard;
use Carbon\Carbon;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Selection;

use Illuminate\Database\Eloquent\Relations\MorphToMany;


class BookEditScreen extends Screen
{
    /**
     * @var User
     */
    public $user;

    /**
     * Query data.
     *
     * @param User $user
     *
     * @return array
     */
    public function query(User $user, Books $book): iterable
    {
        $user->load(['roles']);
        $book->load('attachment');
        return [
            'user'       => $user,
            'permission' => $user->getStatusPermission(),
            'book' =>$book
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Добавить книгу';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return '';
    }

    /**
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
//            Button::make(__('Impersonate user'))
//                ->icon('login')
//                ->confirm('You can revert to your original state by logging out.')
//                ->method('loginAs')
//                ->canSee($this->user->exists && \request()->user()->id !== $this->user->id),
//
//            Button::make(__('Remove'))
//                ->icon('trash')
//                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
//                ->method('remove')
//                ->canSee($this->user->exists),
//
//            Button::make(__('Save'))
//                ->icon('check')
//                ->method('save'),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [

            Layout::block(BookEditLayout::class)
                ->title(__('Информация о книги'))
                ->description(__(''))
                ->commands(
                    Button::make(__('Добавить'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->method('save')
                ),
        ];
    }
            // Layout::block(UserPasswordLayout::class)
            //     ->title(__('Password'))
            //     ->description(__('Ensure your account is using a long, random password to stay secure.'))
            //     ->commands(
            //         Button::make(__('Save'))
            //             ->type(Color::DEFAULT())
            //             ->icon('check')
            //             ->canSee($this->user->exists)
            //             ->method('save')
            //     ),

            // Layout::block(UserRoleLayout::class)
            //     ->title(__('Roles'))
            //     ->description(__('A Role defines a set of tasks a user assigned the role is allowed to perform.'))
            //     ->commands(
            //         Button::make(__('Save'))
            //             ->type(Color::DEFAULT())
            //             ->icon('check')
            //             ->canSee($this->user->exists)
            //             ->method('save')
            //     ),

            // Layout::block(RolePermissionLayout::class)
            //     ->title(__('Permissions'))
            //     ->description(__('Allow the user to perform some actions that are not provided for by his roles'))
            //     ->commands(
            //         Button::make(__('Save'))
            //             ->type(Color::DEFAULT())
            //             ->icon('check')
            //             ->canSee($this->user->exists)
            //             ->method('save')
            //     ),



    /**
     * @param User    $user
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Books $book, Request $request)
    {
        // $customer->email = $request->request->get('email');
        $arrayBook = $request->get('books');

        // // dd($request->file('attachment'));
        $book-> name = $arrayBook['name'];
        $book-> author = $arrayBook['author'];
        $book-> genre = $arrayBook['genre'];
        $book-> year_publish = $arrayBook['year_publish'];
        $book-> year_write = $arrayBook['year_write'];
        $book-> discription = $arrayBook['discription'];
        $book-> count_page = $arrayBook['count_page'];
        
        // $item = Books::find(1);
        // $item->attachment()->get();
        // $image = $item->attachment()->first();

        //Получить URL адрес файла
        // $image->url();

        $book->fill($request->get('books'))->save();

        $book->attachment()->syncWithoutDetaching(
            $request->input('books.attachment', [])
        );
        $book->attachment()->syncWithoutDetaching(
            $request->input('books1.attachment', [])
        );
        // dd($book->attachment()->get()->first());
       $attachments_id = $book->attachment()->get()->first()->id;

        $db = pg_connect("host=db port=5432 dbname=app user=postgres password=root");

        $imgBook_id = pg_query($db,"SELECT * FROM attachments WHERE id= '" . $attachments_id . "'; ");
        $row = pg_fetch_array($imgBook_id);
        $path = $row['path'];
        $name = $row['name'];        ///получение адрес картинки книги
        $extension = $row['extension'];
        
        $attachments_id = $attachments_id + 1; 
        $fileBook_id = pg_query($db,"SELECT * FROM attachments WHERE id= '" . $attachments_id . "'; ");
       
        $rowFile = pg_fetch_array($fileBook_id);
 
        $pathFile = $rowFile['path'];
        $nameFile = $rowFile['name'];
        $extensionFile = $rowFile['extension'];
        
        $url = $path . $name . '.' . $extension;
        $urlFile = $pathFile . $nameFile . '.' . $extensionFile;
    
        
        $book-> urlImage = $url;
        $book-> urlFileBook = $urlFile ;
// dd($book);




        $book->save(); 
      
        Toast::info(__('Книга успешно добавлено!'));

        return redirect()->route('platform.books');
    }



    /**
     * @param Books $books
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function remove(Books $books)
    {
//        $books->delete();

        Toast::info(__('Книга успешно удалено'));

        return redirect()->route('platform.books');
    }

    public function printA(Books $books){
        dd($books);
    }

    /**
     * @param Books $books
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAs(User $user)
    {
        UserSwitch::loginAs($user);

        Toast::info(__('You are now impersonating this user'));

        return redirect()->route(config('platform.index'));
    }
}
