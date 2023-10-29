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

    'blend-detail' => [
        'title' => 'Blend Details',

        'actions' => [
            'index' => 'Blend Details',
            'create' => 'New Blend Detail',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'min_def' => 'Min def',
            'max_def' => 'Max def',
            'min_umid' => 'Min umid',
            'max_umid' => 'Max umid',
            'min_imp' => 'Min imp',
            'max_imp' => 'Max imp',
            'min_broca' => 'Min broca',
            'max_broca' => 'Max broca',
            'min_num18' => 'Min num18',
            'max_num18' => 'Max num18',
            'min_num17' => 'Min num17',
            'max_num17' => 'Max num17',
            'min_num16' => 'Min num16',
            'max_num16' => 'Max num16',
            'min_num15' => 'Min num15',
            'max_num15' => 'Max num15',
            'min_num14' => 'Min num14',
            'max_num14' => 'Max num14',
            'min_num13' => 'Min num13',
            'max_num13' => 'Max num13',
            'min_num12' => 'Min num12',
            'max_num12' => 'Max num12',
            'min_num10_11' => 'Min num10 11',
            'max_num10_11' => 'Max num10 11',
            'min_numfundo_b' => 'Min numfundo b',
            'max_numfundo_b' => 'Max numfundo b',
            
        ],
    ],

    'getting-blend' => [
        'title' => 'Getting Blends',

        'actions' => [
            'index' => 'Getting Blends',
            'create' => 'New Getting Blend',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'code' => 'Code',
            'admin_user_id' => 'Admin user',
            'stock_id' => 'Stock',
            'blend_details_id' => 'Blend details',
            'qtd' => 'Qtd',
            'finished' => 'Finished',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];