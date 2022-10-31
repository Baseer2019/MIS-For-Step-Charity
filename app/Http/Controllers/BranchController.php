<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::select('id','name','description')->get();
        return view('admin.branches.branch_list', compact(['branches']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

       

        $branch = Branch::create($data);

        return redirect('user')->with('message', 'Branch Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::findOrFail($id);
    
        return view('admin.branches.edit_branch',compact(['branch']));
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
        if(Auth::user()->id == $id){
            $request->validate([
            'name' => 'bail|required|string|min:3|max:500',
            'description' => 'required|string|min:3|max:500',
            
        ]);
    }else{
        $request->validate([
            'name' => 'required|string|min:3|max:500',
            'description' => 'required|string|min:3|max:500',
            
        ]);
    }

    $data = $this->getRequest($request);

    $user = Branch::findOrFail($id);
    $user->update($data);
    $user->save();
    return redirect('user')->with('message', 'Branch Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Branch::findOrFail($id);
        $data->delete();
        return redirect()->route('user')->with('success', 'Record deleted successfully');
    }
}
