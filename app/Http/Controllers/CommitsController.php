<?php

namespace App\Http\Controllers;

use App\Commit;
use Illuminate\Http\Request;

class CommitsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
   public function index()
   {
       $data = Commit::all();
       return view('commits.index',compact('data'));
   }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
   public function store(Request $request)
   {
      $data = $request->validate([
           'first_name'=>'required|min:2|max:100',
           'commit'=>'required|max:255'
       ]);
    Commit::query()->create($data);
        return redirect()->route('commits.index');
   }


}
