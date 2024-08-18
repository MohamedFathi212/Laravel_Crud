<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Batch;
use Faker\Provider\Base;
use Illuminate\View\View;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::all();
        return view ('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message', 'Batch Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {

            $batches = Batch::find($id);

            if (!$batches) {
                return redirect('batches')->with('flash_message', 'Batch not found!');
            }

            return view('batches.show')->with('batches', $batches);
        }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $batches = Batch::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batch = Batch::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect('batches')->with('flash_message', 'Batch Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batch deleted!');
    }
}
