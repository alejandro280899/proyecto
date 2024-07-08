@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? __('show') . " " . __('Pago') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('show') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pagos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Número:</strong>
                                    {{ $pago->numero }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Concepto:</strong>
                                    {{ $pago->concepto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad:</strong>
                                    {{ $pago->cantidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha de pago:</strong>
                                    {{ $pago->fecha_pago }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
