<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="font-weight-bold">GAMBAR</label>
            <input type="file" class="form-control" name="image">
        </div>

        <div class="form-group">
            <label class="font-weight-bold">JUDUL</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $berita->title) }}" placeholder="Masukkan Judul Blog">
        
            <!-- error message untuk title -->
            @error('judul')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label class="font-weight-bold">KONTEN</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Blog">{{ old('content', $berita->content) }}</textarea>
        
            <!-- error message untuk content -->
            @error('content')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>

    </form> 
</body>
</html>