<?php

namespace App\Admin\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseChapter;
use App\Models\Utils;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Form\NestedForm;
use Encore\Admin\Form\Tools;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use phpDocumentor\Reflection\Location;

class CourseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Courses';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Course());
        $grid->quickSearch('name')->placeholder('Search by title');
        $grid->column('id', __('Id'));
        $grid->column('thumbnail', __('Thumbnail'))->image('', 80, 80)
            ->width(85);
        $grid->disableBatchActions();
        $grid->column('created_at', __('Created'))
            ->display(function ($created_at) {
                return Utils::my_date($created_at);
            });
        $grid->column('name', __('Title'))->sortable();
        $grid->column('total_hours', __('Total hours'));
        $grid->column('administrator_id', __('Created by'))
            ->display(function () {
                $u = Administrator::find($this->administrator_id);
                if ($u) {
                    return $u->name;
                }
                return "Unknown";
            })->sortable();
        $grid->column('course_category_id', __('Category'))
            ->display(function () {
                $u = CourseCategory::find($this->course_category_id);
                if ($u) {
                    return $u->name;
                }
                return "Unknown";
            })->sortable();
        $grid->column('level', __('Level'))->sortable();

        $grid->column('has_certificate', __('Has certificate'))
            ->label([
                0 => 'Danger',
                1 => 'Success',
            ])
            ->filter([
                0 => 'No',
                1 => 'Yes',
            ]);
        // $grid->column('skills', __('Skills'));
        // $grid->column('prerequisits', __('Prerequisits'));
        $grid->column('tags', __('Tags'))
            ->display(function ($tags) {
                $tags = explode(",", $tags);
                $html = "";
                foreach ($tags as $tag) {
                    $html .= "<span class='label label-primary'>$tag</span>&nbsp;";
                }
                return $html;
            }); 
        $grid->column('language', __('Language'))
            ->hide();

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
        $show = new Show(Course::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('administrator_id', __('Administrator id'));
        $show->field('course_category_id', __('Course category id'));
        $show->field('name', __('Name'));
        $show->field('price', __('Price'));
        $show->field('total_hours', __('Total hours'));
        $show->field('level', __('Level'));
        $show->field('thumbnail', __('Thumbnail'));
        $show->field('introduction_video', __('Introduction video'));
        $show->field('has_certificate', __('Has certificate'));
        $show->field('details', __('Details'));
        $show->field('skills', __('Skills'));
        $show->field('prerequisits', __('Prerequisits'));
        $show->field('tags', __('Tags'));
        $show->field('language', __('Language'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {

        $form = new Form(new Course());



        $form->tab('Basic info', function ($form) {

            $form->setTitle("Creating course");

            $users = [];
            foreach (Administrator::all() as $key => $value) {
                $users[$value->id] = $value->name . " - " . $value->id;
                /* if ($value->isRole('instructor')) {
                } */
            }
            if (Admin::user()->isRole('administrator')) {
                $form->select('administrator_id', __('Course instructor'))
                    ->options($users)
                    ->default(2)
                    ->required();
            } else {
                $form->select('administrator_id', __('Course instructor'))
                    ->options($users)
                    ->default(Admin::user()->id)
                    ->readonly()
                    ->required();
            }



            $form->select('course_category_id', __('Course category'))
                ->options(CourseCategory::all()->pluck('name', 'id'))
                ->default(1)
                ->required();
            $form->text('name', __('Course Name'))->required()->default("HTML for web beginners");


            $form->text('price', __('Course Price (in UGX)'))->required()->attribute('type', 'number');
            $form->text('total_hours', __('Course total time (in Hours)'))->required()->attribute('type', 'number');
            $form->select('level', __('Course level'))
                ->options([
                    'Beginner level' => 'Beginner level',
                    'Intermediate level' => 'Intermediate level',
                    'Advanced level' => 'Advanced level',
                ])
                ->required();
            $form->image('thumbnail', __('Thumbnail'))->required();
            $form->file('introduction_video', __('Introduction video'));
            $form->radio('has_certificate', __('Has certificate?'))
                ->options([
                    'Yes' => 'Yes',
                    'No' => 'No',
                ])
                ->required();
            $form->tags('tags', __('Tags'));
            $form->summernote('details', 'Course details')->required();
        });



        $form->tab('Course chapters', function ($form) {
            $form->setWidth(6, 4);
            $form->html("<h4>Click on NEW to add course chapters</h4>");
            $form->hasMany('course_chapters', __(''), function (NestedForm $form) {
                $form->text('name', __('Course Chapter name'))->required();
            });
        });

       /*  if ($form->isEditing()) {

            $form->tab('Chapter Topics', function ($form) {
                $form->setWidth(6, 4);
                $form->hasMany('course_topics', __('Click on NEW to add course topic'), function (NestedForm $form) {
                    $id = request()->route()->parameters['course'];
                    $model = Course::find($id);
                    if (!$model) {
                        dd("Coruse not found");
                    }

                    $form->select('course_chapter_id', __('Select chapter'))
                        ->options($model->course_chapters->pluck('name', 'id'))
                        ->default(1)
                        ->required();
                    $form->text('name', __('Chapter title'))->required();
                    $form->text('minutes', __('Length (in Minutes)'))->attribute('type', 'number')->required();
                    $form->radio('type', __('Main content type'))
                        ->options([
                            'Video' => 'Video',
                            'Youtube Video' => 'Youtube Video',
                            'File' => 'File',
                            'Text' => 'Text',
                        ])->required();

                    $form->file('video', __('Upload Video'));
                    $form->url('youtube', __('Youtube Video'));
                    $form->multipleFile('files', __('Other files'));
                    $form->summernote('description', __('Notes'));
                });
            });
        } */

        $form->tab('Course Visibility', function ($form) {

            $form->setWidth(6, 4);
            $form->radio('visibility', __('Course visibility'))
                ->options([
                    '0' => 'Draft',
                    '1' => 'Publish',
                ])
                ->default(0)
                ->required();
        });




        $form->tools(function (Form\Tools $tools) {

            $tools->disableDelete();
            $tools->disableView();
        });

        $form->disableReset();
        $form->disableViewCheck();
        $form->disableCreatingCheck();



        return $form;
    }
}
