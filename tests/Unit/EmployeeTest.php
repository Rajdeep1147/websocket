<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use App\Http\Controllers\EmployeesController;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_if_we_get_all_employee_data(): void
    {
        $employees = Employee::factory(10)->create([

            'joining_date'=>now()->toDateString()
            // 'employee_name'=>'Rajdeep'
        ]);
        $returnedvalue = (new EmployeesController())->index();
        $this->assertNotEmpty($returnedvalue);
        // $this->assertTrue(true);
        // $this->assertEquals([], $returnedvalue);
    }
}
