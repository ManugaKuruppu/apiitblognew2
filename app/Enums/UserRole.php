<?php

namespace App\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self USER()
 * @method static self ADMIN()
 */
class UserRole extends Enum
{
    $user->role = $role;
    $user->save();

    return redirect()->back();
}
