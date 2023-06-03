<div>
    @isset($link)
        <div class="mb-3">
            {{ $link }}
        </div>
    @endisset
    <h1 class="mb-5 h2">
        {{ $slot }}
    </h1>
</div>

