<?php

namespace App\Admin\Controllers;

use App\Models\SMSIntergration;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SMSIntergrationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SMS Intergration';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SMSIntergration());
        $grid->model()->orderBy('id', 'desc');
        $grid->quickSearch('receiver')->placeholder('Search by receiver');

        $grid->column('created_at', __('Created'))
            ->display(function ($created_at) {
                return date('d M Y', strtotime($created_at));
            })->sortable();
        $grid->column('receiver', __('Receiver'))->sortable();
        $grid->column('message', __('Message'))->sortable();
        $grid->column('status', __('Status'))
            ->display(function ($status) {
                if ($status == 'success') {
                    return "<span class='label label-success'>Success</span>";
                } else {
                    return "<span class='label label-info'>Failed</span>";
                }
            })->sortable();
        $grid->column('response', __('Response'))->sortable();

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
        $show = new Show(SMSIntergration::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('receiver', __('Receiver'));
        $show->field('message', __('Message'));
        $show->field('status', __('Status'));
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
        $form = new Form(new SMSIntergration());

        $form->text('receiver', __('Receiver'))->required();
        $form->textarea('message', __('Message'))->required();

        return $form;
    }
}
