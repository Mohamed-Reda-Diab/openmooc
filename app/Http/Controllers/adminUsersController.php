<?php

namespace App\Http\Controllers;

use OpenMooc\Users\Services\userGroupsService;
use OpenMooc\Users\Services\usersService;
use Validator;
use Illuminate\Http\Request;

class adminUsersController extends Controller
{
    // show all users
    public function index()
    {
        $uService = new usersService();
        $users = $uService->getUsers();
        return view('dashboard.admin.users')->with('users',$users);
    }

    // show add user form
    public function create()
    {
        $ugroup = new userGroupsService();
        $groups = $ugroup->getAllGroups();
        return view('dashboard.admin.adduser')->with('groups',$groups);
    }

    // add new user to database
    public function store(Request $request)
    {
        $userService = new usersService();
        if($userService->addUser($request)){
            return back();
        }else{
            return $userService->errors();
        }
    }

    // show user by id
    public function show($id)
    {
        //
    }

    // show update form
    public function edit($id)
    {
        $ugService = new userGroupsService();
        $groups = $ugService->getAllGroups();
        $userService = new usersService();
        $user = $userService->getUser($id);
        return view('dashboard.admin.updateuser')->with('groups',$groups)
            ->with('user',$user);
    }

    // update user in database
    public function update(Request $request)
    {
        $userService = new usersService();
        if($userService->updateUser($request)){
            return back();
        }else{
            return $userService->errors();
        }
    }

    // delete user from database
    public function destroy($id)
    {
        $userService = new usersService();
        if($userService->deleteUser($id)){
            return back();;
        }else{
            return $userService->errors();
        }
    }


    public function updateUserPassword($id)
    {
        $userService = new usersService();
        $user = $userService->getUser($id);
        return view('dashboard.admin.updatePassword')->with('user',$user);
    }


    public function processupdateUserPassword(Request $request)
    {
        $userService = new usersService();
        if($userService->updateUserPassword($request)){
            return back();;
        }else{
            return $userService->errors();
        }
    }

    public function getUsersByGroup($id)
    {
        $uService = new usersService();
        $users = $uService->getUsersByGroup($id);
        return view('dashboard.admin.usersbygroup')->with('users',$users);
    }

    public function getUsersByActiveStatus($status)
    {
        $uService = new usersService();
        $users = $uService->getUsersByActiveStatus($status);
        return view('dashboard.admin.usersbystatus')->with('users',$users);
    }

    public function searchUsers()
    {
        $keyword = $_GET['search'];
        $uService = new usersService();
        $users = $uService->searchUsers($keyword);
        return view('dashboard.admin.usersearch')->with('users',$users);
    }

    // active user
    public function activeUser($id)
    {
        $userService = new usersService();
        if ($userService->activeUser($id))
        {
            return back();
        }else{
            return $userService->errors();
        }
    }

    public function deActivateUser($id)
    {
        $userService = new usersService();
        if ($userService->deActivateUser($id))
        {
            return back();
        }else{
            return $userService->errors();
        }
    }

    // delete user from database
    public function deleteUser($id)
    {
        $userService = new usersService();
        if($userService->deleteUser($id)){
            return back();
        }else{
            return $userService->errors();
        }
    }

}