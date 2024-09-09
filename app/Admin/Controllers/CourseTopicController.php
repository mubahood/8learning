<?php

namespace App\Admin\Controllers;

use App\Models\CourseTopic;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CourseTopicController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Course Topics';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CourseTopic());

        // $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('Course Topic'))->sortable();
        $grid->column('course_chapter_id', __('Course Chapter'))
            ->display(function () {
                if ($this->course_chapter == null) {
                    return 'N/A';
                }
                return $this->course_chapter->name;
            })->sortable();
        $grid->column('type', __('Type'))
            ->label([
                'video' => 'primary',
                'youtube' => 'success',
                'files' => 'info',
            ])->filter([
                'video' => 'Video',
                'youtube' => 'Youtube',
                'files' => 'Files',
            ]);
        $grid->column('video', __('Video'))
            ->display(function ($video) {
                if ($this->type == 'video') {
                    $link = url('storage/' . $video);
                    return "<a href='" . $link . "' target='_blank'>Watch Video</a>";
                }
                return 'N/A';
            });
        $grid->column('youtube', __('Youtube'))
            ->display(function ($youtube) {
                if ($this->type == 'youtube') {
                    return "<a href='" . $youtube . "' target='_blank'>Watch Youtube</a>";
                }
                return 'N/A';
            });
        $grid->column('files', __('Files'))
            ->display(function ($files) {
                if ($this->type == 'files') {
                    if ($files == null) {
                        return 'N/A';
                    }
                    $files = json_decode($files);
                    $html = '';
                    foreach ($files as $file) {
                        $link = url('storage/' . $file);
                        $html .= "<a href='" . $link . "' target='_blank'>Download File</a><br>";
                    }
                    return $html;
                }
                return 'N/A';
            }); //->downloadable();
        $grid->column('minutes', __('Minutes'));
        // $grid->column('course_id', __('Course id'));

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
        $show = new Show(CourseTopic::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('course_chapter_id', __('Course chapter id'));
        $show->field('name', __('Name'));
        $show->field('type', __('Type'));
        $show->field('video', __('Video'));
        $show->field('youtube', __('Youtube'));
        $show->field('files', __('Files'));
        $show->field('description', __('Description'));
        $show->field('minutes', __('Minutes'));
        $show->field('course_id', __('Course id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CourseTopic());



        $form->select('course_chapter_id', __('Course chapter'))
            ->options(\App\Models\CourseChapter::all()->pluck('name', 'id'))
            ->required();
        $form->text('name', __('Title'))->required();
        $form->radioCard('type', __('Content Type'))
            ->options([
                'video' => 'Video',
                'youtube' => 'Youtube',
                'files' => 'Files',
            ])
            ->when('video', function (Form $form) {
                $form->file('video', __('Video'))
                    ->rules('mimetypes:video/*');
            })
            ->when('youtube', function (Form $form) {
                $form->url('youtube', __('Youtube'));
            })
            ->when('files', function (Form $form) {
                $form->multipleFile('files', __('Files'));
            })->rules('required');
        /*         $form->textarea('video', __('Video'));
        $form->textarea('youtube', __('Youtube'));
        $form->textarea('files', __('Files')); */
        $form->decimal('minutes', __('Minutes'))->required();
        $form->summernote('description', __('Content Details'));
        /*         $form->number('course_id', __('Course id'))->default(1); */

        return $form;
    }
}
