<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Portfolio;
use App\Candidate;
use App\Http\Requests\CandidateRequest;
use Illuminate\Support\Facades\Input;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        $candidate = Candidate::all();
        return view('admin.candidate.index',compact('portfolio','candidate'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateRequest $request)
    {
        $candidateName = Input::get('full_name');
        $candidatePortfolio = Input::get('select_portfolio');
        $candidateId = uniqid(rand(255,3));

        $newCandidate = new Candidate();
        $newCandidate->candidate_id = $candidateId;
        $newCandidate->full_name =$candidateName;
        $newCandidate->portfolio_id = $candidatePortfolio;

        $newCandidate->save();

        return redirect()->back()->with('message','Candidate created successfully');
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
        if(Candidate::findOrFail($id)->delete()){
        return redirect()->back()->with('message','Candidate Deleted Successfully');
        }
        return redirect()->back()->withErrors('Operation failed! Please try again');


    }
}
