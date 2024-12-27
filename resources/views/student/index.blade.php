<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<h1>Details of Students Table</h1>
@foreach ($student as $item)
<h4>Details of {{$item->name}}</h4>
<table class="table table-striped-columns table-bordered mx-5">
    <tr>
        <td>Name:</td>
        <td>{{$item->name}}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{{$item->email}}</td>
    </tr>
    <tr>
        <td>Roll number:</td>
        <td>{{$item->roll_number}}</td>
    </tr>
    <tr>
        <td>Enrolled Year:</td>
        <td>{{$item->year_enrolled}}</td>
    </tr>
    <tr>
        <td>Passing Year:</td>
        <td>{{$item->year_passing}}</td>
    </tr>
    <tr>
        <td>Branch: </td>
        <td>{{$item->branch}}</td>
    </tr>
</table>
@endforeach
