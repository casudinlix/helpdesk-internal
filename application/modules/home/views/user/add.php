<div id="content">
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form Add User</h5>
          </div>
          <div class="widget-content nopadding">
   <form class="form-horizontal" method="post" action="<?php echo site_url('aksi/adduser')?>" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">NIP</label>
                <div class="controls">
                  <input type="text" name="nip" id="number" required="" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">User Name</label>
                <div class="controls">
                  <input type="text" name="nama" required="">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="text" name="email" id="email">
                </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Role</label>
                <div class="controls">
                  <select name="role" required="" class="span11">
                    <option value=""></option>

<?php foreach ($role as $key): ?>
  <option value="<?php echo $key->id ?>"><?php echo $key->nameRoles ?></option>
<?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                  <input type="password" name="pwd" id="pwd" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Confirm password</label>
                <div class="controls">
                  <input type="password" name="pwd2" id="pwd2" />
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Save" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
