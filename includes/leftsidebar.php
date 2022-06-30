            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="dashboard.php?user=<?php echo($_GET['user']) ?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>

                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Add New </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="_addRentPayment.php?user=<?php echo($_GET['user']) ?>">Add Rent Payment</a></li>
                                    <li><a href="_addOtherPayment.php?user=<?php echo($_GET['user']) ?>">Add Other Payment</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Show Data </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="_showRentPayment.php?user=<?php echo($_GET['user']) ?>">Show Rent Payments</a></li>
                                    <li><a href="_rentlogs.php?user=<?php echo($_GET['user']) ?>">Rent Single Payment With Details</a></li>
                                    <li><a href="_showOtherPayment.php?user=<?php echo($_GET['user']) ?>">Show Other Payments</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">Need Help ?</h5>
                        <p>Contact Codex's Lead Developer </p>
                        <p style="font-size:1rem;"><span class="text-custom">Email:</span> <br /> eng.hamedserag@gmail.com</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div>