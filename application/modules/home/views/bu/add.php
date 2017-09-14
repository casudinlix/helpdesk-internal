<div id="content">
<div class="container-fluid">
  <div class="row-fluid">
       <div class="widget-box">
         <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
           <h5>New Business  Unit </h5>
         </div>
         <form action="<?php echo site_url('aksi/addbu')?>" method="post" class="form-horizontal">

           <div class="control-group">
             <label class="control-label">Business  Unit Name</label>
             <div class="controls">
               <input type="text" class="span11" placeholder="Business  Unit Name" name="nama" required="" autocomplete="off"/>
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Address</label>
             <div class="controls">
               <textarea class="span11" placeholder="Address" name="address" required=""></textarea>

             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Phone</label>
             <div class="controls">

                 <input type="text" id="mask-phone" class="span11 mask text" required="" autocomplete="off" name="phone">
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Email@</label>
             <div class="controls">
               <input type="email" class="span11" placeholder="Email@@" name="email" required="" autocomplete="off" />
             </div>
           </div>
           <div class="form-actions">
             <button type="submit" class="btn btn-success">Save</button>
           </div>
           </div>





         </form>


    </div>
    </div>
    </div>
    </div>
