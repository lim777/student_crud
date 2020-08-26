<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function index()
    {
        if (request()->ajax()){
            return datatables()->of(Teacher::get())
                ->addColumn('action', function ($data){
                 return '<button type="button" class="edit btn btn-warning btn-sm" name="edit" id="'.$data->id.'">Edit</button>';
//                    return '<button type="button" class="delete btn btn-danger btn-sm" name="delete" id="'.$data->id.'">Delete</button>';
                })
                ->make(true);
        }

        return view('teacher.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'name'   => 'required',
           'gender' => 'required',
           'phone'  => 'required',
           'address'    => 'required'
        ]);
        $teacher = Teacher::create(request()->all(),$this);
        return redirect()->route('teachers.index');
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
        //
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
        //
    }

}
