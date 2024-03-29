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
<div class="flex flex_column height-80vh">
    <div class="flex height-40vh">
        <div class="card width-335">
            <form method="POST" action="/provision_enterprise">
                @csrf
                <div class="flex_column">
                    <div>
                        <span>Admin Portal Example</span>
                    </div>
                    <hr style="width: 100%; margin-top: 15px; margin-bottom: 20px;" />
                    <div>
                        <input
                            type="text"
                            placeholder="Enter name of Organization"
                            id="org"
                            name="org"
                            class="text_input"
                            required
                        />
                    </div>
                    <div>
                        <input
                            type="text"
                            placeholder="Enter domains (space separated)"
                            id="domain"
                            name="domain"
                            class="text_input text_input_2"
                            required
                        />
                    </div>
                    <br />
                    <div>
                        <button type="submit" class="button">
                            Create Organization and Log In
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
