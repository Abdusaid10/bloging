@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Tags
        </div>
        <div class="car-body">
            <table class="table table-hover">
                <thead>
                    <th>
                        Tag name    
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>
                <tbody>
                    @if($tags->count() > 0)
                        @foreach($tags as $tag)
                            <tr>
                                <td>
                                    {{ $tag->tag }}
                                </td>
                                <td>
                                    <a href="{{route('tag.edit', ['id'=>$tag->id]) }}" class="btn btn-xs btn-info">
                                        Edit        
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('tag.delete', ['id'=>$tag->id]) }}" class="btn btn-xs btn-danger">
                                        Delete        
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    @else
                        <th class="text-center" colspan="5">No tags yet</th>

                    @endif
                </tbody>

            </table>

        </div>
    </div>
@stop