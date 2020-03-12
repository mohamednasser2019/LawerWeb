<?php

namespace App\Http\Controllers;

use App\Cases;
use App\Clients;
use App\Sessions;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getClients()
    {
        $clients = Clients::select('id', 'client_Name')->get();
        return view('cases.add_case', compact('clients'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {

            $data = $this->validate(request(), [
                'mokel_name' => 'required',
                'khesm_name' => 'required',
                'invetation_num' => 'required',
                'circle_num' => 'required',
                'court' => 'required',
                'first_session_date' => 'required',
                'inventation_type' => 'required',
                'to_whome' => 'required'
            ]);
            $mokel = implode(',', $request->mokel_name);
            $khesm = implode(',', $request->khesm_name);
            $month = date('m', strtotime($request->first_session_date));
            $year = date('yy', strtotime($request->first_session_date));

            $case = Cases::create(array_merge($request->except('mokel_name', 'khesm_name', 'month', 'year'), ['mokel_name' => $mokel, 'khesm_name' => $khesm, 'month' => $month, 'year' => $year]));
            $sessions = new Sessions();
            $sessions->session_date = $request->first_session_date;
            $sessions->case_Id = $case->id;
            $sessions->month = $month;
            $sessions->year = $year;
            $sessions->save();
            return response(['status' => true, 'msg' => 'Case Added successfully']);
        }
        return redirect()->route('cases.add_case')->with('success', 'Case Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
