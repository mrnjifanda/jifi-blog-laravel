@section('title', 'Created Post')

<x-app-layout>
    <div class="row justify-content-center py-12">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">
                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        <div class="mt-3">
                            <x-label for="title" :value="__('Title')" />
            
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                        </div>

                        <div class="mt-3">
                            <x-label for="body" :value="__('Body')" />

                            <x-textarea id="body" class="block mt-1 w-full" name="body" :value="old('body')" required autofocus />
                        </div>

                        <div class="mt-3">
                            <x-label for="published_at" :value="__('Published')" />
            
                            <x-input id="published_at" class="block mt-1 w-full" type="date" name="published_at" :value="old('published_at')" required autofocus />
                        </div>

                        <div class="mt-3">
                            <x-button>Create Post</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>