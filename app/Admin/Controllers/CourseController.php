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
    protected $title = 'Course';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Course());

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('administrator_id', __('Administrator id'));
        $grid->column('course_category_id', __('Course category id'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('Price'));
        $grid->column('total_hours', __('Total hours'));
        $grid->column('level', __('Level'));
        $grid->column('thumbnail', __('Thumbnail'));
        $grid->column('introduction_video', __('Introduction video'));
        $grid->column('has_certificate', __('Has certificate'));
        $grid->column('details', __('Details'));
        $grid->column('skills', __('Skills'));
        $grid->column('prerequisits', __('Prerequisits'));
        $grid->column('tags', __('Tags'));
        $grid->column('language', __('Language'));

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

        Utils::start_session();
        $form = new Form(new Course());
        $step = 1;
        $temp_step = 0;
        $this_url = $_SERVER['REQUEST_URI'] . "?step=";
        if ($form->isEditing()) {
            $id = request()->route()->parameters['course'];
            $this_url = admin_url('courses/' . $id . '/edit?step=');
        };

        if (isset($_GET['step'])) {
            if ($form->isEditing()) {
                $temp_step = (int)($_GET['step']);
                if (($temp_step < 1) || ($temp_step > 4)) {
                    $temp_step = 1;
                }
                $_SESSION['step'] = $temp_step;

                $id = request()->route()->parameters['course'];

                $this_url_1 = admin_url('courses/' . $id . '/edit');
                header("Location: " . $this_url_1);
                die();
            }
        }

        if (isset($_SESSION['step'])) {
            if (((int)($_SESSION['step'])) > 0) {
                $step = (int)($_SESSION['step']);
            }
        }






        $active_1 = '  ';
        $active_2 = '  ';
        $active_3 = '  ';
        $active_4 = '  ';

        if ($step == 1) {
            $active_1 = " bg-primary ";
        } else if ($step == 2) {
            $active_2 = " bg-primary ";
        } else if ($step == 3) {
            $active_3 = " bg-primary ";
        } else if ($step == 4) {
            $active_4 = " bg-primary ";
        }



        $steps = '<p class="text-center ">JUMP TO <a  class=" ' . $active_1 . ' " onclick="window.location.replace(\'' . $this_url . '1\')" href="#">STEP 1</a>';

        $model = new Course();
        $form->saved(function ($form) {
            if (isset(request()->route()->parameters['course'])) {
                $id = request()->route()->parameters['course'];
                $model = $form->model()->find($id);
                if (!$model) {
                    dd("Coruse not found");
                }

                $this_url = admin_url('courses/' . $id . '/edit?step=');
                if (count($model->course_chapters) < 1) {
                    return redirect($this_url . "2");
                }

                if (($model->course_topics == null) || (count($model->course_topics) < 1)) {
                    return redirect($this_url . "3");
                }

                if (($model->visibility == null) || ($model->visibility == 0)) {
                    return redirect($this_url . "4");
                }

                return redirect(admin_url('courses/' . $id . '/edit'));
            }
        });




        if ($form->isEditing()) {
            $id = request()->route()->parameters['course'];
            $model = $form->model()->find($id);
            if (!$model) {
                dd("Course not found");
            }

            $steps .= ' | <a class=" ' . $active_2 . ' " onclick="window.location.replace(\'' . $this_url . '2\')" href="#">STEP 2</a>';
            if (count($model->course_chapters) < 1) {
            } else {
                $steps .= ' | <a class=" ' . $active_3 . ' " onclick="window.location.replace(\'' . $this_url . '3\')" href="#">STEP 3</a>';
            }

            if (($model->course_topics != null) && count($model->course_topics) > 0) {
                
                $steps .= ' | <a class=" ' . $active_4 . ' " onclick="window.location.replace(\'' . $this_url . '4\')" href="#">STEP 4</a>';
            }
        }

        $steps .= "</p>";
        if ($step == 1) {
            $form->setTitle("Creating new course");
            $form->html('<h2 class="text-center">STEP 1/4</h2><h3 class="text-center">Course Basic information</h3>' . $steps);
            $form->divider();
            $form->setWidth(6, 4);

            if ($form->isCreating()) {
                $form->hidden('visibility', __('Course visibility'))
                    ->default(0)
                    ->required();

                $form->hidden('step', __('Course visibility'))
                    ->default(2)
                    ->required();
            }


            $users = [];
            foreach (Administrator::all() as $key => $value) {
                if ($value->isRole('instructor')) {
                    $users[$value->id] = $value->name . " - " . $value->id;
                }
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

            /*

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
            $form->summernote('details', 'Course details')->required();*/
        }

        if ($step == 2) {
            $form->html('<h2 class="text-center">STEP 2/4</h2><h3 class="text-center">Adding course chapters</h3>' . $steps);
            $form->divider();
            $form->setWidth(6, 4);
            $form->html("<h4>Click on NEW to add course chapters</h4>");
            $form->hasMany('course_chapters', __(''), function (NestedForm $form) {
                $form->text('name', __('Course Chapter name'))->required();
            });
        }

        if ($step == 3) {
            $form->html('<h2 class="text-center">STEP 3/4</h2><h3 class="text-center">Course Topics</h3>' . $steps);
            $form->setWidth(6, 4);
            $form->divider();
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
        }

        if ($step == 4) {
            $form->html('<h2 class="text-center">STEP 3/4</h2><h3 class="text-center">Course chapter</h3>' . $steps);
            $form->divider();
            $form->setWidth(6, 4);
            $form->radio('visibility', __('Course visibility'))
                ->options([
                    '0' => 'Draft',
                    '1' => 'Publish',
                ])
                ->default(0)
                ->required();
        }


        $form->tools(function (Form\Tools $tools) {

            $tools->disableDelete();
            $tools->disableView();
        });

        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableViewCheck();
            $footer->disableCreatingCheck();
        });

        $script = <<<'EOT'
                window.addEventListener('DOMContentLoaded', (event) => { 
                    $(".after-submit").attr("checked",true);
                });

        EOT;
        Admin::script($script);

        return $form;
    }
}
