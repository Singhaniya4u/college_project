@foreach ($student as $item)
<table style="border: 1px solid red">
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
