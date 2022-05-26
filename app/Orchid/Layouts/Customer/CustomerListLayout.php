<?php
declare(strict_types=1);
namespace App\Orchid\Layouts\Customer;

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
use App\Models\Customer;

class CustomerListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'customer';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
             TD::make('name','Имя'),
             TD::make('email','Email'),
             TD::make('created_at','Дата регистрация'),
             TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Customer $customer) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Button::make(__('Удалить'))
                                ->icon('trash')
                                ->confirm(__('Once the account '))
                                ->method('remove', [
                                    'id' => $customer->id,
                                ]),

                        ]);
                }),

        ];
    }
}
