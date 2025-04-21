<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">
                            Dashboard
                        </span>
                    </a>
                </li>
                
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-gallery"></i>
                        <span class="hide-menu">
                            Banner Module
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('banner.create') }}">Create Banner</a>
                        </li>
                        <li>
                            <a href="{{ route('banners') }}">Manage Banner</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">
                            Category Module
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('category.add') }}">Create Ctegory</a>
                        </li>
                        <li>
                            <a href="{{ route('category.manage') }}">Manage Category</a>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="ti-layout-grid2"></i>
                    <span class="hide-menu">Sub Category</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('sub-category.add') }}">Create Sub Category</a></li>
                        <li><a href="{{ route('sub-category.manage') }}">Manage Sub Category</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-media-right-alt"></i><span class="hide-menu">Unit Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('unit.add') }}">Create Unit</a></li>
                        <li><a href="{{ route('unit.manage') }}">Manage Unit</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-accordion-merged"></i><span class="hide-menu">Product Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('product.add') }}">Create Product</a></li>
                        <li><a href="{{ route('product.manage') }}">Manage Product</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-settings"></i><span class="hide-menu">Order
                            Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.all-order') }}">Manage Order</a></li>
                    </ul>
                </li>

                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Blog Category</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('blog-category.create') }}">Add Blog Category</a></li>
                        <li><a href="{{ route('blog-category') }}">Manage Blog Category</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-palette"></i>
                        <span class="hide-menu">Blog Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('blog.create') }}">Create Blog</a></li>
                        <li><a href="{{ route('blogs') }}">Manage Blog</a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-email"></i>
                        <span class="hide-menu">Contact Modul</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('message') }}">Manage Contact</a></li>
                    </ul>
                </li>



                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-user"></i><span class="hide-menu">Customer
                            Module</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('customers') }}">Manage Customer</a></li>
                    </ul>
                </li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
