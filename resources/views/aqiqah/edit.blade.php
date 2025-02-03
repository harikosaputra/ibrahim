@extends('template') <!-- Menggunakan layout template -->

@section('title', 'Update ibrahim Aqiqah')

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
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $aqiqah->name) }}" required autocomplete="off">
                </div><br>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $aqiqah->email) }}" required autocomplete="off">
                </div><br>
                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $aqiqah->phone) }}" required autocomplete="off">
                </div><br>
                <div>
                    <label for="address">Address:</label>
                    <textarea class="form-control" name="address" required autocomplete="off">{{ old('address', $aqiqah->address) }}</textarea>
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
