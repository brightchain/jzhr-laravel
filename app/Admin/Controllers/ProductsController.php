<?php

namespace App\Admin\Controllers;

use App\Model\Product;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Intervention\Image\ImageManager;

class ProductsController extends Controller
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

            $content->header('产品与服务');
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

            $content->header('产品与服务');
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

            $content->header('产品与服务');
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
        return Admin::grid(Product::class, function (Grid $grid) {
            $grid->model()->OrderBy('order')->orderBy('updated_at', 'DESC');
            $grid->id('ID')->sortable();
            $grid->title('产品名称');
            $grid->type('所属栏目');
            $grid->profit('预期收益');
            $states = [
                'on' => ['text' => 'YES'],
                'off' => ['text' => 'NO'],
            ];

            $grid->column('top')->switchGroup([
                'top' => '首页显示',
            ], $states);
            $grid->order('排序');
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
        return Admin::form(Product::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','基金名称');
            $form->select('type','所属栏目')->options([1 => '股权投资', 2 => '房地产投资', 3 => '定向增发', 4 => '并购（M&A）']);
            $form->image('thumbs','产品图片')->uniqueName()->resize(300,193);
            $states = [
                'on'  => ['value' => 1, 'text' => 'ON', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'OFF', 'color' => 'danger'],
            ];
            $form->switch('top','首页显示')->states($states)->default('1');
            $form->textarea('description','产品亮点')->rows(4);
            $form->text('productType','产品类型');
            $form->text('manager','基金管理人');
            $form->text('profit','预期收益');
            $form->text('interest','利息分配');
            $form->text('scale','募集规模');
            $form->text('origin','认购起点');
            $form->text('deadline','产品期限');
            $form->text('fundraise','募集期');
            $form->text('overhead','管理费');
            $form->text('trustee','托管费');
            $form->text('field','投资领域');
            $form->select('status','产品状态')->options(['正在募集' => '正在募集', '存续期' => '存续期', '已兑付' => '已兑付']);
            $form->textarea('introduce','融资方介绍')->rows(4);
            $form->textarea('used','基金用途')->rows(4);
            $form->textarea('refund','还款来源')->rows(4);
            $form->textarea('risk','风控措施')->rows(4);
            $form->number('order','排序')->default(1);
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
