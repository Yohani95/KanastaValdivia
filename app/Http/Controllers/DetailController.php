<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

/**
 * Class DetailController
 * @package App\Http\Controllers
 */
class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::paginate();

        return view('detail.index', compact('details'))
            ->with('i', (request()->input('page', 1) - 1) * $details->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detail = new Detail();
        return view('detail.create', compact('detail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Detail::$rules);

        $detail = Detail::create($request->all());

        return redirect()->route('details.index')
            ->with('success', 'Detail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Detail::find($id);

        return view('detail.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Detail::find($id);

        return view('detail.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Detail $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        request()->validate(Detail::$rules);

        $detail->update($request->all());

        return redirect()->route('details.index')
            ->with('success', 'Detail updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detail = Detail::find($id)->delete();

        return redirect()->route('details.index')
            ->with('success', 'Detail deleted successfully');
    }
}
