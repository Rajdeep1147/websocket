<?php

namespace App\Http\Controllers;

use App\Repositories\InterfaceClasses\UserRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository =$userRepository;
    }
    public function index()
    {
        return response()->json($this->userRepository->all(), 200);
    }
}
