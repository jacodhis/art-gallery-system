
@if(Auth()->User()->usertype == 'admin')

 
 @include('admindashboard')

@elseif(Auth()->User()->usertype == 'artist');
 @include('artistdashboard')
@else
   @include('userdashboard')
@endif
