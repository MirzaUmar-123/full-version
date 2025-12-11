<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    /**
     * Display user members of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $title = "User Members";
        $description = "Some description for the page";
        $users = User::all();
        return view('admin.users.index',compact('title','description','users'));
    }

    /**
     * Display user grid of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function grid(){
        $title = "User Grid";
        $description = "Some description for the page";
        return view('pages.applications.user.grid',compact('title','description'));
    }

    /**
     * Display user list of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list(){
        $title = "User List";
        $description = "Some description for the page";
        return view('pages.applications.user.list',compact('title','description'));
    }

    /**
     * Display user grid style of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function gridStyle(){
        $title = "User Grid Style List";
        $description = "Some description for the page";
        return view('pages.applications.user.grid_style',compact('title','description'));
    }

    /**
     * Display user group of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function userGroup(){
        $title = "User Group List";
        $description = "Some description for the page";
        return view('pages.applications.user.user_group',compact('title','description'));
    }

    /**
     * Display user add of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(){
        $title = "User Add";
        $description = "Some description for the page";
        return view('admin.users.create',compact('title','description'));
    }

    /**
     * Display user table of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function table(){
        $title = "User Data Table";
        $description = "Some description for the page";
        return view('pages.applications.user.data_table',compact('title','description'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $id)
    {
        $result = User::where('id', $id)->firstorfail();
        if ($result) {
            $result->delete();
            return response()->json(['message' => 'User deleted successfully.'], 200);
        }
        else {
            return response()->json(['message' => 'User not found.'], 404);
    }
    }

    public function edit(string $id){
        $title = "User Edit";
        $description = "Some description for the page";
        $user = User::where('id', $id)->firstorfail();
        return view('admin.users.edit',compact('title','description','user'));
    }
}
