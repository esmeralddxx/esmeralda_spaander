@extends('layout.master')
@section('content')
    <h1>Users:</h1>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/" title="Go back"> <i class="fas fa-backward "></i> </a>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('users.create') }}"
                       title="Create a user"> <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>Name</th>
                <th>email</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            <a href="{{ route('users.show', $user->id) }}" title="show">
                                <i class="fas fa-eye text-success  fa-lg"></i>
                            </a>
                            <a href="{{ route('users.edit', $user->id) }}">
                                <i class="fas fa-edit  fa-lg"></i>
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash fa-lg text-danger"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection
