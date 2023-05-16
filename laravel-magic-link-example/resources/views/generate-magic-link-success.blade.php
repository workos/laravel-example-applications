{{ Html::style('css/styles.css'); }}

<div class="logged_in_nav">
    <div class="flex">
        <div>
            <img src="{{ URL::to('/images/workos-logo-with-text.png') }}" alt="workos logo">
        </div>
    </div>
    <div class="flex">
        <a href="https://workos.com/docs" target="_blank">
            <button class="button nav-item">Documentation</button>
        </a>
        <a href="https://workos.com/docs/reference" target="_blank">
            <button class="button nav-item">API Reference</button>
        </a>
        <a href="https://workos.com/blog" target="_blank">
            <button class="button nav-item blog-nav-button">Blog</button>
        </a>
        <a href="https://workos.com/" target="_blank">
            <button class="button button-outline">WorkOS</button>
        </a>
    </div>
</div>
<div class="flex">
    <div class="logged_in_div_right">
        <div class="flex_column">
            <h2>Here is your Magic Link, <code>{{ $email }}</code></h2>
            <div class="text_box">
                <a href="{{ $link }}">{{ $link }}</a>
            </div>
        </div>
    </div>
</div>
