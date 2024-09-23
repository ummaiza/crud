<x-app-layout>
    <div class="container">
        <x-card title="Users" subtitle='table user'>
            <table class="table">
                <thead>
                    <th>Nama</th>
                    <th>Phone</th>
                    <th>Email</th>
                </thead>
                @empty (!$users)
                @foreach ($users as $index => $user)
                    <tbody>
                        <td>{{ $user['nama'] }}</td>
                        <td>{{ $user['phone'] }}</td>
                        <td>{{ $user['email'] }}</td>
                    </tbody>
                @endforeach
                @else
                <tr>
                    <td>
                        <div class="text-center">Data Not Found !!!</div>
                    </td>
                </tr>
                @endempty
            </table>
        </x-card>
    </div>
</x-app-layout>
