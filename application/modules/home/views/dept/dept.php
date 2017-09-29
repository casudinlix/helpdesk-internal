<div id="content">
<div class="container-fluid">
  <div class="row-fluid">
  <div class="widget-content"> <a href="#myModal" data-toggle="modal" class="btn btn-success">Add New Departement</a
    </div>
    <div id="myModal" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">×</button>
        <h3>Add Deptartement</h3>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('aksi/adddept')?>" method="post" class="form-horizontal">

          <div class="control-group">
            <label class="control-label">Departement Name</label>
            <div class="controls">
              <input type="text" class="span11" placeholder="Departement  Unit Name" name="nama" required="" autocomplete="off"/>
            </div>
          </div>



          <div class="form-actions">
            <button type="submit" class="btn btn-success">Save</button>

          </div>
          </div>





        </form>
      </div>
      <div id="editdept" class="modal hide">
        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button">×</button>
          <h3>Update Departement</h3>
        </div>
        <div class="modal-body">

        </div> 

    </div>
       <div class="widget-box">

        <div class="widget-title"> <span class="icon"><i class="icon-sitemap"></i></span>
          <h5>Data Departement  List </h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered" cellspacing="0" width="100%" id="dept">
            <thead>
              <tr>
                <th>No</th>
                <th>Dept Name</th>
                <th>Add Date</th>
                <th>Edit Date</th>
                <th>UpdateBy</th>






                <th>Ops</th>
              </tr>
            </thead>

          </table>
        </div>
      </div>
