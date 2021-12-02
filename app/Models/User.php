<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Notification;
use App\Models\bulletin;
use App\Models\roles;
use App\Models\Recevoir;
use App\Models\offre;
use App\Models\Option;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'fristname',
        'email',
        'password',
        'option_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'notification_id');
    }

    public function bulletins()
    {
        return $this->hasMany(bulletin::class, 'bulletin_id');
    }

    public function roles()
    {
        return $this->belongsTo(roles::class, 'role_id');
    }

    public function recevoirs()
    {
        return $this->belongsTo(Recevoir::class, 'recevoir_id');
    }
    public function offres()
    {
        return $this->hasMany(offre::class, 'offre_id');
    }

    public function option(){
        return $this->belongsTo(Option::class, 'option_id');
    }
    public function postuler_offre(){
        return $this->belongsToMany(PostulerOffre::class, 'option_id');
    }
    
}
