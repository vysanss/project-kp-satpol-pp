<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Daftar {{ ucfirst(str_replace('_', ' ', $kategori)) }}</h2>

<ul>
    @foreach ($pdfs as $pdf)
        <li>
            <a href="{{ asset($pdf->path) }}" target="_blank">{{ $pdf->nama_file }}</a> |
            <a href="{{ route('pdf.download', $pdf->id) }}">Download</a>
        </li>
    @endforeach
</ul>

</body>
</html>