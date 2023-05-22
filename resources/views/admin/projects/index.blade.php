@extends('layouts.admin')

@section('content')
<div class="col-10">



    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.projects.show', $project->slug)}}">VEDI</a>
                        <a href="{{route('admin.projects.edit', $project->slug)}}" class="btn btn-warning">MODIFICA</a>
                        <form class="mt-3" action="{{route('admin.projects.destroy', ['project' => $project->slug])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">ELIMINA</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
