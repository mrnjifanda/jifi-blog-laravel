@section('title', $post->title)

<x-app-layout>
    <div class="row justify-content-center py-12">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">{{ $post->title }}</div>

                <div class="card-body">
                    <div class="text-right">
                        <em style="color: #18d26e; font-size: 12px; padding: 15px; font-weight: bold;">Published At: {{ date('Y M d H:i:s', strtotime($post->published_at)) }}</em>
                    </div>
                    <br><br>
                    <p>{{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>