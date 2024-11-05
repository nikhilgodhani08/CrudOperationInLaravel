<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->

    <table border="1" cellspacing="0" cellpadding="10">
        @foreach ($Students as $s)
        <tr>
            <td>{{$s->rno}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->dob}}</td>
            <td>{{$s->gender}}</td>
            <td>{{$s->hobby}}</td>
            <td>

                <form action="deleteStudent/{{$s->rno}}" method="POST">
                    @csrf

                    <button type="submit">Delete</button>
                </form>
            </td>
            <td>
                <form action="editData" method="POST">
                    @csrf
                    <button type="submit" name="rno" value="{{$s->rno}}">Edit</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
</div>