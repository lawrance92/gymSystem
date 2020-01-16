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
        $exist = GymMember::where('identitynumber', '=', $request->get('icNumber'))->first();

        if($exist === null) {
            $member = new GymMember([
                'name' => $request->get('name'),
                'identitynumber' => $request->get('icNumber'),
                'dateofbirth' => $request->get('dateOfBirth'),
                'age' => $request->get('age'),
                'gender' => $request->get('gender'),
                'postaladdress' => $request->get('postalAddress'),
                'companyname' => $request->get('companyName'),
                'companyaddress' => $request->get('companyAddress'),
                'telephonenumber' => $request->get('telephoneNumber'),
                'mobilenumber' => $request->get('mobileNumber'),
                'email' => $request->get('email'),
                'preferpersonaltrainer' => $request->get('preferPersonalTrainer'),
                'emergencycontactname' => $request->get('emergencyName'),
                'emergencycontactrelationship' => $request->get('emergencyRelationship'),
                'emergencymobilenumber' => $request->get('emergencyMobile'),
                'medicalcondition' => $request->get('medicalCondition'),
                'medicalcomments' => $request->get('medicalComments'),
                'status' => 'inactive'
            ]);
    
            $member->save();
            return \View::make("index")->with('success');
            //return 'success';
            //return response()->json(['message'=>'Add Successfully.']);
            //return view('register')->with('success');
        } 
        else { 
            return 'fail';
            //return response()->json(['message'=>'User Exist.']);; 
        }
    }
}
