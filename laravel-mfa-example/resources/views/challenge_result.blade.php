{{ Html::style('css/styles.css'); }}

<body class="container_success">
    <div class="logged_in_nav">
            <div class="flex">
                <div>
                <img src="{{ URL::to('/images/workos-logo-with-text.png') }}"alt="workos logo">
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
        <div class='flex'>
        <div class="logged_in_div_right">
        <div class="flex_column">
            <div class="flex-column">
                <div class="flex space-between">
                    <div>
                        <h2>User Verified: {{ $valid }}</h2>
                    </div>
                    <div>
                        <a href="/"><button class="button">Go Back Home</button></a>
                    </div>
                </div>
                <table class="width-725px">
                    <tr>
                        <th>ID</th>
                        <th>Created At</th>
                        @if ($type === 'sms')
                        <th>Expires At</th>
                        @endif
                    </tr>
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $challengeResult['created_at'] }}</td>
                        @if ($type === 'sms')
                        <td>{{ $challengeResult['expires_at'] }}</td>
                        @endif
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
