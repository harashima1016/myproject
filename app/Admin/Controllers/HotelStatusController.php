<?php

namespace App\Admin\Controllers;

use App\Models\HotelStatus;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class HotelStatusController extends Controller
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
        $grid = new Grid(new HotelStatus);

        $grid->transaction_status('取引状況');
        $grid->sales_status('運営状況');
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
        $show = new Show(HotelStatus::findOrFail($id));

        $show->transaction_status('取引状況');
        $show->sales_status('運営状況');
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
        return Admin::form(HotelStatus::class, function (Form $form){


        //$form = new Form(new HotelStatus);


        // $states = [
        // 'not' => ['value' => 'not', 'text' => '未取引', 'color' => 'default'],
        // 'trading' => ['value' => 'trading', 'text' => '取引中', 'color' => 'success'],
        // 'past' => ['value' => 'past', 'text' => '過去取引あり', 'color' => 'danger'],
        // ];
        // $form->switch('transaction_status', '取引状況')->states($states)->default('not');


        $form->text('transaction_status', '取引状況');
        $form->text('sales_status', '運営状況');

        //return $form;
        });
    }
}
