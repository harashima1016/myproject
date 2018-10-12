<?php

namespace App\Admin\Controllers;

use App\Models\FacilityInformation;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use App\Models\Facility;


class FacilityInformationController extends Controller
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
        $grid = Admin::grid(FacilityInformation::class, function (Grid $grid) {
        // $grid = new Grid(new FacilityInformation);

        $grid->id('設備情報ID')->sortable();
        $grid->facility_id('施設ID')->sortable();
        $grid->lan('LAN設備')->sortable();
        $grid->vod('VOD')->sortable();
        $grid->cs('CS')->sortable();
        $grid->bs('BS')->sortable();
        $grid->foreign_news('海外ニュース')->sortable();
        $grid->created_at('Created at')->sortable();
        $grid->updated_at('Updated at')->sortable();

        $grid->actions(function ($actions) {
        // $actions->disableDelete();
        // $actions->disableEdit();
        $actions->disableView();
        });
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
        $show = new Show(FacilityInformation::findOrFail($id));

        $show->id('設備情報ID');
        $show->facility_id('施設ID');
        $show->lan('LAN設備');
        $show->vod('VOD');
        $show->cs('CS');
        $show->bs('BS');
        $show->foreign_news('海外ニュース');
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
        $form = new Form(new FacilityInformation);

        // $form->number('facility_id', 'Facility id');
        $form->select('facility_id')->options(Facility::pluck('facility_name', 'id'));

        $form->text('lan', 'LAN設備');
        $form->text('vod', 'VOD');
        $form->text('cs', 'CS');
        $form->text('bs', 'BS');
        $form->text('foreign_news', '海外ニュース');

        return $form;
    }
}
