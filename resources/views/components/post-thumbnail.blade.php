@props(['post'])

@php
    if ($post->thumbnail != null) {
        $image = asset('storage/' . $post->thumbnail);
    } else {
        $image = '/images/illustration-1.png';
    }
@endphp
<img src="{{ $image }}" alt="Blog Post Illustration" class="rounded-xl">