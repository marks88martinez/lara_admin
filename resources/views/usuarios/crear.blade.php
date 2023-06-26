@extends('layouts.app')

@section('content')
<!-- ///////////////////////////////////// -->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Elements</li>
                    </ol>
                </div>
                <h4 class="page-title">Crear Usuarios</h4>
                @if ($errors->any())
                    <div class="alert alert-dark alert-dismissible fade show" role="alert">
                    <strong>¡Revise los campos!</strong>
                        @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <div class="tab-pane" id="input-types-preview" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('usuarios.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="example-palaceholder" class="form-label">Nombre</label>
                                            <input type="text" name="name" id="example-palaceholder" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-palaceholder" class="form-label">Email</label>
                                            <input type="email" name="email" id="example-palaceholder" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-palaceholder" class="form-label">Password</label>
                                            <input type="password" name="password" id="example-palaceholder" class="form-control" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-palaceholder" class="form-label">Password confirmación </label>
                                            <input type="password" name="confirm-password" id="example-palaceholder" class="form-control" >
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="inputState" class="form-label">Rol</label>
                                            <select id="inputState" class="form-select" name="roles[]">
                                                <option>----</option>
                                                @foreach ($roles as $rol)
                                                <option  value="{{ $rol }}" >{{$rol}}</option>
                                                @endforeach

                                            </select>
                                        </div>



                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div> <!-- end col -->


                            </div>
                            <!-- end row-->
                        </div> <!-- end preview-->



                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
</div>
<!-- ///////////////////////////////////// -->



@endsection
