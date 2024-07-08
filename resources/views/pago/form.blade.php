<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="tipo_pago_id" class="form-label">{{ __('Tipos de pagos') }}</label>
            <select class="form-select" name="tipo_pago_id" id="tipo_pago_id">
                @foreach ($tiposPagos as $tipoPago)
                    <option value="{{ $tipoPago->id }}" @selected(count($pago->toArray()) && $pago->tipoPago->id == $tipoPago->id)>{{ $tipoPago->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-2 mb20">
            <label for="numero" class="form-label">{{ __('Número') }}</label>
            <input type="text" name="numero" class="form-control @error('numero') is-invalid @enderror"
                value="{{ old('numero', $pago?->numero) }}" id="numero" placeholder="Número">
            {!! $errors->first('numero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="concepto" class="form-label">{{ __('Concepto') }}</label>
            <input type="text" name="concepto" class="form-control @error('concepto') is-invalid @enderror"
                value="{{ old('concepto', $pago?->concepto) }}" id="concepto" placeholder="Concepto">
            {!! $errors->first('concepto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="number" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror"
                value="{{ old('cantidad', $pago?->cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_pago" class="form-label">{{ __('Fecha de pago') }}</label>
            <input type="date" name="fecha_pago" class="form-control @error('fecha_pago') is-invalid @enderror"
                value="{{ old('fecha_pago', $pago?->fecha_pago) }}" id="fecha_pago" placeholder="Fecha de apgo">
            {!! $errors->first('fecha_pago', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar Datos') }}</button>
    </div>
</div>
