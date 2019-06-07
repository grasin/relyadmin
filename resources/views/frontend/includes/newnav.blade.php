@auth
<!--------------------
START - Top Bar
-------------------->
                <div class="top-bar color-scheme-transparent">
<!--------------------
START - Top Menu Controls
-------------------->
                    
                    <div class="top-menu-controls">
                        <div class="element-search autosuggest-search-activator"><input placeholder="Start typing to search..." type="text"></div>

                        
                        
                        
                        
<!--------------------
START - User avatar and menu in secondary top menu
-------------------->
                        <div class="logged-user-w">
                            <div class="logged-user-i">
                                <div class="avatar-w"><img alt="" src="{{URL::asset('img/avatar1.jpg')}}"></div>
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
                                        <li><a href="logout"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
<!--------------------
END - User avatar and menu in secondary top menu
-------------------->
                    </div>
<!--------------------
END - Top Menu Controls
-------------------->
                </div>
<!--------------------
END - Top Bar
-------------------->
@endauth