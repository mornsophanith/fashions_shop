<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTable;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function account() {
        $users = UserTable::all();
        $count_member = count($users);
        return view('admin.users.account', ['users'=>$users, 'count_member'=>$count_member]);
    }

    public function user() {
        $users = UserTable::all();
        return view('admin.users.index', ['users'=>$users]);
    }

    public function dataInsert(Request $request) {
        $full_name = $request->input('full_name');
        $father_name = $request->input('father_name');
        $age = $request->input('age');
        $email = $request->input('email');
        $password = $request->input('password');
        $link = $request->input('link');
        $status = $request->input('status');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $description = $request->input('description');
        $id_card = $request->input('id_card');
        $country = $request->input('country');
        $path = '';
        if($request->hasFile('image'))
        {
            $image = time().$request->file('image')->getClientOriginalName();
            $path = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $dataInsert = UserTable::insert([
            'name' => $full_name,
            'father_name' => $father_name,
            'image' => $path,
            'is_admin' => $status,
            'age' => $age,
            'email' => $email,
            'phone' => $phone,
            'password' => $password,
            'link' => $link,
            'address' => $address,
            'description' => $description,
            'id_card'=>$id_card,
            'country'=>$country
        ]);
        return redirect()->route('admin.user');
    }

    public function view($id) {
        $user = UserTable::find($id);
        return view('admin.users.view', ['user'=>$user]);
    }

    public function updateUser($id) {
        $user = UserTable::find($id);
        return view('admin.users.edit', ['user'=>$user]);
    }

    public function dataUpdateUser(Request $request, $id ) {
        $user = UserTable::find($id);
        if($request->hasFile('image'))
        {
            $old_value = 'storage/'. $user->image;
            if(UserTable::exists($old_value))
            {
                UserTable::destroy($old_value);
            }
            $image = time().$request->file('image')->getClientOriginalName();
            $user->image = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $user->name = $request->input('name');
        $user->father_name = $request->input('father_name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->link = $request->input('link');
        $user->is_admin = $request->input('status');
        $user->address = $request->input('address');
        $user->description = $request->input('description');
        $user->phone = $request->input('phone');
        $user->id_card = $request->input('id_card');
        $user->country = $request->input('country');
        $user->update();

        return redirect()->route('admin.user');
    }

    public function deleteUser(Request $request, $id){
        try {
            UserTable::destroy($id);
            return redirect()->route('admin.user');
        } catch(\Exception $e) {
            report($e);
        }
    }

    // account setting updating 

    public function updatePersonalInformation(Request $request, $id) {

        $user = UserTable::find($id);
        if($request->hasFile('image'))
        {
            $old_value = 'storage/'. $user->image;
            if(UserTable::exists($old_value))
            {
                UserTable::destroy($old_value);
            }
            $image = time().$request->file('image')->getClientOriginalName();
            $user->image = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->link = $request->input('link');
        $user->address = $request->input('address');
        $user->description = $request->input('description');
        $user->phone = $request->input('phone');
        $user->id_card = $request->input('id_card');
        $user->country = $request->input('country');
        if(is_null($user->is_admin)){}
        $user->update();
        Session::flash('success', 'Update successful!');
        return redirect()->route('admin.account');
    }
}
