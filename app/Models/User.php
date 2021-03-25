<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function profile(){
        // Para recuperar el registro manualmente

        //$profile = Profile::where("user_id",$this->id)->first();

        // si he cambiado el campo id, hay un segundo parametro para hasOne("App\Models\Profile","nombre_campo","nombre_campo_primaryKey
        //Relacion 1 a 1
        //Ej:$this->hasOne("App\Models\Profile","user_id","id");
        return $this->hasOne("App\Models\Profile");
    }

    public function posts(){
        // Relacion de 1 a M en Eloquent
        return $this->hasMany("App\Models\Post");
    }
    public function videos(){
        // Relacion de 1 a M en Eloquent
        return $this->hasMany("App\Models\Video");
    }
    //relacion muchos a muchos
    public function roles(){
        return $this->belongsToMany("App\Models\Role");
    }
}
