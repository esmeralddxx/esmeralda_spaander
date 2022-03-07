@extends('layout.master')
@section('content')
    <h1>Message:</h1>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
                <div class="pull-right">
                    <a class="btn btn-primary" href="/" title="Go back"> <i class="fas fa-backward "></i> </a>
                    <a class="btn btn-success" href="{{ route('messages.create') }}"
                       title="Create a message"> <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
            </div>
        </div>


        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>Titel</th>
                <th width="850px">Content</th>
            </tr>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->titel }}</td>
                    <td>{{ $message->content }}</td>
                    <td>
                        <form action="{{ route('messages.destroy', $message->id) }}" method="POST">

                            <a href="{{ route('messages.show', $message->id) }}" title="show">
                                <i class="fas fa-eye text-success  fa-lg"></i>
                            </a>

                            <a href="{{ route('messages.edit', $message->id) }}">
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



