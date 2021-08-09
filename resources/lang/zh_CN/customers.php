<?php
return [
    'labels'  => [
        'Customers' => '客户',
        'customers' => '客户',
    ],
    'fields'  => [
        'name'            => '姓名',
        'category'        => '客户分类',
        'salesman_id'     => '业务员',
        'merchandiser_id' => '跟单员',
        'grade'           => '客户等级',
        'currency'        => '币种',
        'payment_method'  => '付款方式',
        'address'         => '客户地址',
        'remarks'         => '备注',
        'contacts'        => [
            'customer_id' => 'customer_id',
            'name'        => '姓名',
            'telephone'   => '电话',
            'email'       => 'E-mail',
            'fax'         => '传真',
            'is_default'  => '默认联系人',
        ],
        'banks'           => [
            'customer_id'     => 'customer_id',
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
