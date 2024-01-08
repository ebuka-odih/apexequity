<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'password' => 'hashed',
    ];

    public function withdrawal()
    {
        return $this->belongsTo(Withdrawal::class, 'user_id');
    }
    public function deposit()
    {
        return $this->belongsTo(Deposit::class, 'user_id');
    }
    public function funding()
    {
        return $this->belongsTo(Funding::class, 'user_id');
    }

    public function status()
    {
        if ($this->status < 0){
            return "<span class='badge bg-danger text text-uppercase'>Inactive</span>";
        }elseif ($this->status >= 0){
            return "<span class='badge bg-success text text-uppercase'>Active</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Blocked</span>";
        }
    }
    public function adminStatus()
    {
        if ($this->status < 0){
            return "<span class='badge bg-danger text text-uppercase'>Inactive</span>";
        }elseif ($this->status >= 0){
            return "<span class='badge bg-success text text-uppercase'>Active</span>";
        }else{
            return "<span class='badge bg-warning text text-uppercase'>Blocked</span>";
        }
    }


}
