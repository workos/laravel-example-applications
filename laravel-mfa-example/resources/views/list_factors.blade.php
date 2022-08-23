{{ Html::style('css/styles.css'); }}

<div class="logged_in_nav">
        <div class="flex">
            <div>
            <img src="{{ URL::to('/images/workos-logo-with-text.png') }}"alt="workos logo">
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
        <div class="flex space_between width_40vw">
 

            <div class="flex space-between">
                <a href="/enroll_factor_details">
                    <button class="button button-outline button-sm">Enroll New Factor</button>
                </a>
                <a href="/clear_session">
                    <button class="button button-outline button-sm">Clear Factors</button>
                </a>
            </div>
        </div>

        <div class="flex-column">
        <div>
                <h2>Current MFA Factors</h2>
        </div>
        @if ($factors)
            @foreach($factors as $factor)
                <div>
                    <a class="button login_button" href="/factor_detail?id={{$factor->id}}">{{$factor->id}} | {{$factor->type}}</a>
                </div>
            @endforeach                 
        @else
        <div class="mt-20 card width_40vw">
            <p style="text-align: center; color: gray;">No Current Factors</p>
        </div>
        @endif
    </div>
  </div>
</div>
