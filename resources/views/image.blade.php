<div class="editor-js-block">
    <div class="editor-js-image {{ $classes }}">
        <img src="{{ $file['url'] }}" alt="{{ $alt }}">
        @if (!empty($caption))
            <caption>{{ $caption }}</caption>
        @endif
    </div>
</div>
