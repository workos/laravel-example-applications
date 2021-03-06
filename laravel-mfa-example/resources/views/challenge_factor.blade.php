{{ Html::style('css/styles.css'); }}

<div class="logged_in_nav">
        <div class="flex">
            <p>MFA Example Application</p>
        </div>
        <div>
            
            <img src="{{ URL::to('/')}}/images/workos_logo_new.png" alt="workos logo">
        </div>
    </div>
    <div class='flex'>
        <div class="logged_in_div_left">
            <div>
                <h1>Your app,</h1>
                <h2>Enterprise Ready</h2>
            </div>
            <div>
                <a href="https://workos.com/" target="_blank"><button class='button'>WorkOS</button></a>
                <a href="https://workos.com/docs" target="_blank"><button class='button'>Documentation</button></a>
                <a href="https://workos.com/docs/reference" target="_blank"><button class='button'>API
                        Reference</button></a>
                <a href="https://workos.com/blog" target="_blank"><button class='button'>Blog</button></a>

            </div>
        </div>
        <div class="logged_in_div_right">
        <form method="POST" action="/verify_factor">
                    <div class='flex_column'>
                        <div>
                            <input type="text" id="code" name="code" class="text_input"
                                placeholder="Input Auth Code">
                            {{ csrf_field() }}
                        </div>
                        <div>
                            <button type="submit" class="button">Verify Factor</button>
                        </div>
                    </div>
                </form>            
                

            </div>
    </div>