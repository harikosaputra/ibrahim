@extends('template') <!-- Menggunakan layout template -->

@section('title', 'Edit Aqiqah')

@section('css')

@endsection

@section('content')
<section class="section">
    <form action="{{ route('aqiqah.update', $aqiqah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        <h5 class="card-title">Edit Aqiqah</h5>
                    </div>
                    <div class="col-md-auto">
                        <button class="btn btn-success" type="submit">Save</button>
                        <a href="{{ route('aqiqah.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" value="{{ old('nama', $aqiqah->nama) }}" required autocomplete="off">
                </div><br>
                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $aqiqah->phone) }}" required autocomplete="off">
                </div><br>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $aqiqah->email) }}" required autocomplete="off">
                </div><br>
                <div>
                    <label for="lokasi">Lokasi:</label>
                    <input type="text" class="form-control" name="lokasi" value="{{ old('lokasi', $aqiqah->lokasi) }}" required autocomplete="off">
                </div><br> 
                <div>
                    <label for="link">Link:</label>
                    <input type="text" class="form-control" name="link" value="{{ old('link', $aqiqah->link) }}" required autocomplete="off">
                </div><br>
            </div>
        </div>
    </form>
</section>
@endsection

@section('js')
<script src="/assets/extensions/jquery/jquery.min.js"></script>
<script>
    // Script tambahan jika dibutuhkan
</script>
@endsection
