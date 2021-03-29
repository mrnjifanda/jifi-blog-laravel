@section('title', 'Admin')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('create') }}">Created Post</a>
                </div>

                <div class="m-3">
                    <table class="table table-bordered text-center">
                        <thead class="thead-dark">
                            <th scope="col">Id</th>
                            <th scope="col" class="text-left">Title</th>
                            <th scope="col">Published At</th>
                            <th scope="col">Created At</th>
                            <th scope="col" colspan="2">Action</th>
                        </thead>
    
                        <tbody class="bg-white">
                            @forelse ($posts as $post)
                                <tr>
                                    <td scope="row">{{ $post->id }}</td>
                                    <td class="text-left">{{ $post->title }}</td>
                                    <td>{{ date('Y M d H:i:s', strtotime($post->published_at)) }}</td>
                                    <td>{{ date('Y M d H:i:s', strtotime($post->created_at)) }}</td>
    
                                    <td class="flex justify-between">
                                        <a class="btn btn-sm btn-success" href="{{ route('show', ['post' => $post->id]) }}"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('edit', ['post' => $post->id]) }}"><i class="fa fa-pencil"></i></a>
                                        <form action="{{ route('delete', ['post' => $post->id]) }}" class="d-inline" method="post">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="alert alert-warning text-center">No post</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>