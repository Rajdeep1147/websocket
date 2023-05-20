<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    //main page api
    public function index()
    {
        $data =  Employee::all();
        $response = EmployeeResource::collection(
            $data
        );

        return response()->json([
            'data' => $response
        ]);

    }


}
