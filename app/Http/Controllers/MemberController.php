<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function member() 
    {
        $data['members'] = Member::get();
        return view('member.member')->with($data);
    }
    public function store(StoreMemberRequest $request)
    {
        Member::create($request->all());
        return redirect('member')->with('success','Data Member Berhasil Ditambahkan.');
    }
    public function update(UpdateMemberRequest $request, $id)
    {
        Member::find($id)->update($request->all());
        return redirect('member')->with('success', 'Update data member berhasil');
    }
    public function destroy(Member $member, $id)
    {
        $member->where('id',$id)->delete();
        return redirect('member')->with('success','Delete data member berhasil');
    }
}
