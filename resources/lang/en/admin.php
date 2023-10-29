<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'stock' => [
        'title' => 'Stocks',

        'actions' => [
            'index' => 'Stocks',
            'create' => 'New Stock',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'location' => 'Location',
            'is_active' => 'Is active',
            
        ],
    ],

    'coffee-grain' => [
        'title' => 'Coffee Grains',

        'actions' => [
            'index' => 'Coffee Grains',
            'create' => 'New Coffee Grain',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'lote' => 'Lote',
            'nf' => 'Nf',
            'slip' => 'Slip',
            'qtd' => 'Qtd',
            'prod' => 'Prod',
            'safra' => 'Safra',
            'bebida' => 'Bebida',
            'cheiro' => 'Cheiro',
            'aspecto' => 'Aspecto',
            'mofo' => 'Mofo',
            'def' => 'Def',
            'umid' => 'Umid',
            'imp' => 'Imp',
            'broca' => 'Broca',
            'num18' => 'Num18',
            'num17' => 'Num17',
            'num16' => 'Num16',
            'num15' => 'Num15',
            'num14' => 'Num14',
            'num13' => 'Num13',
            'num12' => 'Num12',
            'num10_11' => 'Num10 11',
            'numfundo_b' => 'Numfundo b',
            'stock_id' => 'Stock',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];