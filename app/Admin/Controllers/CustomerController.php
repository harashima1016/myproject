<?php

namespace App\Admin\Controllers;

use App\Models\Customer;
use App\Models\CustomerDetail;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use App\Models\Staff;

class CustomerController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Customer);
        $grid->id('顧客ID');
        $grid->customer_name('顧客名');
        $grid->staff_id('担当スタッフID');
        $grid->transaction_status('取引ステータス');
        $grid->A_B('A/B');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');
        $grid->actions(function ($actions) {
        // $actions->disableDelete();
        // $actions->disableEdit();
        $actions->disableView();
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Customer::findOrFail($id));
        $show->id('顧客ID');
        $show->customer_name('顧客名');
        $show->staff_id('担当スタッフID');
        $show->transaction_status('取引ステータス');
        $show->A_B('A/B');
        $show->created_at('Created at');
        $show->updated_at('Updated at');
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Customer);
        //$form->text('name', '顧客名');
        //$form->select('staff_id')->options(Staff::pluck('name', 'id'));
        $form->text('customer_name', '顧客名');
        $form->select('staff_id')->options(Staff::pluck('name', 'staff_id'));
        //$form->text('detail.tel', 'TEL');
        $states = [
        'on' => ['value' => 'active', 'text' => '稼働', 'color' => 'success'],
        'off' => ['value' => 'stop', 'text' => '停止', 'color' => 'danger'],
        ];
        //$form->date('detail.contracted_at', '契約日')->format('YYYY-MM-DD');
        $form->switch('transaction_status', '状態')->states($states)->default('on');

        $a_b = [
        'on' => ['value' => 'active', 'text' => 'A', 'color' => 'success'],
        'off' => ['value' => 'stop', 'text' => 'B', 'color' => 'danger'],
        ];
        $form->switch('A_B', 'A/B')->states($a_b)->default('on');

        return $form;
    }
}
