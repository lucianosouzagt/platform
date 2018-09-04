<?php
declare(strict_types=1);
namespace App\Orchid\Layouts\Category;
use Orchid\Screen\Fields\Field;
use Orchid\Screen\Layouts\Rows;
class CategoryEditLayout extends Rows
{
    /**
     * Views
     *
     * @return array
     * @throws \Orchid\Platform\Exceptions\TypeException
     */
    public function fields(): array
    {
        //dd($this->query->getContent('category'));
        $fields[] =  Field::tag('input')
            ->type('text')
            ->name('category.content.name')
            /*
            ->modifyValue(function () {
                if (isset( $this->query->getContent('category')->term )) {
                    return $this->query->getContent('category')->term->GetContent('name');
                }
            })*/
            ->max(255)
            ->require()
            ->title(trans('platform::systems/category.fields.name_title'))
            ->placeholder(trans('platform::systems/category.fields.name_title'))
            ->help(trans('platform::systems/category.fields.name_help'));
/*
        $fields[] =  Field::tag('input')
            ->type('text')
            ->name('category.term.slug')
            ->max(255)
            ->require()
            ->title(trans('platform::systems/category.slug'));
*/
/*
        $fields[] = Field::tag('select')
            ->options(function () {
                return $this->query
                    ->getContent('catselect');
            })

            ->modifyValue(function () {
                $parent_id=$this->query->getContent('category')->parent_id;
                return  [$parent_id => $this->query->getContent('catselect')[$parent_id]];

            })
            ->class('select2')
            ->name('category.parent_id')
            ->title(trans('platform::systems/category.parent'))
            ->placeholder(trans('platform::systems/category.parent'));
*/

        $fields[] =  Field::tag('wysiwyg')
            ->name('category.content.body')
            /*
            ->modifyValue(function () {
                return $this->query->getContent('category')->term->GetContent('body');
            })*/
          ->title(trans('platform::systems/category.descriptions'));

        return $fields;
    }
}