  <form method="POST" action="/update-user-profile">
  <input type="hidden" name="_method" value="put">
              @csrf

          <div class="row"> 
              

          <div class="col-md-4">
             
            <label>Name</label><br>
            <input type="text" name="name" value="<?php echo auth()->user()->name;?>" >
        </div>
        <div class="col-md-4">
             
            <label>Email</label><br>
            <input type="text" name="email" value="<?php echo auth()->user()->email;?>" >
        </div>
        
        <div class="col-md-4">
            <label>Phone</label><br>
            <input type="text" name="phone" value="<?php echo auth()->user()->phone;?>" >
        </div>
      

        <div class="col-md-4">
        <label>usertype</label><br>
            <input type="text" name="usertype" value="<?php echo auth()->user()->usertype;?>" readonly >
        </div>

   
            


    </div>
    <div class="py-2"  >
    <button class="btn btn-primary">update profile</button>
    </div>
    </form>
