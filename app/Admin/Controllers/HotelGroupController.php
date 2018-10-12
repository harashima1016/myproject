<?php

namespace App\Admin\Controllers;

use App\Models\HotelGroup;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use App\Models\Division;
use App\Models\Department;


class HotelGroupController extends Controller
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
        $grid = new Grid(new HotelGroup);

        $grid->id('ホテル系列ID')->sortable();
        $grid->hotel_group('ホテル系列')->sortable();
        $grid->address('住所')->sortable();
        $grid->katagaki('方書')->sortable();
        $grid->tel('電話番号')->sortable();
        // $grid->division1('担当事業部1')->sortable();
        // $grid->department1('部署1')->sortable();
        // $grid->staff1('担当者名1');
        // $grid->staff_phone_number1('担当者携帯1')->sortable();
        // $grid->remarks1('備考1')->sortable();
        // $grid->division2('担当事業部2')->sortable();
        // $grid->department2('部署2')->sortable();
        // $grid->staff2('担当者名2')->sortable();
        // $grid->staff_phone_number2('担当者携帯2')->sortable();
        // $grid->remarks2('備考2')->sortable();
        // $grid->division3('担当事業部3')->sortable();
        // $grid->department3('部署3')->sortable();
        // $grid->staff3('担当者名3')->sortable();
        // $grid->staff_phone_number3('担当者携帯3')->sortable();
        // $grid->remarks3('備考3')->sortable();
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
        $show = new Show(HotelGroup::findOrFail($id));

        $show->id('ホテル系列ID');
        $show->hotel_group('ホテル系列');
        $show->address('住所');
        $show->katagaki('方書');
        $show->tel('電話番号');
        $show->division1('担当事業部1');
        $show->department1('部署1');
        $show->staff1('担当者名1');
        $show->staff_phone_number1('担当者携帯1');
        $show->remarks1('備考1');
        $show->division2('担当事業部2');
        $show->department2('部署2');
        $show->staff2('担当者名2');
        $show->staff_phone_number2('担当者携帯2');
        $show->remarks2('備考2');
        $show->division3('担当事業部3');
        $show->department3('部署3');
        $show->staff3('担当者名3');
        $show->staff_phone_number3('担当者携帯3');
        $show->remarks3('備考3');
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
        $form = new Form(new HotelGroup);

        $form->text('hotel_group', 'ホテル系列');
        $form->text('address', '住所');
        $form->text('katagaki', '方書');
        $form->text('tel', '電話番号');
        // $form->text('division1', '担当事業部１');
        $form->select('division1')->options(Division::pluck('division', 'id'));
        // $form->text('department1', '部署1');
        $form->select('department1')->options(Department::pluck('department', 'id'));
        $form->text('staff1', '担当者名1');
        $form->text('staff_phone_number1', '担当者携帯1');
        $form->text('remarks1', '備考1');
        // $form->text('division2', '担当事業部2');
        $form->select('division2')->options(Division::pluck('division', 'id'));
        // $form->text('department2', '部署2');
        $form->select('department2')->options(Department::pluck('department', 'id'));
        $form->text('staff2', '担当者名2');
        $form->text('staff_phone_number2', '担当者携帯2');
        $form->text('remarks2', '備考2');
        // $form->text('division3', '担当事業部3');
        $form->select('division3')->options(Division::pluck('division', 'id'));
        // $form->text('department3', '部署3');
        $form->select('department3')->options(Department::pluck('department', 'id'));
        $form->text('staff3', '担当者名3');
        $form->text('staff_phone_number3', '担当者携帯3');
        $form->text('remarks3', '備考3');

        return $form;
    }
}
