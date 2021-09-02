<?php

use Dcat\Admin\Grid;
use Dcat\Admin\Form;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

Grid::resolving(function (Grid $grid) {
    // 表格分隔展示方式
    // $grid->tableCollapse(false);

    // 边框模式
    $grid->withBorder();

    // 开启字段选择器功能
    $grid->showColumnSelector();

    // 显示横向滚动条
    $grid->scrollbarX();

    // 关闭表格行显示按钮
    $grid->disableViewButton();

    // 禁用过滤器按钮
    $grid->disableFilterButton();

    $grid->filter(function (Grid\Filter $filter) {
        // 展开过滤器
        $filter->expand();

        // 过滤器布局模式 - panel 布局
        $filter->panel();
    });
});

Form::resolving(function (Form $form) {
    // 关闭表单工具栏的默认按钮
    $form->disableViewButton();

    // 关闭表单底部元素
    $form->disableViewCheck();
    $form->disableEditingCheck();
    $form->disableCreatingCheck();
});
