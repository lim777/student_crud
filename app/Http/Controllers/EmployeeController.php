<?php /** @noinspection PhpUndefinedMethodInspection */

namespace App\Http\Controllers;


use App\Http\Requests\EmployeeRequest;
use App\Model\Employee;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(EmployeeRequest $request)
    {
        Employee::create($request->all());

//        $employees = new Employee;
//
//            $employees->name = $request->input('name');
//            $employees->gender = $request->input('gender');
//            $employees->phone = $request->input('phone');
//            $employees->village = $request->input('village');
//            $employees->commune = $request->input('commune');
//            $employees->district = $request->input('district');
//            $employees->province = $request->input('province');
//            $employees->dob = $request->input('dob');
//        $employees->save();

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employee::findOrFail($id);
        return view('employee.edit', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {
        $employees = Employee::findOrFail($id);
        $employees->update($request->all());
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = Employee::findOrFail($id);
        $employees->delete();
        return redirect('employees');
    }
}
