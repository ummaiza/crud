<x-app-layout title="Edit Artikel">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <x-card class="mb-4" title="Edit Artikel" subtitle="{{ $article->title }}">
                    {{-- form --}}
                    <form action="/articles/{{ $article->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                name="title" id="title" value="{{ $article->title }}">

                            @error('title')
                                <div class="invalid-feeback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="body" class="form-label">Body</label>
                            <textarea name="body" id="body"
                                class="form-control @error('body')
                                is-invalid
                            @enderror">{{ $article->body }}</textarea>
                            @error('body')
                                <div class="invalid-feeback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>
