<?php

return [
    'role_structure' => [
        'مدير عام' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'شوؤن الطلاب' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'مستخدم' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
