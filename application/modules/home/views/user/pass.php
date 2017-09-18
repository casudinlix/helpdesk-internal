<div id="content">
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form Add User</h5>
          </div>
          <div class="widget-content nopadding">
   <form class="form-horizontal" method="post" action="<?php echo site_url('aksi/editpass')?>" id="basic_validate" novalidate="novalidate">

<input type="hidden" name="id" value="<?php echo $user->user_nip ?>" />

                   <div class="control-group">
                     <label class="control-label">New Password</label>
                     <div class="controls">
                       <input type="password" name="pwd" id="pwd"/>
                     </div>
                   </div>
                   <div class="control-group">
                     <label class="control-label">Confirm password</label>
                     <div class="controls">
                       <input type="password" name="pwd2" id="pwd2" />
                     </div>
                   </div>
                   <div class="form-actions">
                <input type="submit" value="Update" class="btn btn-success">
                <a href="<?php echo site_url('home/user')?>" class="btn btn-danger">Back</a>
              </div>
            </form>

          </div>
        </div>
