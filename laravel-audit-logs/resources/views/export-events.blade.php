{{ Html::style('css/styles.css'); }}
@isset($createExport)
{{$createExport->id}}
@endisset
<div class="container_success">
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
            <div class="flex flex-start width-40vw">
                <div><h1>{{$organization->name}}</h1></div>
            </div>
            <div class="flex card width-40vw space-between ">
                <div>
                    <code class="org-id">{{$organization->id}}</code>
                </div>
                <div class="org-button-div">
                    <a href="/logout"><button class="button">Change Org</button></a>
                    <a href="/organization"><button class="button">Go Back</button></a>                
                </div>
            </div>
                <div class="flex  card">                                                                
                    <form method="POST" action="/get_events" class="flex">
                        <button class="box" name="event" id="generate_csv" value="generate_csv" type="submit">                            
                            <div class="flex width-100p">
                                <p>Generate CSV</p> 
                            </div>                           
                        </button>                    
                        <button class="box" name="event" id="access_csv" value="access_csv" type="submit">                            
                            <div class="flex width-100p">
                                <p>Access CSV</p> 
                            </div>                           
                        </button> 
                        {{ csrf_field() }}
                    </form>   
                          
                </div>
                @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif  
        </div>
    </div>
</div>