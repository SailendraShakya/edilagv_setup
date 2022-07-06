<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    public const ADMIN = 'Admin';
    public const ACCOUNTING = 'Accounting';
    public const SURVEYOR = 'Surveyor';
    public const FOREMAN = 'Foreman';
}
