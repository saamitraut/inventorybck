<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use DB;
use Eloquent;

class User extends Authenticatable
{
    use Notifiable;
	protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	// Roles 23022023
	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}
	
	static function list2($export=false,$name=false,$email=false){
		 // echo '41';exit;
		 $return=false;
		if($export){
			$return=self::select('name','email');
		}
		else{
			$return=self::select('id','name','email','status','branch_id','branch_id');
		}
		if($name){
            $return=$return->where('name', '=', $name);
        }
        if($email){
            $return=$return->where('email', '=', $email);
        }
		if($export){
			$return=$return->get();
		}
		else{
			$return=$return->get();
		}
		return $return;
	}
}
