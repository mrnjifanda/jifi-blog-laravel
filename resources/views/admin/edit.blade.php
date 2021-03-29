@section('title', 'Edit Post')

<x-app-layout>
    <div class="row justify-content-center py-12">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    <form action="{{ route('update', ['post' => $post->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mt-3">
                            <x-label for="title" :value="__('Title')" />
            
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $post->title }}" required autofocus />
                        </div>

                        <div class="mt-3">
                            <x-label for="body" :value="__('Body')" />

                            <x-textarea id="body" class="block mt-1 w-full" name="body" value="{{ $post->body }}" required autofocus />
                        </div>

                        <div class="mt-3">
                            <x-label for="published_at" :value="__('Published')" />
            
                            <x-input id="published_at" class="block mt-1 w-full" type="text" name="published_at" value="{{ $post->published_at }}" required autofocus />
                        </div>

                        <div class="mt-3">
                            <x-button>Update Post</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>