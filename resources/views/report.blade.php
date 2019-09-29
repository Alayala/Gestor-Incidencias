@extends('layouts.app')

@section('content')
<div class="card border-primary mb-3">
    <div class="card-header text-white bg-primary">Dashboard</div>

    <div class="card-body">
        <form action="">
            <div class="form-group">
                <label for="category_id">Categoría</label>
                <select class="form-control" name="category_id"></select>
            </div>

            <div class="form-group">
                <label for="priority">Prioridad</label>
                <select class="form-control" name="priority">
                    <option value="B">Baja</option>
                    <option value="N">Normal</option>
                    <option value="A">Alta</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Título</label>
                <input class="form-control" type="text" name="title">
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" name="description"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Guardar incidencia</button>
            </div>

        </form>
    </div>
</div>
@endsection
