<div id="content">
<div class="container-fluid">
  <div class="row-fluid">
       <div class="widget-box">
         <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
           <h5>Edit Asset Data </h5>
         </div>
         <form action="<?php echo site_url('aksi/editasset')?>" method="post" class="form-horizontal">
           <div class="control-group">

             <div class="controls">
               <input type="hidden" class="span11" name="code" value="<?php echo base64_decode($this->uri->segment(3)) ?>" readonly=""/>
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Serial Number</label>
             <div class="controls">
               <input type="text" class="span11" placeholder="Serial Number" name="sn" required="" value="<?php echo $aset->sn ?>"/>
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Asset Name</label>
             <div class="controls">
               <input type="text" class="span11" placeholder="Asset Name" name="nama" required="" autocomplete="off" value="<?php echo $aset->asetName ?>"/>
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Brand</label>
             <div class="controls">
               <input type="text"  class="span11" placeholder="Brand" name="brand" required="" autocomplete="off" value="<?php echo $aset->brand ?>"/>
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Type</label>
             <div class="controls">
               <input type="text" class="span11" placeholder="type" name="type" required="" autocomplete="off" value="<?php echo $aset->type ?>"/>
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Year</label>
             <div class="controls">
               <div  data-date="12-02-2012" class="input-append date datepicker">
                 <input type="text" data-date-format="mm-dd-yyyy" class="span11" name="year" value="<?php echo $aset->year?>" >
                 <span class="add-on"><i class="icon-calendar"></i></span> </div>
                 </div>
           </div>




           <div class="form-actions">
             <button type="submit" class="btn btn-success">Update</button>
             <a href="<?php echo site_url('home/aset')?>" class="btn btn-danger">Back</a>
           </div>
         </form>


    </div>
    </div>
    </div>
    </div>
