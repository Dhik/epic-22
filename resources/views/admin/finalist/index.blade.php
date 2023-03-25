@extends('admin.layouts.app')

@section('content')    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Finalist Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Finalist</a></li>
                <li class="breadcrumb-item active">Main </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- Sponsorship Table -->
                            <a href="/admin/finalist/create" class="btn btn-primary">Input New Finalist</a>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> Title </th>
                                    <th> Subtitle </th> 
                                    <th> Line ID </th> 
                                    <th> Email </th> 
                                    <th> Competition </th> 
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($finalists as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->subtitle }}</td>
                                        <td>{{ $item->line_id }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->competition_name }}</td>
                                        <td>
                                            <a href="/admin/finalist/edit/{{ $item->id }}" class="btn btn-success"><i class="nav-icon fas fa-pen"></i></a>
                                            <button type="button" class="openModal btn btn-danger" data-toggle="modal" data-id="{{ $item->id }}" data-target="#modal-default">
                                                <i class="nav-icon fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="/admin/finalist/delete" method="post">
                {{ csrf_field() }}
                <div class="modal-header">
                  <h4 class="modal-title">Delete Confirmation</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure want to delete?&hellip;</p>
                  <input type="hidden" name="finalistId" id="finalistId" value=""/>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                  <button type="submit" class="btn btn-danger">Yes ! Delete it</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- jQuery -->
    <script src="{{ url('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script>
    $('.openModal').click(function() {
        var id = $(this).data('id');   
        $('#finalistId').val(id); 
    } );
    </script>
@endsection