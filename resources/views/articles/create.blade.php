<x-app-layout title="New article">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <x-card class="mb-4" title="New" subtitle="Create New Article">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <p><strong>ada kesalahan !!!</strong></p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <form method="POST" action="/articles">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                                <div class="invalid-feeback">{{ $message}}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body"></textarea>
                            @error('body')
                            <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>
