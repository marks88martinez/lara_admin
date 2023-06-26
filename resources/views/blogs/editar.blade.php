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
                <h4 class="page-title">Crear Blog</h4>
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

                                    <form action="{{ route('blogs.update',$blog->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="example-palaceholder" class="form-label">Título</label>
                                            <input type="text" name="titulo" class="form-control" value="{{ $blog->titulo }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-textarea"  class="form-label">Contenido</label>
                                            <textarea class="form-control" name="contenido" style="height: 100px">{{ $blog->contenido }}</textarea>


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
