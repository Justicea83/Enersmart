@php
$source = '/images/defaultprofileimage.png';
if(Auth::user()->profileImage !=null){
    $source  = '/SystemImages/'.Auth::user()->profileImage;
}
@endphp
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
        <div class="navbar-brand">
           <a href=""> Swirlfeed</a>
          
        </div>
        </div>
        @if(Auth::check())
        <ul class="nav navbar-nav navbar-left">
             <li> <a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li> <a href=""><span class="glyphicon glyphicon-bell"></span>Notifications</a></li>
             <li> <a href=""><span class="glyphicon glyphicon-envelope"></span>Messages</a></li>
        </ul>
         <ul class="nav navbar-nav navbar-left">
            <button class="btn btn-primary navbar-btn">Tweet</button>
         </ul>
         
       <div class="dropdown nav navbar-nav navbar-right">

            <img  src="{{$source}}" class="nav-image hidden-xs hidden-sm dropdown-toggle" width="50" height="50" alt="Profile" id="profile" data-toggle="dropdown" data-hover="dropdown" aria-haspopup="true" aria-expanded="true">
            <ul class="dropdown-menu" aria-labelledby="profile">
                <li><a href="" title="">{{Auth::user()->name}}</a></li>
                <li role="separator" class="divider"></li>
                 <li><a href="{{route('user.settings')}}" title="">Settings</a></li>
                 <li><a href="{{route('user.editprofile')}}" title="">Edit Profile</a></li>
                 <li role="separator" class="divider"></li>
                  <li><a href="{{ route('user.logout') }}">Logout</a></li>
            </ul>
       </div>

        <form class="navbar-form navbar-right hidden-xs" id="searchForm">
            <div class="form-group has-feedback">
                <input type="text" id="search" class="form-control" name="search" placeholder="Search">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
               
            </div>            
        </form>
         @endif
    </div>
</nav>
<div class="container" id="searchDropdown" >
    <div class="row" >
    <div class="col-md-3" style="float: right;" >
       <ul class="list-group" id="result">
          
       </ul>
    </div>
</div>

</div>