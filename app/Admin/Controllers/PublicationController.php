<?php

namespace App\Admin\Controllers;

use App\Models\Publication;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PublicationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Publications';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Publication());
        $grid->quickSearch('title')->placeholder('Search by title');
        $grid->model()->orderBy('id', 'desc');
        //advanced fliter
        $grid->filter(function ($filter) {
            $filter->like('title', __('Title'));
            $filter->like('author', __('Author'));
            $filter->like('tags', __('Tags'));
            $filter->like('category', __('Category'));
            $filter->between('publication_year', __('Publication Year'))->date();
            $filter->like('country', __('Country'));
            $filter->like('city', __('City'));
            //add  more filters
        });

        $grid->column('id', __('ID'))->sortable()->hide();

        $grid->column('isbn', __('Isbn'))
            ->sortable()
            ->filter('like');
        $grid->column('image', __('Image'))
            ->image('', 80, 80)
            ->width(85);
        $grid->column('title', __('Title'))->sortable()
            ->width(200);

        $grid->column('description', __('Summary'))
            ->display(function ($description) {
                return substr($description, 0, 80) . '...';
            })->sortable()
            ->hide();
        $grid->column('file', __('File'))
            ->display(function ($file) {
                return "<a href='" . $file . "' target='_blank'>Download</a>";
            })->sortable();
        $grid->column('tags', __('Tags'))->sortable();
        $grid->column('category', __('Category'))
            ->display(function ($category) {
                return "<span class='label label-info'>$category</span>";
            })->hide();
        // $grid->column('created_by_id', __('Created by id'));
        $grid->column('author', __('Author'))->sortable();
        // $grid->column('other_authors', __('Other authors'));
        $grid->column('publication_year', __('Publication Year'))
            ->display(function ($publication_year) {
                return "<span class='label label-warning'>$publication_year</span>";
            })->sortable()
            ->filter('range');
        $grid->column('publisher', __('Publisher'))->hide();
        $grid->column('pages', __('Pages'))->hide();
        $grid->column('volume', __('Volume'))->hide();
        $grid->column('edition', __('Edition'))->hide();
        $grid->column('language', __('Language'))->hide();
        $grid->column('country', __('Country'));
        $grid->column('city', __('City'))->hide();
        $grid->column('views', __('Views'))->sortable();
        $grid->column('downloads', __('Downloads'))->sortable();
        $grid->column('likes', __('Likes'))->sortable();
        $grid->column('dislikes', __('Dislikes'))->hide();
        $grid->column('comments', __('Comments'))->hide();
        $grid->column('shares', __('Shares'))->hide();

        $grid->column('created_at', __('Created'))
            ->display(function ($created_at) {
                return date('d M Y', strtotime($created_at));
            })->sortable();

        //print
        $grid->column('print', __('Actions'))
            ->display(function () {
                $url = url('get-tags?publication_id=' . $this->id);
                $html = "<a target='_blank' href='$url' class='btn btn-xs btn-primary'>Get Tags</a>";
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
        $show = new Show(Publication::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('details', __('Details'));
        $show->field('image', __('Image'));
        $show->field('file', __('File'));
        $show->field('tags', __('Tags'));
        $show->field('category', __('Category'));
        $show->field('created_by_id', __('Created by id'));
        $show->field('author', __('Author'));
        $show->field('other_authors', __('Other authors'));
        $show->field('publication_year', __('Publication year'));
        $show->field('publisher', __('Publisher'));
        $show->field('isbn', __('Isbn'));
        $show->field('pages', __('Pages'));
        $show->field('volume', __('Volume'));
        $show->field('edition', __('Edition'));
        $show->field('language', __('Language'));
        $show->field('country', __('Country'));
        $show->field('city', __('City'));
        $show->field('views', __('Views'));
        $show->field('downloads', __('Downloads'));
        $show->field('likes', __('Likes'));
        $show->field('dislikes', __('Dislikes'));
        $show->field('comments', __('Comments'));
        $show->field('shares', __('Shares'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Publication());

        $u = \Encore\Admin\Facades\Admin::user();
        //created_by_id
        $form->hidden('created_by_id')->value($u->id);


        $form->text('title', __('Title'))->rules('required');
        $form->text('description', __('Description'));
        $form->summernote('details', __('Details'))->rules('required')->required();
        $form->image('image', __('Cover Image'));
        $form->file('file', __('File'));
        $form->tags('tags', __('Tags'));
        $form->text('category', __('Category'));
        $form->text('author', __('Author'));
        $form->text('other_authors', __('Other authors'));
        $form->decimal('publication_year', __('Publication year'));
        $form->text('publisher', __('Publisher'));
        $form->text('isbn', __('Isbn'));
        $form->text('pages', __('Number of Pages'));
        $form->text('volume', __('Volume'));
        $form->text('edition', __('Edition'));
        $form->text('language', __('Language'));
        $form->text('country', __('Country'));
        $form->text('city', __('City'));
        $form->decimal('views', __('Views'));
        $form->decimal('downloads', __('Downloads'));
        $form->decimal('likes', __('Likes'));
        $form->decimal('dislikes', __('Dislikes'));
        $form->decimal('comments', __('Comments'));
        $form->decimal('shares', __('Shares'));

        return $form;
    }
}
