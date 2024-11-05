<div>
    <center>
        <form action="update" method="post">
            @csrf
            <h1>Update Student</h1>
            <table>
                <tr>
                    <td>Name :- </td>
                    <td><input type="text" name="name" value="{{$student->name}}"> </td>
                </tr>
                <tr>
                    <td>email :- </td>
                    <td><input type="email" name="email" id="" value="{{$student->email}}"> </td>
                </tr>
                <tr>
                    <td>gender :- </td>
                    <td>
                        <input type="radio" name="gender" value="male" id=""
                            {{$student->gender=='male'?'checked':''}}>male &nbsp;
                        <input type="radio" name="gender" value="female" id=""
                            {{$student->gender=='female'?'checked':''}}>female &nbsp;

                    </td>


                </tr>
                <tr>
                    <td>Hobby :- </td>
                    <td>
                        @php
                        $arr=explode(",",$student->hobby)
                        @endphp
                        <input type="checkbox" name="hobby[]" {{in_array("cricket",$arr)?'checked':''}} value="cricket"
                            id="">cricket &nbsp;

                        <input type="checkbox" name="hobby[]" {{in_array("hocky",$arr)?'checked':''}} value="hocky"
                            id="">hocky &nbsp;
                        <input type="checkbox" name="hobby[]" {{in_array("other",$arr)?'checked':''}} value="other"
                            id="">other
                    </td>
                </tr>
                <tr>
                    <td>Dob :- </td>
                    <td><input type="date" name="dob" id="" value="{{$student->dob}}"></td>
                </tr>
                <tr>
                    <td>city :- </td>
                    <td>

                        <select name="city" id="">
                            <option value="surat" {{$student->city=="surat"?'selected':''}}> surat</option>
                            <option value="mumbai" {{$student->city=="mumbai"?'selected':''}}>mumbai</option>
                            <option value="patna" {{$student->city=="patna"?'selected':''}}>patna</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        password :-
                    </td>
                    <td>

                        <input type="password" name="password" id="" value="{{$student->password}}">
                    </td>
                </tr>
                <input type="hidden" name="rno" value="{{$student->rno}}">

                <tr>
                    <td colspan="2" align="center">
                        <button type="submit">Update</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</div>