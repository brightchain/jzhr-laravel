<?php

namespace App\Admin\Controllers;

use App\Slide;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SlideController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('幻灯片');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('幻灯片');
            $content->description('列表');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('幻灯片');
            $content->description('列表');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Slide::class, function (Grid $grid) {
            $grid->model()->OrderBy('list');
            $grid->id('ID')->sortable();
            $grid->imgsrc('图片路径');
            $grid->txt1('标题');
            $grid->txt2('内容');
            $grid->link('链接');
            $grid->list('排序');
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Slide::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->image('imgsrc','图片路径')->uniqueName();
            $form->text('txt1','图片标题');
            $form->text('txt2','图片内容');
            $form->text('list','排序');
            $form->url('link','链接');
            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
