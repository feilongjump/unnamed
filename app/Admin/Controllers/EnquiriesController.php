<?php

namespace App\Admin\Controllers;

use App\Models\Enquiry;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class EnquiriesController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new Enquiry(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('manufacturer_id');
            $grid->column('manufacturer_contact_id');
            $grid->column('art_no');
            $grid->column('standard');
            $grid->column('pack');
            $grid->column('moq');
            $grid->column('price');
            $grid->column('delivered_at');
            $grid->column('website');
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
        return Form::make(new Enquiry(), function (Form $form) {
            $form->display('id');
            $form->text('manufacturer_id');
            $form->text('manufacturer_contact_id');
            $form->text('art_no');
            $form->text('standard');
            $form->text('pack');
            $form->text('moq');
            $form->text('price');
            $form->text('delivered_at');
            $form->text('website');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
