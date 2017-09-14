<div id="content">
<div class="container-fluid">
  <div class="row-fluid">
       <div class="widget-box">
         <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
           <h5>New Business  Unit </h5>
         </div>
         <form action="<?php echo site_url('aksi/editbu')?>" method="post" class="form-horizontal">

           <div class="control-group">
             <label class="control-label">Business  Unit Name</label>
             <div class="controls">
               <input type="text" class="span11" placeholder="Business  Unit Name" name="nama" required="" autocomplete="off" value="<?php echo $bu->buName ?>"/>
               <input type="hidden" name="id" value="<?php echo base64_decode($this->uri->segment(3))?>">
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Address</label>
             <div class="controls">
               <textarea class="span11" placeholder="Address" name="address" required=""><?php echo $bu->address ?></textarea>

             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Phone</label>
             <div class="controls">

                 <input type="text" id="mask-phone" class="span11 mask text" required="" autocomplete="off" name="phone" value="<?php echo $bu->phone ?>">
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Email@</label>
             <div class="controls">
               <input type="email" class="span11" placeholder="Email@@" name="email" required="" autocomplete="off" value="<?php echo $bu->email ?>" />
             </div>
           </div>
           <div class="form-actions">
             <button type="submit" class="btn btn-success">Update</button>
           </div>
           </div>





         </form>


    </div>
    </div>
    </div>
    </div>
