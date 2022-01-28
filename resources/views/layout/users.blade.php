

    <div>
        @if (auth()->user() and auth()->user()->type == 'admin')
            @if ($users->count())
                <table border="1px solid vlack" style="padding: 10px">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Type</th>
                    </tr>
                    @foreach ($users as $user)
                        @if ($user->type == 'student' or $user->type=='donor')   
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->type}}</td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            @endif
        @else
                <h2>Access Denied !</h2>
        @endif
    </div>

