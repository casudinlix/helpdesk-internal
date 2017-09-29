<div id="content">
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
<form action="<?php echo site_url('aksi/addbuperm')?>" method="post">
  <select name="bu" required="">
    <option value=""></option>
    <?php foreach($bu as $key):?>

<option value="<?php echo $key->idBu?>"><?php echo $key->buName?></option>
<?php endforeach;?>
  </select>
  <input type="hidden" name="id" value="<?php echo $user->user_nip?>">
  <input type="hidden" name="nip" value="<?php echo $user->id?>">
  <input type="hidden" name="role" value="<?php echo $user->roles_id?>">
  <input type="submit" class="btn  btn-primary" name="" value="Add">
  <a href="<?php echo site_url('home/user')?>" class="btn btn-danger">Back</a>
</form>


    </div>

       <div class="widget-box">

        <div class="widget-title"> <span class="icon"><i class="icon-group"></i></span>
          <h5>Data Businies Permission </h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered" cellspacing="0" width="100%" id="buperm">
            <thead>
              <tr>

                <th>NIP</th>
                <th>User Name</th>
                <th>Businies Unit</th>
                <th>Roles</th>
                <th>Ops</th>
              </tr>
            </thead>

          </table>
        </div>
      </div>
