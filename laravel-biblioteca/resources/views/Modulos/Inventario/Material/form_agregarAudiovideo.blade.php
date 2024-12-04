@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Audiovideo')
@section('PAG_GRUPO', 'Modulos')
@section('content')

<div class="card-group">
        <div class="col-10">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Audiovideo</h5>
                    <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-circle"></i>
                    </button>
                </div>


@endsection
