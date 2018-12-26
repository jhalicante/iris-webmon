<div id="view-details" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5 class="modal-title">Incident Details</h5>
            </div>
            <div class="modal-body">
                <div class="container modal-view-details-content hide">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <b class="mb-10">Person Filed:</b>
                                <p class="txt-dark" > Johnmark Alicante </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <b class="mb-10">Date Reported:</b>
                                <p class="txt-dark" > 2018-12-12 12:00 AM</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <b class="mb-10">Subject:</b>
                                <p class="txt-dark" > Lorem ipsum dolor </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <b class="mb-10">Incident Location</b><br/>
                                <a href="<?php echo SITE_URL;?>/dashboard/area-boundary?mode=incident-directions&lat=0&lng=0" target="_blank" class="txt-primary"> View Direction </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <b class="mb-10">Description:</b>
                        <p class="txt-dark" > Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis aut incidunt nam! Modi, id numquam error beatae ipsa saepe quis unde. Consequuntur dignissimos cupiditate libero dolore mollitia sint quasi. </p>
                    </div>
                    <div class="form-group">
                        <b class="mb-10">Attached Photo:</b><br/>
                        
                        <img src="http://localhost:8888/iris-webmon/assets/img/user1.png" alt="" width="80" height="80">
                        <img src="http://localhost:8888/iris-webmon/docs/html/img/big/img5.jpg" alt="" width="80" height="80">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group">
                    <div class="dropup">
                        <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle " type="button">Action <span class="caret"></span></button>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-reply"></i>Respond</a></li>
                            <li><a href="#"><i class="fa fa-times-circle-o"></i>Ignore</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-check"></i> Complete</a></li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="btn btn-danger close-modal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>