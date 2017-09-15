
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy;  <a href="#"><?php echo $app->appName ?></a> </div>
</div>

<!--end-Footer-part-->
<script src="<?php echo depan()?>js/jquery.min.js"></script>
<script src="<?php echo depan()?>js/jquery.ui.custom.js"></script>
<script src="<?php echo depan()?>js/bootstrap.min.js"></script>
<script src="<?php echo depan()?>js/bootstrap-datepicker.js"></script>
<script src="<?php echo depan()?>js/masked.js"></script>
<script src="<?php echo depan()?>js/jquery.uniform.js"></script>
<script src="<?php echo depan()?>js/select2.min.js"></script>
<script src="<?php echo depan()?>js/jquery.dataTables.js"></script>


<script src="<?php echo depan()?>js/jquery.validate.js"></script>
<script src="<?php echo depan()?>js/matrix.js"></script>
<script src="<?php echo depan()?>js/matrix.tables.js"></script>
<script src="<?php echo depan()?>sweat/dist/sweetalert.min.js"></script>
<script src="<?php echo depan()?>js/matrix.form_validation.js"></script>
<?php if ($this->session->flashdata('sukses')): ?>
  <script>swal("Good job!", "Data Has Ben Saved!", "success")</script>

<?php endif; ?>
<!-- /page content -->

<script type="text/javascript">

$(document).ready(function() {
$('.datepicker').datepicker();

$("#mask-phone").mask("(999) 999-9999", {completed:function(){alert("Callback action after complete");}});
    //datatables
    $('#aset').DataTable({
      "bJQueryUI": true,
      "sPaginationType": "full_numbers",
      "sDom": '<""l>t<"F"fp>',
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('datatable/asetlist/')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs":  [
            {
                "targets": [ 0 ], //first column
                "orderable": false, //set not orderable
            },
            {
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },

        ],

    });
    $('#bu').DataTable({
      "bJQueryUI": true,
      "sPaginationType": "full_numbers",
      "sDom": '<""l>t<"F"fp>',
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('datatable/bulist')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs":  [
            {
                "targets": [ 0 ], //first column
                "orderable": false, //set not orderable
            },
            {
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },

        ],

    });
    $('#user').DataTable({
      "bJQueryUI": true,
      "sPaginationType": "full_numbers",
      "sDom": '<""l>t<"F"fp>',
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('datatable/userlist')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs":  [
            {
                "targets": [ 0 ], //first column
                "orderable": false, //set not orderable
            },
            {
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },

        ],

    });

$('select').select2();

});



</script>



  </body>
</html>
