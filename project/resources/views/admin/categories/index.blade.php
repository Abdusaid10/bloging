@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Categories
        </div>
        <div class="car-body">
            <table class="table table-hover">
                <thead>
                    <th>
                        Category name    
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>
                <tbody>
                    @if($categories->count() > 0)
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td>
                                    <a href="{{route('category.edit', ['id'=>$category->id]) }}" class="btn btn-xs btn-info">
                                        Edit        
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('category.delete', ['id'=>$category->id]) }}" class="btn btn-xs btn-danger">
                                        Delete        
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    @else
                        <th class="text-center" colspan="5">No categories</th>

                    @endif
                </tbody>

            </table>

        </div>
    </div>
@stop