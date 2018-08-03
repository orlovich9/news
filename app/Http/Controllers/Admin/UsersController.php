<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\UsersTypes;
use App\Http\Requests\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public $users;
    public $usertypes;

    public function __construct()
    {
        $this->user = new User;
        $this->usertypes = new UsersTypes;
    }

    /**
     * Display Users List.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $arUsers = $this->user->getAllUsersInfo();
        $arUserTypes = $this->usertypes->getAllUserTypes();

        return view('admin.users', ['arUsers' => $arUsers, 'arUserTypes' => $arUserTypes]);
    }

    /**
     * Create or update users info
     *
     * @param Users $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdateUsers(Users $request)
    {
        $this->user->updateOrCreate($request);

        return redirect()->route('admin.users');
    }

    /**
     * Delete user
     *
     * @param Request $request
     * @return int
     */
    public function delete(Request $request)
    {
        return $this->user->deleteUser($request);
    }
}
