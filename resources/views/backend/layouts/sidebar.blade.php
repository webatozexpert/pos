  <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    @if(Auth::user()->usertype=='Admin')
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                    Manage User
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('users.view')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View User</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        @endif
                         <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                   Manage Profile  
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('profile.view')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('profile.password.view')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Password Change</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                       
                       <li class="nav-item has-treeview">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                   Logout 
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                            
                            
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->