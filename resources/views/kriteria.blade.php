@extends('layout.main')

@section('title', 'Kriteria')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="kriteria-add" class="btn btn-primary">Tambah</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Code</th>
                                        <th>Keterangan</th>
                                        <th>Sub</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kriterialist as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->code }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>{{ $data->sub_id }}</td>
                                            <td>
                                            </td>
                                        </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </section>
@endsection
