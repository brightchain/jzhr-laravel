<?php

namespace App\Admin\Controllers;

use App\Model\Post;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PostsController extends Controller
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

            $content->header('新闻中心');
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

            $content->header('新闻中心');
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

            $content->header('新闻中心');
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
        return Admin::grid(Post::class, function (Grid $grid) {
            $grid->model()->where('columns', 'j')->OrderBy('order')->orderBy('updated_at', 'DESC');
            $grid->id('ID')->sortable();
            $grid->title('标题');
            $grid->thumbs('缩略图');
            $grid->order('排序')->editable();
            $states = [
                'on' => ['text' => 'YES'],
                'off' => ['text' => 'NO'],
            ];

            $grid->column('top')->switchGroup([
                'top' => '首页显示',
            ], $states);
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Post::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','标题');
            $form->radio('columns','所属栏目')->options(['j' => '金砖动态', 'h'=> '行业资讯'])->default('j');
            $states = [
                'on'  => ['value' => 1, 'text' => 'ON', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'OFF', 'color' => 'danger'],
            ];
            $form->switch('top','首页显示')->states($states)->default('1');
            $form->image('thumbs','缩略图');
            $form->editor('content','内容');
            $form->number('order','排序');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
