{{ Html::style('css/styles.css'); }}

<body class="container_success">
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
            <div class="flex_column">
                <div class="flex space_between ">
                    <div class="factor_card">
                        <h2>Enroll SMS Factor</h2>
                        <form method="POST" action="/enroll_factor">
                            <div class="flex">
                                <div class="flex">
                                    <input class="text_input" type="text" id="phone_number" name="phone_number"
                                        placeholder="Phone Number" required>
                                </div>
                                {{ csrf_field() }}
                            </div>
                            <div>
                                <button type="submit" name="type" value="sms"
                                    class="button button-outline button-sm">Enroll New
                                    Factor</button>
                            </div>
                        </form>
                    </div>

                    <div class="factor_card">
                        <h2>Enroll TOTP Factor</h2>
                        <form method="POST" action="/enroll_factor">
                            <div class="flex-column">
                                <div class="flex">
                                    <input class="text_input" type="text" id="totp_issuer" name="totp_issuer"
                                        placeholder="TOTP Issuer" required>
                                </div>
                                {{ csrf_field() }}
                                <div class="flex">
                                    <input class="text_input" type="text" id="totp_user" name="totp_user"
                                        placeholder="User Email" required>
                                </div>
                                {{ csrf_field() }}
                            </div>
                            <div>
                                <button type="submit" name="type" value="totp"
                                    class="button button-outline button-sm">Enroll New Factor</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

