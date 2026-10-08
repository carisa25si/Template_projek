<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertanyaan</title>
    <!-- CSS Bootstrap agar tampilan alert merah dan card sama seperti di petunjuk -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <div class="card" style="max-width: 500px;">
        <div class="card-body">
            <h5 class="card-title">Form Pertanyaan</h5>

            {{-- Menampilkan pesan error validasi jika ada --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form Input --}}
            <form action="{{ route('question.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama:</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Pertanyaan:</label>
                    <textarea name="pertanyaan" class="form-control">{{ old('pertanyaan') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>

</body>
</html>
