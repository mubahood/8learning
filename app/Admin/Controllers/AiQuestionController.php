<?php

namespace App\Admin\Controllers;

use App\Models\AiQuestion;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AiQuestionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'AiQuestion';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AiQuestion());

        $grid->model()->orderBy('id', 'desc');
        $grid->column('question', __('Question'))->sortable();
        $grid->column('answer', __('Answer'))->sortable();
        $grid->column('url', __('Url'))
            ->display(function ($url) {
                //audio player
                return "<audio controls><source src='" . $url . "' type='audio/mpeg'></audio>";
            });
        $grid->column('rating', __('Rating'))->sortable()->editable('select', [1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5']);

        $grid->column('print', __('Actions'))
            ->display(function () {
                $url = url('get-ai-answer?ai_question_id=' . $this->id);
                $html = "<a target='_blank' href='$url' class='btn btn-xs btn-primary'>Get AI Answer</a>";
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
        $show = new Show(AiQuestion::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('question', __('Question'));
        $show->field('answer', __('Answer'));
        $show->field('url', __('Url'));
        $show->field('rating', __('Rating'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new AiQuestion());

        $form->textarea('question', __('Question'));
        $form->hidden('answer', __('Answer'));
        $form->hidden('url', __('Url'));
        $form->hidden('rating', __('Rating'));

        return $form;
    }
}
