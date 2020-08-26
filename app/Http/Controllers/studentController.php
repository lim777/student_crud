<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'name'    =>  'required',
//            'gender'     =>  'required',
//            'phone'        =>  'required',
//            'address'       =>  'required'
//        ]);
//        $student = new student([
//            'name'    =>  $request->input('name'),
//            'gender'     =>  $request->input('gender'),
//            'phone'        =>  $request->input('phone'),
//            'address'       =>  $request->input('address')
//        ]);
//        $student->save();
        $this->validate($request, [
            'name'    =>  'required',
            'gender'     =>  'required',
            'phone'        =>  'required',
            'address'       =>  'required'
        ]);
        student::create(\request()->all(),$this);

        return redirect()->route('students.index')->with('success', 'Data Added');
        
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
        $student = student::findorFail($id);
        return view('students.edit')->with(['student' =>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::findorFail($id);
        $student->delete();
        return redirect('students');
    }
}
