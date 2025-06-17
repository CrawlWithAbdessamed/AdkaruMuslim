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
                @foreach ($adkars as $adkar)
                <tr>
                    <td>{{ $adkar->title }}</td>
                    <td>
                        <ul>
                            @foreach ($adkar->users as $user)
                                <li>{{ $user->name }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
