<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
    <title>Teacher Details</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Details of Teacher</h1>
        @foreach ($teacher as $item)
        <h4>Details of {{$item->name}}</h4>
        <form action="{{ route('teacher.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <table class="table table-striped table-bordered mx-5">
                <tr>
                    <td>Teacher ID:</td>
                    <td>
                        <input type="text" name="teacher_id" class="form-control" value="{{ $item->teacher_id }}">
                    </td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name" class="form-control" value="{{ $item->name }}">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" name="email" class="form-control" value="{{ $item->email }}">
                    </td>
                </tr>
                <tr>
                    <td>Subject:</td>
                    <td>
                        <input type="text" name="subject" class="form-control" value="{{ $item->subject }}">
                    </td>
                </tr>
                <tr>
                    <td>Branch:</td>
                    <td>
                        <input type="text" name="branch" class="form-control" value="{{ $item->branch }}">
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-whksZ4rRBBRXJy2N5dxgM/UsCHZYqPJ3BXsPAIujD4iqvvHZ4LR4mc4f0sTHT6HI" 
            crossorigin="anonymous"></script>
</body>
</html>
