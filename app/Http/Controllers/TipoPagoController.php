<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoPagoRequest;
use App\Models\TipoPago;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TipoPagoController extends Controller
{
    public function index(Request $request): View
    {
        $tiposPagos = TipoPago::paginate();
        return view('tipo-pago.index', compact('tiposPagos'))
        ->with('i', ($request->input('page', 1) - 1) * $tiposPagos->perPage());
    }

    /**
     * Show the form for creating a new resource 
     */
    public function create(): View
    {
        $tipoPago = new TipoPago();
        // dd(isEmpty($pago->toArray()));
        return view('tipo-pago.create', compact('tipoPago'));
    }
     
    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoPagoRequest $request): RedirectResponse
    {
        TipoPago::create($request->validated());
        return Redirect::route('tipos-pagos.index')
        ->with('success', 'Tipo de pago created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
{
    $tipoPago = TipoPago::find($id);
    return view('tipo-pago.show', compact('tipoPago'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoPago = TipoPago::find($id);
        return view('tipo-pago.edit', compact('tipoPago'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoPagoRequest $request,$id): RedirectResponse
{
    $tipoPago = TipoPago::find($id);
    $tipoPago->update($request->validated());
    return Redirect::route('tipos-pagos.index')
        ->with('success', 'Tipo de pago actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        TipoPago::find($id)->delete();
        return Redirect::route('tipos-pagos.index')
        ->with('success', 'Tipo de pago deleted successfully.');
    }
}
