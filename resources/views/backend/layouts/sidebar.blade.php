 @php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
 @endphp

  <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    @if(Auth::user()->usertype=='Admin')
                        <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                    Manage User
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('users.view')}}" class="nav-link {{($route=='users.view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View User</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        @endif
                         <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                   Manage Profile  
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('profile.view')}}" class="nav-link {{($route=='profile.view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('profile.password.view')}}" class="nav-link {{($route=='profile.password.view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p> Password Change</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{($prefix=='/suppliers')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                   Manage Suppliers  
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('suppliers.view')}}" class="nav-link {{($route=='suppliers.view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Suppliers</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{($prefix=='/customers')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                   Manage Customers  
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('customers.view')}}" class="nav-link {{($route=='customers.view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Customers</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{($prefix=='/units')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                   Manage Units  
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('units.view')}}" class="nav-link {{($route=='units.view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Units</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{($prefix=='/categories')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                   Manage Category
                                <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('categories.view')}}" class="nav-link {{($route=='categories.view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Category</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                         <li class="nav-item has-treeview {{($prefix=='/products')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                   Manage Products
                                <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('products.view')}}" class="nav-link {{($route=='products.view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Products</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{($prefix=='/purchase')?'menu-open':''}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                   Manage Purchase
                                <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('purchase.view')}}" class="nav-link {{($route=='purchase.view')?'active':''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Purchase</p>
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