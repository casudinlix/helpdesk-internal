<div id="content">
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form Add User</h5>
          </div>
          <div class="widget-content nopadding">
   <form class="form-horizontal" method="post" action="<?php echo site_url('aksi/edituser')?>" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                 
                <div class="controls">
                  <input type="hidden" name="nip" id="number" required="" value="<?php echo $user->user_nip ?>" readonly=""/>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">User Name</label>
                <div class="controls">
                  <input type="text" name="nama" required="" value="<?php echo $user->userName ?>">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="text" name="email" id="email" value="<?php echo $user->email ?>">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Active</label>
                <div class="controls">
                  <select name="active">
                  <?php if($user->active==1){
                    echo "Yes";
                  }else{
                    echo "No";
                  }
                    ?>

   
 <option value="<?php echo $user->active ?>"><?php echo $user->active ?></option>
 
  
 
 

  <option value="1">Yes</option>
  <option value="0">No</option>

</select>
                </div>
              </div>


              <div class="form-actions">
                <input type="submit" value="Update" class="btn btn-success">
                <a href="<?php echo site_url('home/user')?>" class="btn btn-danger">Back</a>
              </div>
            </form>

          </div>
        </div>
