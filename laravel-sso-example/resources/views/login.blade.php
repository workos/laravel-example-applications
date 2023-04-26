{{ Html::style('css/styles.css'); }}
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

@if ($profile)
<div class="logged_in_nav">
        <div class="flex">
            <div>
                <img src="{{ asset('assets/img/workos-logo-with-text.png') }}" alt="workos logo">
            </div>

        </div>
        <div class="flex">
            <a href="https://workos.com/docs" target="_blank"><button class='button nav-item'>Documentation</button></a>
            <a href="https://workos.com/docs/reference" target="_blank"><button class='button nav-item'>API
                    Reference</button></a>
            <a href="https://workos.com/blog" target="_blank"><button
                    class='button nav-item blog-nav-button'>Blog</button></a>
            <a href="https://workos.com/" target="_blank"><button class='button button-outline'>WorkOS</button></a>
        </div>
    </div>

    <div class='flex'>

        <div class="logged_in_div_right">
            <div class="flex_column">
                <div class="flex width-941px space-between">
                    <div>
                        <p>Profile Details</p>
                    </div>
                    <div>
                        <a href="/logout"><button class="button button-outline">Log Out</button></a>
                    </div>
                </div>
                <div class="width-941px">
                    <pre id="noborder" class="prettyprint noborder">
                        {{$profileString}}
                    </pre>
                </div>
            </div>

        </div>
    </div>

@else
<div class="logged_in_nav">
        <div class="flex">
            <div>
                <img src="{{ asset('assets/img/workos-logo-with-text.png') }}" alt="workos logo">
            </div>

        </div>
        <div class="flex">
            <a href="https://workos.com/docs" target="_blank"><button class='button nav-item'>Documentation</button></a>
            <a href="https://workos.com/docs/reference" target="_blank"><button class='button nav-item'>API
                    Reference</button></a>
            <a href="https://workos.com/blog" target="_blank"><button
                    class='button nav-item blog-nav-button'>Blog</button></a>
            <a href="https://workos.com/" target="_blank"><button class='button button-outline'>WorkOS</button></a>
        </div>
    </div>
    <div class="flex flex_column height-80vh">
        <div class='flex height-40vh'>
            <div class="card height-315 width-335">
                <form method="POST" action="/auth" class="mb-0">
                    <div class='flex_column'>
                        <div>
                            <span>Log in with SSO</span>
                        </div>
                        <hr style="width:100%; margin-top: 15px; margin-bottom: 20px;">
                        <button id="Google" name="login_method" value="GoogleOAuth" class="card login_button google_button">
                            <span>Google OAuth</span>
                        </button>
                        <button id="Microsoft" name="login_method" value="MicrosoftOAuth" class="card login_button microsoft_button">
                            <span>Microsoft OAuth</span>
                        </button>
                        <button id="SAML" name="login_method" value="saml" class="card login_button saml_button mb-0">
                            <span>Enterprise SAML</span>
                        </button>
                        {{ csrf_field() }}
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
