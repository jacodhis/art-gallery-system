
<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               <div class="d-flex align-items-baseline justify-content-between">
                 <h5 class="title">{{$art->name}}</h5>
                 <a href="/allarts">view Arts</a>

               </div>
               </div>
              

               <div class="row">
                 <div class="col-lg-7 pl-4 pb-4">
                    <a href="/art/{{$art->id}}">
                    
                        <img src="{{asset('/storage/art/'.$art->image)}}"
                            alt="Image" class="img-fluid"></a>
                 </div>

               <div class="col-lg-5 pl-8 pb-8">
               <h3 class="title">{{$art->name}}</h3>
                            <p><span>Offered by: <a href="#">{{$art->user->name}}</a></span>
                                <span> Ad ID:<a href="#" class="time"> {{$art->id}}</a></span></p>
                            <span class="icon"><i class="fa fa-clock-o"></i><a href="#">{{$art->created_at}}</a></span>
                            <span class="icon"><i class="fa fa-map-marker"></i><a href="#">estate name,county name</a></span>
               
              </div>
               </div>
            
            

             
            
            </div>
          </div>
        </div>
      </div>
