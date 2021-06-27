<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use App\Models\Tenant;
use Dcat\Admin\Http\Controllers\AdminController;

class TenantController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new Tenant(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');

            $grid->column('domain')
                ->display(function () {
                    return Tenant::domains()->first()->domain;
                })
                ->link(function ($value) {
                    return "http://{$value}";
                });

            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form(): Form
    {
        return Form::make(new Tenant(), function (Form $form) {
            $form->text('id', '标识')
                ->required()
                ->rules('alpha|max:20|unique:tenants,id')
                ->help('此标识用于访问地址，仅可使用英文字母');

            $form->text('name')->required();

            $form->hasMany('domains', function (Form\NestedForm $form) {
                $form->text('domain', '访问地址')
                    ->required()
                    ->rules('alpha|max:20|unique:domains,domain');
            });
        });
    }
}
