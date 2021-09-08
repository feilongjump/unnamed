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
        return Grid::make(Enquiry::with(['manufacturer', 'manufacturer_contact']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('manufacturer.name');
            $grid->column('manufacturer_contact.name');
            $grid->column('manufacturer_contact.telephone');
            $grid->column('art_no');
            $grid->column('standard');
            $grid->column('pack');
            $grid->column('moq');
            $grid->column('price');
            $grid->column('website')->link()->width('100px');
            $grid->column('delivered_at')->sortable();
            $grid->column('created_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('art_no')->width(4);
                $filter->like('manufacturer.name')->width(4);
                $filter->like('price')->width(4);

                $filter->between('created_at')->datetime()->width(4);
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
