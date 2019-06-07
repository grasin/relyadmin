@auth
            
            
            
<!--------------------
START - Main Menu
-------------------->
            <div class="menu-w color-scheme-light color-style-default menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
                <div class="logo-w">
                    <a class="logo" href="index.html">
                        <div class="logo-label"> <img src="{{URL::asset('img/relynext_logo_light.png')}}"/></div>
                    </a>
                </div>
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w"><img alt="" src="{{URL::asset('img/avatar1.jpg')}}"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">{{ $logged_in_user->name }}</div>
                            <div class="logged-user-role">{{ $logged_in_user->role }}</div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <br>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w"><img alt="" src="{{URL::asset('img/avatar1.jpg')}}"></div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name">{{ $logged_in_user->name }}</div>
                                    <div class="logged-user-role">{{ $logged_in_user->role }}</div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                                <li><a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li>
                                <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-actions">
                    <!--------------------
START - Messages Link in secondary top menu
-------------------->
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right"><i class="os-icon os-icon-mail-14"></i>
                        <div class="new-messages-count">12</div>
                        <div class="os-dropdown light message-list">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="{{URL::asset('img/avatar1.jpg')}}"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">John Mayers</h6>
                                            <h6 class="message-title">Account Update</h6>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="{{URL::asset('img/avatar2.jpg')}}"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Phil Jones</h6>
                                            <h6 class="message-title">Secutiry Updates</h6>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="{{URL::asset('img/avatar3.jpg')}}"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Bekky Simpson</h6>
                                            <h6 class="message-title">Vacation Rentals</h6>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="{{URL::asset('img/avatar4.jpg')}}"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Alice Priskon</h6>
                                            <h6 class="message-title">Payment Confirmation</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--------------------
END - Messages Link in secondary top menu
-------------------->
                    <!--------------------
START - Settings Link in secondary top menu
-------------------->
                    <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-right"><i class="os-icon os-icon-ui-46"></i>
                        <div class="os-dropdown">
                            <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                            <ul>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a></li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a></li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a></li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--------------------
END - Settings Link in secondary top menu
-------------------->
                    <!--------------------
START - Messages Link in secondary top menu
-------------------->
                    <div class="messages-notifications os-dropdown-trigger os-dropdown-position-right"><i class="os-icon os-icon-zap"></i>
                        <div class="new-messages-count">4</div>
                        <div class="os-dropdown light message-list">
                            <div class="icon-w"><i class="os-icon os-icon-zap"></i></div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="{{URL::asset('img/avatar1.jpg')}}"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">John Mayers</h6>
                                            <h6 class="message-title">Account Update</h6>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="{{URL::asset('img/avatar2.jpg')}}"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Phil Jones</h6>
                                            <h6 class="message-title">Secutiry Updates</h6>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="{{URL::asset('img/avatar3.jpg')}}"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Bekky Simpson</h6>
                                            <h6 class="message-title">Vacation Rentals</h6>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="user-avatar-w"><img alt="" src="{{URL::asset('img/avatar4.jpg')}}"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Alice Priskon</h6>
                                            <h6 class="message-title">Payment Confirmation</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--------------------
END - Messages Link in secondary top menu
-------------------->
                </div>
                
                
                
                <h1 class="menu-page-header">Page Header</h1>
                <ul class="main-menu">
                    <li class="sub-header"><span>RFQ</span></li>
                    <li class="selected">
                        <a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Create New RFQs</span></a>
                    </li>
                    <li class="selected has-sub-menu">
                        <a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>View RFQs</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Browse RFQs</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layout"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="index.html">RFQ Kanban View</a></li>
                                    <li><a href="index.html">Open RFQs</a></li>
                                    <li><a href="apps_crypto.html">Closed and Submited RFQs</a></li>
                                    <li><a href="apps_support_dashboard.html">Partially Pending RFQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                    
                    <li class="sub-header"><span>Orders</span></li>
                    <li class="selected">
                        <a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Place a New Orders</span></a>
                    </li>
                    <li class="selected has-sub-menu">
                        <a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>View Orders</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Browse Orders</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layout"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="index.html">Orders Kanban View</a></li>
                                    <li><a href="index.html">Open Orders</a></li>
                                    <li><a href="apps_crypto.html">Closed and Submited Orders</a></li>
                                    <li><a href="apps_support_dashboard.html">Partially Pending Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                    
                    
                    <li class="sub-header"><span>Products</span></li>
                    <li class="selected">
                        <a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Add new Products</span></a>
                    </li>
                    <li class="selected">
                        <a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Search Products</span></a>
                    </li>
                    
                    
                                        
                    <li class="sub-header"><span>Invoices</span></li>
                    <li class="selected">
                        <a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>View Invoice</span></a>
                    </li>
                    <li class="selected">
                        <a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Raise Invoice Dispute</span></a>
                    </li>
                </ul>
            </div>
<!--------------------
END - Main Menu
-------------------->
@endauth