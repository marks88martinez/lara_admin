@extends('layouts.app')

@section('content')


{{-- /////////////////////////////// --}}  <!-- start page title -->
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
            <h4 class="page-title">Blogs</h4>
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

{{-- /////////////////////////////// --}}
<div class="row mb-2">
    <div class="col-sm-4">

        @can('crear-blog')
        <a class="btn btn-danger rounded-pill mb-3" href="{{ route('blogs.create') }}"><i class="mdi mdi-plus"></i> Crear Blog</a>
        @endcan

    </div>
    <div class="col-sm-8">

    </div><!-- end col-->
</div>
{{-- /////////////////////////////// --}}
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Blogs</h4>
                <div class="table-responsive-sm">
                    <table class="table table-centered mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Contenido</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->titulo }}</td>
                                <td>{{ $blog->contenido }}</td>

                                <td  class="table-action">
                                    <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                                        @can('editar-blog')
                                        <a class="action-icon" href="{{ route('blogs.edit',$blog->id) }}"><i class="mdi mdi-pencil"></i></a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-blog')
                                        <a type="submit"  class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        @endcan
                                    </form>
                                </td>



                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $blogs->links() !!}
                    </div>
                </div> <!-- end table-responsive-->



            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

</div>
{{-- /////////////////////////////// --}}

@endsection
