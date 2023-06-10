<div>
    <h1>Student list</h1>
    <table>
        <tr>
            <th>Student Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Nummber</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->phone_number}}</td>
        <td><button wire:click="deleteStudent({{$student->id}})">Delete</button></td>
        </tr>
        @endforeach
    </table>
</div>
