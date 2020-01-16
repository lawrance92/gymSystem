<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GymMember;

class MemberRegisterController extends Controller
{
    public function create() 
    {
        return view('register');
    }

    public function store(Request $request) 
    {
        $exist = GymMember::where('identitynumber', '=', $request->data[2]['value'])->first();
        if($exist === null) {
            $member = new GymMember([
                'name' => $request->data[1]['value'],
                'identitynumber' => $request->data[2]['value'],
                'dateofbirth' => $request->data[3]['value'],
                'age' => $request->data[4]['value'],
                'gender' => $request->data[5]['value'],
                'postaladdress' => $request->data[6]['value'],
                'companyname' => $request->data[7]['value'],
                'companyaddress' => $request->data[8]['value'],
                'telephonenumber' => $request->data[9]['value'],
                'mobilenumber' => $request->data[10]['value'],
                'email' => $request->data[11]['value'],
                'preferpersonaltrainer' => $request->data[12]['value'],
                'emergencycontactname' => $request->data[13]['value'],
                'emergencycontactrelationship' => $request->data[14]['value'],
                'emergencymobilenumber' => $request->data[15]['value'],
                'medicalcondition' => $request->data[16]['value'],
                'medicalcomments' => $request->data[17]['value'],
                'status' => 'pending'
            ]);
    
            $member->save();
            return 'success';
        } 
        else { 
            return 'fail';
        }
    }
}
