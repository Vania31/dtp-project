@extends('tamplates.default')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('students.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nama </label>
                <input type="text" name="name" class="form-control">
            </div>
           
            <div class="mb-3">
                <label for="" class="form-label">Alamat </label>
                <input type="text" name="address" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">No telephone</label>
                <input type="text" name="phone_number" class="form-control">
            </div>
           
            <div class="mb-3">
                <label for="" class="form-label">Kelas </label>
                <input type="text" name="class" class="form-control">
            </div>

            <div class="mb-3">
                <input type="submit" value="simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection