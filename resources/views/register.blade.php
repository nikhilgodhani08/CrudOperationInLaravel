<div>
    <center>
        <form action="/createStudent" method="post">
            @csrf
            <h1>Register Student</h1>
            <table>
                <tr>
                    <td>Name :- </td>
                    <td><input type="text" name="name"> </td>
                </tr>
                <tr>
                    <td>email :- </td>
                    <td><input type="email" name="email" id=""> </td>
                </tr>
                <tr>
                    <td>gender :- </td>
                    <td>
                        <input type="radio" name="gender" value="male" id="">male &nbsp;
                        <input type="radio" name="gender" value="female" id="">female &nbsp;

                    </td>


                </tr>
                <tr>
                    <td>Hobby :- </td>
                    <td>
                        <input type="checkbox" name="hobby[]" value="cricket" id="">cricket &nbsp;

                        <input type="checkbox" name="hobby[]" value="hocky" id="">hocky &nbsp;
                        <input type="checkbox" name="hobby[]" value="other" id="">other
                    </td>
                </tr>
                <tr>
                    <td>Dob :- </td>
                    <td><input type="date" name="dob" id=""></td>
                </tr>
                <tr>
                    <td>city :- </td>
                    <td>
                        <select name="city" id="">
                            <option value="surat"> surat</option>
                            <option value="mumbai">mumbai</option>
                            <option value="patna">patna</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        password :-
                    </td>
                    <td>

                        <input type="password" name="password" id="">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <button type="submit">Register</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</div>