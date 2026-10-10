
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pertanyaan</title>
</head>
<body>
    <h2>Pertanyaan Berhasil Dikirim!</h2>

    <p>Nama: {{ $nama }}</p>
    <p>Email: {{ $email }}</p>
    <p>Pertanyaan: {{ $pertanyaan }}</p>

    <a href="{{ url('/question') }}">Kembali ke Form</a>
</body>
</html>
