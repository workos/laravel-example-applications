{{ Html::style('css/styles.css'); }}
<body class="container_success">

    <div class="logged_in_div_left flex_column">
        <div class="flex logged_in_div_left_title">
            <div class="flex-column">
                <div class="flex space-between">
                    <div><h2>Audit Logs</h2></div>
                    <x-lucide-settings class="icon" style="width: 20px; height: 20px" stroke_width="1" />
                </div>
                <div><p class="sub-heading">Laravel Example App</p></div>
            </div>                    
        </div>
        <hr style="height:0.5px;width:75%;">
        <div class="flex flex_column success-buttons">
            <a href="/logout">
                <div class="flex sidebar-button selected">
                    <x-lucide-settings-2 class="icon" style="width: 20px; height: 20px" stroke_width="1" />
                    <div>
                        <p>Organizations</p>
                    </div>
                </div>
            </a>            
            <div id="myBtn" class="flex sidebar-button">
                <x-lucide-clipboard-edit class="icon" style="width: 20px; height: 20px" stroke_width="1" />
                <div>
                    <p>Audit Logs</p>
                </div>
            </div>
        </div>
    </div>

    <div class="logged_in_div_right">
        <div class="logged_in_nav">
            <div class="flex">
                <div>
                    <a href="https://workos.com/docs" target="_blank"><button class='button nav-item'>Documentation</button></a>
                </div>
                <div>
                    <a href="https://workos.com/docs/reference" target="_blank"><button class='button nav-item'>API
                        Reference</button></a>
                </div>
                <div>
                    <a href="https://workos.com/blog" target="_blank"><button
                        class='button nav-item blog-nav-button'>Blog</button></a>
                </div>
                <div>
                    <a href="https://workos.com/" target="_blank">
                    <img src="{{ URL::to('/assets/img/workos_favicon.png') }}" class="nav-image"  alt="link to workos.com logo">
                    </a> 
                </div>
            </div>
        </div>
        <div class="flex_column logged_in_right_content width-65vw height-65vh">    
            <div class="flex flex-start width-65vw page-title">
                <h2>Select Organization</h2>
            </div>       
            <div class='flex_column card width-65vw'>                
                <div>
                    <table class="width-65vw">
                        <tr>
                          <th>Organization</th>
                          <th>ID</th>
                          <th>View Settings</th>
                        </tr>
                        @foreach ($organizations as $organization)   
                          <tr>
                            <td>{{$organization->name}}</td>
                            <td>{{$organization->id}}</td>                
                            <td><a class="button button-outline width-95" href="{{ url('set_org?organization_id='.$organization->id) }}"><x-lucide-settings-2 class="icon" style="width: 20px; height: 20px" stroke_width="1" /></a></td>
                          @endforeach          
                      </table>   
                </div>                     
                <div class="flex flex-end width-65vw">
                    @if ($after)
                    <div>
                        <a href="{{ url('/?after='.$after) }}"><button class="button page-title">Previous</button></a>
                    </div>                        
                    @endif
                    @if ($before)
                    <div>
                        <a href="{{ url('/?before='.$before) }}"><button class="button page-title">Next</button></a>
                    </div>                    
                    @endif        
                </div>    
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <p>Please select an Organization</p>
        </div>
      
    </div>
    <script>

    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
    modal.style.display = "block";
    }
    span.onclick = function() {
    modal.style.display = "none";
    }
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
    </script>
</body>