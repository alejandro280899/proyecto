<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagoRequest;
use App\Models\Pago;
use App\Models\TipoPago;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isEmpty;

class PagoController extends Controller
{
    public function index(Request $request): View
    {
        $pagos = Pago::paginate();
        return view('pago.index', compact('pagos'))
        ->with('i', ($request->input('page', 1) - 1) * $pagos->perPage());
    }

    /**
     * Show the form for creating a new resource 
     */
    public function create(): View
    {
        $pago = new Pago();
        // dd(isEmpty($pago->toArray()));
        $tiposPagos = TipoPago::all();
        return view('pago.create', compact('pago','tiposPagos'));
    }
     
    /**
     * Store a newly created resource in storage.
     */
    public function store(PagoRequest $request): RedirectResponse
    {
        Pago::create($request->validated());
        return Redirect::route('pagos.index')
        ->with('success', 'Pago created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
{
    $pago = Pago::find($id);
    return view('pago.show', compact('pago'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pago = Pago::find($id);
        $tiposPagos = TipoPago::all();
        return view('pago.edit', compact('pago','tiposPagos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PagoRequest $request, Pago $pago): RedirectResponse
{
    $pago->update($request->validated());
    return Redirect::route('pagos.index')
        ->with('success', 'Pago actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Pago::find($id)->delete();
        return Redirect::route('pagos.index')
        ->with('success', 'Pago deleted successfully.');
    }
}
