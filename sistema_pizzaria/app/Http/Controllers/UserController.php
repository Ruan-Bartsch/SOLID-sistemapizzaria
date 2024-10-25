<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserController
 *
 * @package App\Http\Controllers
 * @author Vinícius Siqueira
 * @link https://github.com/ViniciusSCS
 * @date 2024-08-23 21:48:54
 * @copyright UniEVANGÉLICA
 */
class UserController extends Controller
{
   
    public function __construct(private User $user)
    {
    }


    public function store(Request $request)
    {
        return $this->user->create($request->all());
    }

    public function index()
    {
        return $this->user->all();
    }

    public function show($id)
    {
        return $this->user->find($id);
    }

    public function update(Request $request, $id)
    {
        $user = $this->user->find($id);
        $user->update($request->all());
        return $user;
    }

    public function destroy($id)
    {
        return $this->user->destroy($id);
    }
}