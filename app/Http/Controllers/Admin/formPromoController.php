<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\formPromo;
use Illuminate\Http\Request;

class formPromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $formpromo = formPromo::where('nama_promo', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi_promo', 'LIKE', "%$keyword%")
                ->orWhere('diskon', 'LIKE', "%$keyword%")
                ->orWhere('tombol', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $formpromo = formPromo::latest()->paginate($perPage);
        }

        return view('form-promo.index', compact('formpromo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('form-promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        formPromo::create($requestData);

        return redirect('admin/form-promo')->with('flash_message', 'formPromo added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $formpromo = formPromo::findOrFail($id);

        return view('form-promo.show', compact('formpromo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $formpromo = formPromo::findOrFail($id);

        return view('form-promo.edit', compact('formpromo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $formpromo = formPromo::findOrFail($id);
        $formpromo->update($requestData);

        return redirect('admin/form-promo')->with('flash_message', 'formPromo updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        formPromo::destroy($id);

        return redirect('admin/form-promo')->with('flash_message', 'formPromo deleted!');
    }
}
