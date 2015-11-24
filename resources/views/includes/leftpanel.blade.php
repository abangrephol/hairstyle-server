<div class="logopanel">
    <img src="{{url('images/Wirednest-w3.png')}}" alt="Compony Logo" /> 
</div><!-- logopanel -->
    
<div class="leftpanelinner">    
    
    <!-- This is only visible to small devices -->
    <div class="visible-xs hidden-sm hidden-md hidden-lg">   
        <div class="media userlogged">
            <img alt="" src="{{url('images/photos/loggeduser.png')}}" class="media-object">
            <div class="media-body">
                <h4>John Doe</h4>
                <span>"Life is so..."</span>
            </div>
        </div>
      
        <h5 class="sidebartitle actitle">Account</h5>
        <ul class="nav nav-pills nav-stacked nav-bracket mb30">
          <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
          <li><a href="#"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
          <li><a href="#"><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
          <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
        </ul>
    </div>
  <h5 class="sidebartitle">Navigation</h5>
  <ul class="nav nav-pills nav-stacked nav-bracket">
    <li  class="{{Request::is('dashboard*') ? 'active' : ''}}"><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="{{Request::is('hairstyles*') ? 'active' : ''}}"><a href="{{url('/hairstyles')}}"><i class="fa fa-edit"></i> <span>Hairstyles</span></a></li>
    <li class="{{Request::is('frames*') ? 'active' : ''}}"><a href="{{url('/frames')}}"><i class="fa fa-edit"></i> <span>Frame</span></a></li>
    <li class="{{Request::is('categories*') ? 'active' : ''}}"><a href="{{url('/categories')}}"><i class="fa fa-edit"></i> <span>Categories</span></a></li>
    <li class="{{Request::is('client*') ? 'active' : ''}}"><a href="{{url('/client')}}"><i class="fa fa-edit"></i> <span>Client</span></a></li>
  </ul>


</div><!-- leftpanelinner -->
