<?php

namespace App\Admin\Controllers;

use App\Models\DynamicsApi;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DynamicsApiController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Microsoft 365 Dynamics API';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new DynamicsApi());

        $grid->model()->orderBy('id', 'desc');
        $grid->column('title', __('Title'))->sortable();
        $grid->column('url', __('Url'))->sortable();
        $grid->column('response', __('Response'))
            ->display(function ($response) {
                //display as json
                return json_encode(json_decode($response), JSON_PRETTY_PRINT);
            })->sortable();

        //run url
        $grid->column('run', __('Run'))
            ->display(function () {
                $url = url('api/dynamics-api?id=' . $this->id);
                $html = "<a target='_blank' href='$url' class='btn btn-xs btn-primary'>Run</a>";
                return $html;
            });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(DynamicsApi::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('title', __('Title'));
        $show->field('url', __('Url'));
        $show->field('response', __('Response'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new DynamicsApi());

        $form->text('title', __('Title'))->rules('required');
        $form->text('url', __('Url'))->rules('required');
        $form->hidden('response', __('Response'));

        return $form;
    }
}
