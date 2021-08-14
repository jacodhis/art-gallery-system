 <div class="pt-2">
                 <form method="POST" action="/uploadart" enctype="multipart/form-data">
                   {{ csrf_field() }}
                    <labeL class="form-group">Art Name</label>
                   <input type="text" name="name" class="form-control" required="">

                   <labeL class="form-group">Price</label>
                   <input type="text" name="price" class="form-control" required="">

                   <labeL class="form-group">Describe Your Art</label>
                   <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>



                   <labeL class="form-group">upload file</label>
                   <input type="File" name="art" class="form-control" required="">

                    <div class="py-2"  >
                  <button class="btn btn-primary">upload Art</button>
                  </div>

                 </form>
               </div>