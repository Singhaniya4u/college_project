<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Details of Teachers Table</h1>
@foreach ($teacher as $item)
<h4>Details of {{$item->name}}</h4>
<table class="table table-striped-columns table-bordered mx-5">
    <tr>
        <td>Teacher ID:</td>
        <td>{{$item->teacher_id}}</td>
    </tr>
    <tr>
        <td>Name:</td>
        <td>{{$item->name}}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{{$item->email}}</td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td>{{$item->subject}}</td>
    </tr>
    <tr>
        <td>Branch</td>
        <td>{{$item->branch}}</td>
    </tr>
    <tr>
        <td>Actions</td>
        <td>
            <a href="{{ route('teacher.edit', [$item->id]) }}"><button type="button" class="btn btn-primary">Edit</button></a> 
            <button type="button" class="btn btn-success">Show</button>
        </td>
    </tr>
</table>    
@endforeach
