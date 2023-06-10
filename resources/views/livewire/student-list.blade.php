<div>
    <h1>Student list</h1>
    <table>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Nummber</th>
        </tr>
        @foreach($students as $student)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->phone_number}}</td>
        </tr>
        @endforeach
    </table>
</div>
