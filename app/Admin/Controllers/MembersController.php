<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MembersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('username', __('Username'));
        $grid->column('password', __('Password'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('reg_date', __('Reg date'));
        $grid->column('last_seen', __('Last seen'));
        $grid->column('email', __('Email'));
        $grid->column('approved', __('Approved'));
        $grid->column('profile_photo', __('Profile photo'));
        $grid->column('user_type', __('User type'));
        $grid->column('sex', __('Sex'));
        $grid->column('reg_number', __('Reg number'));
        $grid->column('country', __('Country'));
        $grid->column('occupation', __('Occupation'));
        $grid->column('profile_photo_large', __('Profile photo large'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('location_lat', __('Location lat'));
        $grid->column('location_long', __('Location long'));
        $grid->column('facebook', __('Facebook'));
        $grid->column('twitter', __('Twitter'));
        $grid->column('whatsapp', __('Whatsapp'));
        $grid->column('linkedin', __('Linkedin'));
        $grid->column('website', __('Website'));
        $grid->column('other_link', __('Other link'));
        $grid->column('cv', __('Cv'));
        $grid->column('language', __('Language'));
        $grid->column('about', __('About'));
        $grid->column('address', __('Address'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('remember_token', __('Remember token'));
        $grid->column('avatar', __('Avatar'));
        $grid->column('name', __('Name'));
        $grid->column('campus_id', __('Campus id'));
        $grid->column('complete_profile', __('Complete profile'));

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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('username', __('Username'));
        $show->field('password', __('Password'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('reg_date', __('Reg date'));
        $show->field('last_seen', __('Last seen'));
        $show->field('email', __('Email'));
        $show->field('approved', __('Approved'));
        $show->field('profile_photo', __('Profile photo'));
        $show->field('user_type', __('User type'));
        $show->field('sex', __('Sex'));
        $show->field('reg_number', __('Reg number'));
        $show->field('country', __('Country'));
        $show->field('occupation', __('Occupation'));
        $show->field('profile_photo_large', __('Profile photo large'));
        $show->field('phone_number', __('Phone number'));
        $show->field('location_lat', __('Location lat'));
        $show->field('location_long', __('Location long'));
        $show->field('facebook', __('Facebook'));
        $show->field('twitter', __('Twitter'));
        $show->field('whatsapp', __('Whatsapp'));
        $show->field('linkedin', __('Linkedin'));
        $show->field('website', __('Website'));
        $show->field('other_link', __('Other link'));
        $show->field('cv', __('Cv'));
        $show->field('language', __('Language'));
        $show->field('about', __('About'));
        $show->field('address', __('Address'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('remember_token', __('Remember token'));
        $show->field('avatar', __('Avatar'));
        $show->field('name', __('Name'));
        $show->field('campus_id', __('Campus id'));
        $show->field('complete_profile', __('Complete profile'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('username', __('Username'));
        $form->textarea('password', __('Password'));
        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->text('reg_date', __('Reg date'));
        $form->text('last_seen', __('Last seen'));
        $form->email('email', __('Email'));
        $form->switch('approved', __('Approved'));
        $form->text('profile_photo', __('Profile photo'));
        $form->text('user_type', __('User type'));
        $form->text('sex', __('Sex'));
        $form->text('reg_number', __('Reg number'));
        $form->text('country', __('Country'));
        $form->text('occupation', __('Occupation'));
        $form->textarea('profile_photo_large', __('Profile photo large'));
        $form->text('phone_number', __('Phone number'));
        $form->text('location_lat', __('Location lat'));
        $form->text('location_long', __('Location long'));
        $form->text('facebook', __('Facebook'));
        $form->text('twitter', __('Twitter'));
        $form->text('whatsapp', __('Whatsapp'));
        $form->text('linkedin', __('Linkedin'));
        $form->text('website', __('Website'));
        $form->text('other_link', __('Other link'));
        $form->text('cv', __('Cv'));
        $form->text('language', __('Language'));
        $form->text('about', __('About'));
        $form->text('address', __('Address'));
        $form->text('remember_token', __('Remember token'));
        $form->textarea('avatar', __('Avatar'));
        $form->text('name', __('Name'));
        $form->number('campus_id', __('Campus id'))->default(1);
        $form->switch('complete_profile', __('Complete profile'));

        return $form;
    }
}
