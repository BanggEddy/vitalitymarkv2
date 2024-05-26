<?php

namespace App\src\Enum;

enum UserRole: string
{
    case Admin = 'ROLE_ADMIN';
    case User = 'ROLE_USER';
}
