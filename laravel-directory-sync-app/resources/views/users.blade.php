{{ Html::style('css/styles.css'); }}

<body class="container_success">
    <div class="logged_in_nav">
        <div class="flex">
            <div>
                <img src="{{ asset('images/workos-logo-with-text.png') }}" alt="workos logo" />
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
                <div class="flex space-between width-507px">
                    <div>
                        <h2>User Details</h2>
                    </div>
                    <div>
                        <a href="javascript:history.back()">
                            <button class="button button-sm button-outline">Back</button>
                        </a>
                    </div>
                </div>
                @if (count($users) > 0)
                <div class="table-container">
                    <table class="width-507px">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            <td class="ta-left">{{ $user->firstName }} {{ $user->lastName }}</td>
                            <td class="ta-left"><code>{{ $user->username }}</code></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @else
                <div class="card width-40vw">
                    <code>No Users Found</code>
                </div>
                @endif
            </div>
        </div>
    </div>
</body>

