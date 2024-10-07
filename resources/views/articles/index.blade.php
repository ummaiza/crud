<x-app-layout title="Articles">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @forelse ($articles as $article)
                    <x-card class="mb-4" title="{{ $article->title }}"
                        subtitle="{{ \Carbon\Carbon::parse($article->created_at)->format('d F, Y') }}">
                        {{ $article->body }}
                        <div class="mt-2">
                            <a href="/articles/{{ $article->id }}" class="btn btn-primary">Read more</a>
                            <a href="/articles/{{ $article->id }}/edit" class="btn btn-success">Edit</a>
                        </div>
                    </x-card>
                @empty
                    <div class="alert alert-info">Tidak ada Data</div>
                @endforelse
            </div>
            <div class="col-md-4">
                <a href="/articles/create" class="btn btn-primary w-100">
                Create New One
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
