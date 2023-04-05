@extends('layout.main')

@section('title', 'Add New Kriteria')

@section('content')
    <form action="kriteria" method="post">
        @csrf
        <div mt-4 col-8 m-auto>
            <form action="">
                <div mb-3>
                    <label for="code">Code</label>
                    <input type="text" class="form-control" name="code" id="code" required>

                </div>
                <div mb-3>
                    <label for="code">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan" required>
                </div>

                <div mb-3>
                    <label for="code">Sub</label>
                    <select name="sub_id" id="sub" class="form-control" required>
                        @foreach ($sub as $item)
                            <option value="">Select One</option>
                            <option value="{{ $item->code }}">{{ $item->code }}</option>
                        @endforeach
                    </select>
                </div>

            </form>
            <div>
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </div>
    </form>
@endsection
