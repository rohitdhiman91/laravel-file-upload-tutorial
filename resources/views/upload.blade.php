<!DOCTYPE html>
<html>
<head>
    <title>Laravel File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
        <p>File Path: {{ session('file') }}</p>
    @endif

    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>

    @error('file')
        <p style="color: red;">{{ $message }}</p>
    @enderror
</body>
</html>
