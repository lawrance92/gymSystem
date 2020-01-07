<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GymMember extends Model
{
    protected $fillable = [
        'name', 
        'identitynumber',
        'dateofbirth',
        'age',
        'gender',
        'postaladdress',
        'companyname',
        'companyaddress',
        'telephonenumber',
        'mobilenumber',
        'email',
        'preferpersonaltrainer',
        'emergencycontactname',
        'emergencycontactrelationship',
        'emergencymobilenumber',
        'medicalcondition',
        'medicalcomments'
    ];
}
