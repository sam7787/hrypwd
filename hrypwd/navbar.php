<div class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Haryana</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a href="#">
                                <p style="margin-top: 5px; margin-bottom: 0;">
                                    <span id="lblUsr" style="font-weight:bold;"></span>

                                </p>

                            </a>

                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#helpModal">
                                <p style="margin: 0;">
                                    <span id="Label2" class="cus-logout">Help</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <!-- <a href="javascript:void(0);" data-toggle="collapse" data-target="#logoutModal">
                                <p style="margin: 0;">
                                    <span id="Label1" class="cus-logout">Log out</span>
                                </p>
                            </a> -->
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
            <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="collapse" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 style="color: #333;">Log Out <i class="fa fa-lock"></i></h4>
                        </div>
                        <div class="modal-body">
                            <p style="color: black;">
                                <i class="fa fa-question-circle"></i>Are you sure you want to log-off?
                                <br>
                            </p>
                            <div class="actionsBtns">

                                <input type="submit" name="_ctl0:btnLogout" value="Logout" id="btnLogout" class="btn btn-default btn-primary">

                                <button class="btn btn-default" data-dismiss="modal">Cancel</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="helpModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content" style="width: 450px;">
                        <div class="modal-header">

                            <h4 style="color: #333;">In case of any query please contact : </h4>
                        </div>
                        <div class="modal-body">
                            <p style="color: black;">
                                
                                (i)  IT-CELL - 0172-2618136
                                
                            </p>
                            <div class="actionsBtns">
                                <button class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        