<div class="flex flex-col mb-4">
    <p class="text-[var(--text)] font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-[var(--text)] font-extrabold"
        >{{ $post->title }}</a>
    </h2>

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2 text-[var(--text)] decoration-[var(--link)] underline underline-offset-7 hover:text-[var(--link-hover)] transition duration-300"
    >Read</a>
</div>
