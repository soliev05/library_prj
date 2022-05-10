<?php

namespace App\Orchid\Screens\Books;

use Orchid\Screen\Screen;

use App\Models\Books;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
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
use App\Orchid\Layouts\Book\BookEditLayout;

use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserPasswordLayout;
use App\Orchid\Layouts\User\UserRoleLayout;
use Orchid\Support\Color;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\UserSwitch;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;

class BookChangeScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return ['books' => Books::all()];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактировать';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
//             Link::make(__('Добавить'))
//                ->icon('plus')

        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
           Layout::block( BookEditLayout ::class)
              ->title(__(''))
                ->description(__(' address.'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')

                        ->method('save')
                ),
        ];
    }


     public function save(User $user, Request $request)
    {

        return $request;
    }
}
