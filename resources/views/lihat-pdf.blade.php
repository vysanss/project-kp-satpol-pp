<!DOCTYPE html>
<html>
<head>
    <title>Preview PDF</title>
</head>
<body>
    <h2>Preview PDF</h2>

    <!-- tampilkan pdf -->
    <iframe src="{{ asset('pdfs/' . $nama) }}" width="100%" height="600px"></iframe>

    <br><br>
    <!-- tombol download -->
    <a href="{{ route('pdf.download', $nama) }}" style="padding:10px 15px; background:#007bff; color:#fff; text-decoration:none; border-radius:5px;">
        Download PDF
    </a>
</body>
</html>
