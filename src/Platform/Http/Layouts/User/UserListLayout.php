<?php

declare(strict_types=1);

namespace Orchid\Platform\Http\Layouts\User;

use Orchid\Screen\Fields\TD;
use Orchid\Screen\Layouts\Table;
use Orchid\Platform\Http\Filters\RoleFilter;

class UserListLayout extends Table
{
    /**
     * @var string
     */
    public $data = 'users';

    /**
     * HTTP data filters.
     *
     * @return array
     */
    public function filters() : array
    {
        return [
            RoleFilter::class,
        ];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [
            TD::set('id', 'ID')
                ->align('center')
                ->width('100px')
                ->sort()
                ->link('platform.systems.users.edit', 'id'),
            TD::set('name', trans('platform::systems/users.name'))
                ->sort()
                ->link('platform.systems.users.edit', 'id', 'name'),
            TD::set('email', trans('platform::systems/users.email'))
                ->sort(),
            TD::set('updated_at', trans('platform::common.Last edit'))
                ->sort(),
        ];
    }
}