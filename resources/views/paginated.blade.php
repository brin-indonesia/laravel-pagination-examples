@extends('layout')

@section('body')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('d F Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Empty is whole</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
@endsection
