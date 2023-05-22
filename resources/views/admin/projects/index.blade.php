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
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
