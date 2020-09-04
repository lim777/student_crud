<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Requests\PositionRequest;
use App\Model\Employee;
use App\Model\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::all();
        return view('position.index',compact('positions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = array();
        foreach (Employee::all() as $employee){
            $employees[$employee->id] = $employee->name;
        }
        return view('position.create', compact('employees'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PositionRequest $request)
    {
        Position::create($request->all());
        return redirect()->route('positions.index')->with(['flash_message' =>'Date created successfuly']);
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
        $positions = Position::findOrFail($id);
        $employees = array();
        foreach (Employee::all() as $employee){
            $employees[$employee->id] = $employee->name;
        }
        return view('position.edit', compact('positions','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PositionRequest $request, $id)
    {
        $positions = Position::findOrFail($id);
        $employees = array();
        $positions->update($request->all());
        return redirect()->route('positions.index')->with(['flash_message' =>'Date updated successfuly']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $positions = Position::findOrFail($id);
        $positions->delete();
        return redirect('positions')->with(['flash_message' =>'Date deleted successfuly']);
    }
}
