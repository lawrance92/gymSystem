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
        $this->validate($request, [
            'name' => 'required',
            'icNumber' => 'required',
            'dateOfBirth' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'mobileNumber' => 'required',
            'preferPersonalTrainer' => 'required',
            'emergencyName' => 'required',
            'emergencyMobile' => 'required',
            'medicalCondition' => 'required'
        ]);

        $member = new GymMember([
            'name' => $request->get('name'),
            'identitynumber' => $request->get('icNumber'),
            'dateofbirth' => $request->get('dateOfBirth'),
            'age' => $request->get('age'),
            'gender' => $request->get('gender'),
            'postaladdress' => $request->get('adress'),
            'companyname' => $request->get('companyName'),
            'companyaddress' => $request->get('companyAddress'),
            'telephonenumber' => $request->get('telephoneNumber'),
            'mobilenumber' => $request->get('mobileNumber'),
            'email' => $request->get('email'),
            'preferpersonaltrainer' => $request->get('preferPersonalTrainer'),
            'emergencycontactname' => $request->get('emergencyName'),
            'emergencycontactrelationship' => $request->get('emergencyRelationship'),
            'emergencymobilenumber' => $request->get('emergencyMobile'),
            'medicalcondition' => $request->get('emergencyCondition'),
            'medicalcomments' => $request->get('medicalComments')
        ]);

        $member->save();

        return 'Data Added';
    }
}
