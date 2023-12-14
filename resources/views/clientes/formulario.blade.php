<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" class="form-control @error('nombre') is-invalid @enderror">
    @error('nombre')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
    <input type="text" name="apellido_paterno" value="{{ old('apellido_paterno', $cliente->apellido_paterno) }}" class="form-control @error('apellido_paterno') is-invalid @enderror">
    @error('apellido_paterno')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="apellido_materno" class="form-label">Apellido Materno</label>
    <input type="text" name="apellido_materno" value="{{ old('apellido_materno', $cliente->apellido_materno) }}" class="form-control @error('apellido_materno') is-invalid @enderror">
    @error('apellido_materno')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="telefono" value="{{ old('telefono', $cliente->telefono) }}" class="form-control @error('telefono') is-invalid @enderror">
    @error('telefono')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="correo" class="form-label">Correo</label>
    <input type="email" name="correo" value="{{ old('correo', $cliente->correo) }}" class="form-control @error('correo') is-invalid @enderror">
    @error('correo')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>