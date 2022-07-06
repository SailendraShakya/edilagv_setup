<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    public const ACTIVE = "active";
    public const INACTIVE = "inactive";
    public const PENDING = "pending";

    public const ADMIN = "Admin";
    public const ACCOUNTING = "Accounting";
    public const SURVEYOR = "Surveyor";
    public const FOREMAN = "Foreman";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * roles
     * get list of roles
     * @return array
     */
    public static function getRoles(): array
    {
        return [
            'admin' => self::ADMIN,
            'accounting' => self::ACCOUNTING,
            'surveyor' => self::SURVEYOR,
            'foreman' => self::FOREMAN,
        ];
    }

    /**
     * status
     * get list of status
     * @return array
     */
    public static function getStatus(): array
    {
        return [
            'active' => self::ACTIVE,
            'inactive' => self::INACTIVE,
            'pending' => self::PENDING,
        ];
    }
}
