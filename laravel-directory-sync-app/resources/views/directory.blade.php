{{ Html::style('css/styles.css'); }}

<body class="container_success">
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
                <h2>Directory Details</h2>
                <div>
                    <pre id="noborder" class="prettyprint noborder">
                        {{ json_encode($directory, JSON_PRETTY_PRINT) }}
                    </pre>
                </div>
            </div>
            <div class="flex width-440px space-between">
                <div class="flex">
                    <a href="{{ url('directory/'.$directory->id . '/users') }}">
                        <button class='button'>Users</button>
                    </a>
                    <a href="{{ url('directory/'.$directory->id . '/groups') }}">
                        <button class='button'>Groups</button>
                    </a>
                </div>
                <div>
                    <a style="align-self:flex-end; padding:10px;" href="{{ url('/') }}">
                        <button class="button button-sm button-outline">Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
