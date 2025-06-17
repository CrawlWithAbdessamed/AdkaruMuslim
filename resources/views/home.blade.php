<div class="flex-center position-ref full-height">
    <div class="content">
        <table>
            <thead>
            <tr>
                <th>Adkar</th>
                <th>Users</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>
                        <ul>
                            @foreach ($user->adkar as $adkar)
                                <li>{{ $adkar->title }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
