
<form action="<?php echo site_url('aksi/editdept')?>" method="post" class="form-horizontal">

  <div class="control-group">
    <label class="control-label">Departement Name</label>
    <div class="controls">
      <input type="text" class="span11" placeholder="Departement  Unit Name" name="nama" required="" autocomplete="off" value="<?php echo $all->deptName?>"/>
    </div>
  </div>
<input type="hidden" value="<?php echo $all->id?>" name="id">


  <div class="form-actions">
    <button type="submit" class="btn btn-success">Update</button>

  </div>
  </div>





</form>
