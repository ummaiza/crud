@extends('layouts.app', ['title' => 'Home'])
@section('content')
    <div class="container">
        {{-- @component('component.card', [
    'title' => 'Laravel framwork',
    'subtitle' => 'Laravel PHP',
])
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit, aliquid! Molestiae sunt porro veritatis commodi rerum minima officia illum voluptatibus?
        @endcomponent --}}
        <x-card title="Laravel Framework" subtitle="Laravel PHP">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente consequuntur exercitationem obcaecati natus
            quisquam nostrum maxime tenetur, explicabo beatae nesciunt?
        </x-card>

    </div>
@endsection
