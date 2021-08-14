  <form method="POST" action="payment">
              @csrf

          <div class="row"> 
              

          <div class="col-md-4">
             
            <label>Name</label><br>
            <input type="text" name="name" value="<?php echo auth()->user()->name;?>" >
        </div>
        <div class="col-md-4">
             
            <label>Email</label><br>
            <input type="text" name="name" value="<?php echo auth()->user()->email;?>" >
        </div>
        <div class="col-md-4">
             
            <label>Phone</label><br>
            <input type="text" name="name" value="<?php echo auth()->user()->name;?>" >
        </div>

        <div class="col-md-4">
            <label>address</label><br>
            <input type="text" name="address" value="" required>
        </div>

         <div class="col-md-4 py-2" >
            <label>Town</label><br>
            <input type="text" name="town" value="" required >
        </div>

        <div class="col-md-4 py-2">
            <label>location</label><br>
            <input type="text" name="location" value="" required >
        </div>

        <div class="col-md-4">
            <label>phone</label><br>
            <input type="phone" name="phone" value="" required>
        </div>

            


    </div>
    <div class="py-2"  >
    <button class="btn btn-primary">update profile</button>
    </div>
    </form>
