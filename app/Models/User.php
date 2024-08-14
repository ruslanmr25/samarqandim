<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'fullname',
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
        'password' => 'hashed',
    ];



    public function permissions()
    {

        return $this->belongsToMany(Permission::class, 'user_permission');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }


    protected static function booted()
    {
        static::created(function ($model) {

            Log::channel('custom')->info(
                self::class . " Create. Id:{id} User: {user} Permisssions {permissions}  ",
                [
                    'id' => $model->id,
                    'user' => auth()->user()->username,
                    'userId' => auth()->user()->id,

                    'permissions' => $model->permissions()->pluck('id'),

                ]
            );
        });
        static::updated(function ($model) {

            $original = $model->getOriginal();
            $keys = $model->getDirty();
            $changes = $model->getChanges();

            $changedValues = array_map(
                function ($key) use ($original, $changes) {
                    return [
                        'old' => $original[$key] ?? null,
                        'new' => $changes[$key],
                    ];
                },
                array_keys($changes)
            );

            // Log yozish
            Log::channel('custom')->info(
                self::class . " Update .  Id:{id} User: {user} ,Permissions {permisssions}",
                [
                    'model_id' => $model->id,
                    'user' => auth()->user()->username,
                    'userId' => auth()->user()->id,
                    'permissions' => $model->permissions()->pluck('id'),
                    'changedValues' => $changedValues,

                ]
            );
        });
        static::deleted(function ($model) {
            Log::channel('custom')->warning(
                self::class . " Delete.  Id:{id} User: {user}  ",
                [
                    'id' => $model->id,
                    'user' => auth()->user()->username,
                    'userId' => auth()->user()->id,
                ]
            );
        });
    }
}
