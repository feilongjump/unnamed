<?php
return [
    'labels'  => [
        'Manufacturers' => '厂家',
        'manufacturers' => '厂家',
    ],
    'fields'  => [
        'no'        => '厂家编号',
        'name'      => '厂家名称',
        'category'  => '厂家分类',
        'purchaser' => '采购负责人',
        'address'   => '厂家地址',
        'remarks'   => '备注',
        'contacts'  => [
            'manufacturer_id' => 'manufacturer_id',
            'name'            => '姓名',
            'telephone'       => '电话',
            'email'           => 'E-mail',
            'fax'             => '传真',
            'is_default'      => '默认联系人',
        ],
        'banks'     => [
            'manufacturer_id' => 'manufacturer_id',
            'name'            => '账户名称',
            'currency'        => '币种',
            'account_name'    => '开户名',
            'account_number'  => '银行账号',
            'account_bank'    => '所属银行',
            'bank_address'    => '银行地址',
            'company_address' => '公司地址',
        ],
    ],
    'options' => [
    ],
];
