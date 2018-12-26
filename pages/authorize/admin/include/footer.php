<!-- JavaScript -->
<script src="<?php echo ASSET_URL; ?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo ASSET_URL; ?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Bootstrap-table JavaScript -->
<script src="<?php echo ASSET_URL; ?>/vendors/bower_components/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="<?php echo ASSET_URL; ?>/dist/js/bootstrap-table-data.js"></script>

<!-- Slimscroll JavaScript -->
<script src="<?php echo ASSET_URL; ?>/dist/js/jquery.slimscroll.js"></script>

<!-- Owl JavaScript -->
<script src="<?php echo ASSET_URL; ?>/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

<!-- Switchery JavaScript -->
<script src="<?php echo ASSET_URL; ?>/vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Fancy Dropdown JS -->
<script src="<?php echo ASSET_URL; ?>/dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Init JavaScript -->
<script src="<?php echo ASSET_URL; ?>/dist/js/init.js"></script>

<script src="<?php echo ASSET_URL; ?>/dist/js/bootstrap-table-print.js"></script>
<script>
    var api_url = '<?php echo API_URL; ?>';
    var admin = {
        init : function() {
            admin.eventListener();
        },
        eventListener : function() {
            $(document).on('click','.view-details', function(e) {
                var ir_id = $(this).attr('ir-id');
                console.log(ir_id);
                $('#view-details').modal({show: 'true'});

                $.ajax({ 
                    url : api_url+'/admin/ir-details',
                    type : 'POST',
                    data : { ir_id : ir_id},
                    success : function(res) {
                        console.log(res);
                        if(res.errorCode == 0) {
                            
                        } 
                        else {
                            swal('Incident Details',res.errorMsg, 'error');
                        }
                    }
                })
                $('.modal-view-details-content').removeClass('hide');
            });


            $(document).on('click','.close-modal', function(e) {
                    $('.modal-view-details-content').addClass('hide');
            });

            
        }
    }
    admin.init();
</script>