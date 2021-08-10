<?php

namespace App\Admin\Controllers;

use App\Models\Showpiece;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Database\Eloquent\Model;

class ShowpiecesController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        return Grid::make(new Showpiece(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('manufacturer_id');
            $grid->column('mo');
            $grid->column('code');
            $grid->column('name');
            $grid->column('english_name');
            $grid->column('spec');
            $grid->column('series');
            $grid->column('material');
            $grid->column('unit_price');
            $grid->column('producer');
            $grid->column('quoted_price');
            $grid->column('describe');
            $grid->column('english_describe');
            $grid->column('pack_describe');
            $grid->column('english_pack_describe');
            $grid->column('remarks');
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
        return Form::make(Showpiece::with(['parts', 'packages', 'pictures']), function (Form $form) {

            if ($form->isEditing()) {

                $form->tab('样品信息', function (Form $form) {

                    $form->display('id');

                    $this->basic($form);

                    $form->display('created_at');
                    $form->display('updated_at');
                })->tab('包装资料', function (Form $form) {

                    $this->packages($form);

                })->tab('配件明细', function (Form $form) {

                    $this->parts($form);
                })->tab('样品图片', function (Form $form) {

                    $this->pictures($form);
                });

                return;
            }

            $form->multipleSteps()
                ->remember()
                ->width('100%')
                ->option([
                    'style' => 'overflow-x:scroll',
                    'test'
                ])
                ->add('样品信息', function ($step) {
                    $this->basic($step);
                })
                ->add('包装资料', function ($step) {

                    $this->packages($step);

                })
                ->add('配件明细', function ($step) {

                    $this->parts($step);

                })
                ->add('样品图片', function ($step) {

                    $this->pictures($step);

                })
                ->done();

        });
    }

    /**
     * 基本信息
     *
     * @param $form
     */
    private function basic($form)
    {
        $form->select('manufacturer_id')
            ->ajax('api/manufacturers')
            ->required();
        $form->text('mo')->required();
        $form->text('code')->required();
        $form->text('name')->required();
        $form->text('english_name')->required();
        $form->text('spec')->required();
        $form->text('series')->required();
        $form->text('material')->required();
        $form->number('unit_price')->required();
        $form->text('producer')->required();
        $form->number('quoted_price')->required();
        $form->text('describe')->required();
        $form->text('english_describe')->required();
        $form->text('pack_describe')->required();
        $form->text('english_pack_describe')->required();
        $form->textarea('remarks')->rows(10);
    }

    /**
     * 包装资料
     *
     * @param $form
     */
    private function packages( $form)
    {
        $form->hasMany('packages', '', function (Form\NestedForm $form) {

            // TODO: 等待此回复 https://github.com/jqhph/dcat-admin/issues/1417
            // 关联时需要自动翻译，使用以下模式
            // $form->text('contacts.name')->required();
            // 同时在主翻译文件中，增加翻译字段 https://github.com/jqhph/dcat-admin/issues/229
            $form->text('manufacturer_id')->width('300px')->required();
            $form->text('art_no')->required();
            $form->text('type')->required();
            $form->text('name')->required();
            $form->text('spec')->required();
            $form->rate('rate')->required();
            $form->text('cbm')->required();
            $form->number('quantity')->required();
            $form->number('unit_price')->required();
            $form->number('cost_price')->required();
            $form->text('price_formula')->required();
        })->useTable()->width(12)->attribute('test');
    }

    /**
     * 配件明细
     *
     * @param $form
     */
    private function parts($form)
    {
        $form->hasMany('parts', '', function (Form\NestedForm $form) {

            $form->text('manufacturer_id')->required();
            $form->text('art_no')->required();
            $form->text('code')->required();
            $form->text('name')->required();
            $form->text('spec')->required();
            $form->rate('rate')->required();
            $form->number('quantity')->required();
            $form->number('unit_price')->required();
            $form->number('cost_price')->required();
            $form->text('price_formula')->required();

        })->useTable()->width(12);
    }

    /**
     * 配件明细
     *
     * @param $form
     */
    private function pictures($form)
    {
        $form->hasMany('pictures', '', function (Form\NestedForm $form) {

            $form->text('name');
            $form->image('path');

        })->useTable()->width(12);
    }
}
