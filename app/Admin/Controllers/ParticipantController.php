<?php

namespace App\Admin\Controllers;

use App\Models\Participant;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ParticipantController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Course Subscriptions';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Participant());
        $u = Admin::user();
        if ($u->isRole('administrator')) {
            $grid->model()->orderBy('id', 'desc');
        } else {
            $grid->model()->where('user_id', $u->id)->orderBy('id', 'desc');
        }
        $grid->column('id', __('Id'));

        $grid->column('email', __('Email'));
        $grid->column('created_at', __('Date'))
            ->date('Y-m-d');
        $grid->disableBatchActions();


        $grid->column('activation_status', __('Course Activation'))
            ->display(function ($activation_status) {
                if ($activation_status == 'Active') {
                    return "<span class='label label-success'>Active</span>";
                } else {
                    return "<span class='label label-danger'>Inactive</span>";
                }
            }); 
        $grid->column('payment_status', __('Payment Status'))
            ->display(function ($payment_status) {
                if ($payment_status == 'Paid') {
                    return "<span class='label label-success'>Paid</span>";
                } else {
                    return "<span class='label label-danger'>Not Paid</span>";
                }
            }); 
        $grid->column('payment_method', __('Payment Method'))->hide();
        $grid->column('payment_reference', __('Payment reference'));
        $grid->column('payment_amount', __('Payment amount'));
        $grid->column('payment_date', __('Payment date'));
        $grid->column('payment_currency', __('Payment Currency'));
        if ($u->isRole('administrator')) {
/*             $grid->column('user.name', __('User')); */
            $grid->column('course_id', __('Course'))
                ->display(function ($course_id) {
                    return \App\Models\Course::find($course_id)->name;
                });
            $grid->column('ref', __('Ref'))->hide();
            $grid->column('name', __('Name'))->hide();
            $grid->column('whatsapp', __('Whatsapp'));
            $grid->column('country', __('Country'));
            $grid->column('message', __('Message'))->hide();
        }


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
        $show = new Show(Participant::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('ref', __('Ref'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('whatsapp', __('Whatsapp'));
        $show->field('country', __('Country'));
        $show->field('message', __('Message'));
        $show->field('user_id', __('User id'));
        $show->field('course_id', __('Course id'));
        $show->field('activation_status', __('Activation status'));
        $show->field('payment_status', __('Payment status'));
        $show->field('payment_method', __('Payment method'));
        $show->field('payment_reference', __('Payment reference'));
        $show->field('payment_amount', __('Payment amount'));
        $show->field('payment_date', __('Payment date'));
        $show->field('payment_currency', __('Payment currency'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Participant());
        $form->disableCreatingCheck();
        $form->disableEditingCheck();
        $form->disableViewCheck();
        $form->disableReset();


        $u = Admin::user();
        $users = \App\Models\User::all();

        if ($u->isRole('administrator')) {
            $form->select('user_id', __('User'))
                ->options($users->pluck('name', 'id'))
                ->rules('required');
        } else {
            $form->select('user_id', __('User'))
                ->options($users->pluck('name', 'id'))
                ->default($u->id)
                ->readOnly()
                ->rules('required');
        }

        $courses = \App\Models\Course::all();
        $form->select('course_id', __('Course'))
            ->options($courses->pluck('name', 'id'))
            ->rules('required');

        $form->select('ref', __('How did you hear about us?'))
            ->options([
                'Google' => 'Google',
                'Facebook' => 'Facebook',
                'Instagram' => 'Instagram',
                'Twitter' => 'Twitter',
                'LinkedIn' => 'LinkedIn',
                'Friend' => 'Friend',
                'WhatsApp' => 'WhatsApp',
                'Other' => 'Other',
            ])
            ->rules('required');

        if ($u->isRole('administrator')) {
            $form->text('name', __('Full Name'))->rules('required');
            $form->email('email', __('Email'))->rules('required');
            $form->text('whatsapp', __('Whatsapp'))->rules('required');
            $form->text('country', __('Country'))->rules('required');
            $form->textarea('message', __('Message'));
        } else {
            $form->text('name', __('First and Last Name'))->rules('required');
            $form->email('email', __('Email Address'))->rules('required')->default($u->email);
            $form->text('whatsapp', __('Whatsapp Number'))->rules('required')->default($u->whatsapp);
            $form->text('country', __('Country'))->rules('required')->default($u->country);
            $form->textarea('message', __('Message'));
        }
        /* 

        message
        user_id
        course_id
        activation_status
        payment_status
        payment_method
        payment_reference
        payment_amount
        payment_date
        payment_currency
   
        $form->textarea('ref', __('Ref'));
        $form->textarea('name', __('Name'));
        $form->textarea('email', __('Email'));
        $form->textarea('whatsapp', __('Whatsapp'));
        $form->textarea('country', __('Country'));
        $form->textarea('message', __('Message'));
        $form->text('activation_status', __('Activation status'))->default('Inactive');
        $form->text('payment_status', __('Payment status'))->default('Not Paid');
        $form->text('payment_method', __('Payment method'));
        $form->text('payment_reference', __('Payment reference'));
        $form->text('payment_amount', __('Payment amount'));
        $form->text('payment_date', __('Payment date'));
        $form->text('payment_currency', __('Payment currency'));
             */
        $form->disableEditingCheck();
        $form->disableCreatingCheck();
        $form->disableViewCheck();
        $form->disableReset();
        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
            $tools->disableDelete();
        });

        return $form;
    }
}
