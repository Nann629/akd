@extends('layout.main')

@section('title', 'dokumen')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="" class="btn btn-primary">Tambah</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>File</th>
                                        <th>Tahun</th>
                                        <th>Kriteria | Sub</th>
                                        <th>Acess</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dokumenlist as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->dokumen }}</td>
                                            <td>{{ $data->tahun }}</td>
                                            <td>{{ $data->kriteria_id }}</td>
                                            <td>{{ $data->user_id }}</td>
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
