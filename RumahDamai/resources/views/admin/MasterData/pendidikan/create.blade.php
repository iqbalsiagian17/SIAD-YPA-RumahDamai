@extends('layouts.management.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Tambah Tingkat Pendidikan</h2>

                <!-- Tampilkan pesan kesalahan validasi jika ada -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.pendidikan.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="tingkat_pendidikan">Jenjang Pendidikan</label>
                        <input type="text" class="form-control" name="tingkat_pendidikan"
                            value="{{ old('tingkat_pendidikan') }}" required>
                    </div>

                    <a href="{{ url()->previous() }}" class="btn btn-primary">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection