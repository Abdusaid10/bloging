@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Posts
        </div>
        <div class="car-body">
            <table class="table table-hover">
                <thead>
                    <th>
                        Image   
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Trash
                    </th>
                </thead>
                <tbody>
                    @if($posts->count() > 0)
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    <img src="{{ $post->featured }}" width="80px" height="50px">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{ route('post.edit', ['id'=>$post->id]) }}" class="btn btn-xs btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('post.delete', ['id'=>$post->id]) }}" class="btn btn-xs btn-danger">Trash</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <th colspan="5" class="text-center">
                            No published posts
                        </th>

                    @endif
                </tbody>

            </table>

        </div>
    </div>
@stop