{{ Html::style('css/styles.css'); }}
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

@if ($profile)
<div class="logged_in_nav">
        <div class="flex">
            <div>
            <img src="{{ URL::to('/assets/img/workos-logo-with-text.png') }}"alt="workos logo">
            </div>

        </div>
        <div>
            <a href="https://workos.com/docs" target="_blank"><button class='button nav-item'>Documentation</button></a>
            <a href="https://workos.com/docs/reference" target="_blank"><button class='button nav-item'>API
                    Reference</button></a>
            <a href="https://workos.com/blog" target="_blank"><button
                    class='button nav-item blog-nav-button'>Blog</button></a>
            <a href="https://workos.com/" target="_blank"><button class='button button-outline'>WorkOS</button></a>
        </div>
    </div>
    <div class='flex'>
        <div class="logged_in_div_left">
            <div class="title-text">
                <h1>Your app,</h1>
                <h2 class="home-hero-gradient">Enterprise Ready</h2>
            </div>
            <div class="title-subtext">
                <p>Start selling to enterprise customers with just a few lines of code.</p>
                <p>Implement features like single sign-on in minutes instead of months.</p>
            </div>
            <div class="flex success-buttons">
                <a href="https://workos.com/signup" target="_blank"><button class='button'>Get Started</button></a>
                <a href="mailto:sales@workos.com?subject=WorkOS Sales Inquiry" target="_blank"><button
                        class='button button-outline sales-button'>Contact
                        Sales</button></a>
            </div>
        </div>
  <div class="logged_in_div_right">
      <div class="flex_column">
          <h2>Raw Profile Response Details</h2>
          <div class="text_box">
            <pre class="prettyprint">@json($profile )</pre>
          </div>
      </div>
      <a class='button logout_button' href='/logout'>Sign Out</a>
  </div>
</div>

@else
<div class="container_login">
    <div class='flex_column'>
    <div class="flex heading_div">
        <div class="heading_text_div">
            <img src="{{ URL::to('/assets/img/workos-logo-with-text.png') }}"alt="workos logo">
        </div>
    </div>

    <h2>Laravel SSO Example App</h2>
    <a class="button login_button" href="/auth">Login</a>
    </div>
</div>
@endif
