<?php

namespace App\Admin\Controllers;

use App\Model\Project;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ProjectsController extends Controller
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

            $content->header('项目案例');
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

            $content->header('项目案例');
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

            $content->header('项目案例');
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
        return Admin::grid(Project::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('项目名称');
            $grid->thumbs('项目图片');
            $states = [
                'on' => ['text' => 'YES'],
                'off' => ['text' => 'NO'],
            ];

            $grid->column('top')->switchGroup([
                'top' => '首页显示',
            ], $states);
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
        return Admin::form(Project::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','项目名称');
            $form->radio('type','所属栏目')->options(['股权投资' => '股权投资','债权投资'=> '债权投资', '房地产投资'=> '房地产投资', '定向增发'=> '定向增发', '并购（M&A）'=> '并购（M&A）'])->default('股权投资');
            $states = [
                'on'  => ['value' => 1, 'text' => 'ON', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'OFF', 'color' => 'danger'],
            ];
            $form->switch('top','首页显示')->states($states)->default('1');
            $form->image('thumbs','项目图片')->uniqueName()->resize(308, 250);
            $form->editor('content','内容');
            $form->number('order')->default(1);
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
