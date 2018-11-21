<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">

            <li class="sidebar-search">

                <div class="input-group custom-search-form">

                    <input type="text" class="form-control" placeholder="Search...">

                    <span class="input-group-btn">

                    <button class="btn btn-default" type="button">

                        <i class="fa fa-search"></i>

                    </button>

                </span>

                </div>

                <!-- /input-group -->

            </li>

          <li>

                <a href="{{ url('/') }}/index"><i class="fa fa-bar-chart-o fa-fw"></i> Home</a>
                    <li>

            <li>

                <a href="#"><i class="fa fa-files-o fa-fw"></i> การขาย<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ url('/') }}/sell_order">ขายสินค้า</a>

                    </li>
                    </li>
                    <li>

                        <a href="{{ url('/') }}/re_product">รับสินค้าคืน</a>

                    </li>
                </ul>

            </li>

            <li>

                <a href="#"><i class="fa fa-files-o fa-fw"></i> การซื้อ<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ url('/') }}/purchase_order">ซื้อสินค้า</a>

                    </li>

                </ul>
                 </li>
                 
                <li>

                <a href="#"><i class="fa fa-files-o fa-fw"></i> สินค้า<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ url('/') }}/product">สินค้า</a>

                    </li>
                    <li>

                        <a href="{{ url('/') }}/movement">ความเคลื่นไหวสินค้า</a>

                    </li>
            </ul>
            </li>
             <li>

                <a href="#"><i class="fa fa-files-o fa-fw"></i> ข้อมูลบุคคล<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="{{ url('/') }}/customer">ข้อมูลลูกค้า</a>

                    </li>
                    
                     <li>

                        <a href="{{ url('/') }}/supplier">ข้อมูลผู้จัดจำหน่าย</a>

                    </li>

            </li>

        </ul>

    </div>

    <!-- /.sidebar-collapse -->

</div>

<!-- /.navbar-static-side -->