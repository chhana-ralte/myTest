<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        $members = Member::paginate(10);
        //dd($members);
        return view('member.index',['members' => $members]);
    }
    public function create(){
        return view('member.create');
    }
    public function store(){
        request()->validate([
            'name' => ['required'],
            'father' => ['required']
        ]);
        
        $member = Member::create([
            'name'=>request('name'),
            'father'=>request('father')
        ]);
        return view('member.show',['member' => $member]);
    }
    public function show(Member $member){
        return view('member.show',['member' => $member]);
    }

    public function edit(Member $member){
        return view('member.edit',['member' => $member]);
    }
    public function update($id, Request $request){
        $request->validate([
            'name' => ['required'],
            'father' => ['required']
        ]);
        
        $member = Member::findOrFail($id);
        $member->update([
            'name'=>$request->name,
            'father'=>$request->father
        ]);
        return redirect('/member/' . $member->id);
    }
    public function destroy(Member $member){
            //return "Delete";
        //$member = Member::findOrFail($id);
        $member->delete();
        return redirect('/member/');
    }
    public function deleteAll(){
        return "Deleteall";
    }
}
