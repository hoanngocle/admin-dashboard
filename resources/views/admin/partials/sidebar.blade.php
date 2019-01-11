<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="#" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                    <img src="{{ asset("img/user/$avatar.jpg") }}" alt="{{$avatar}}" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        {{ $nickname }}
                        <small>Back end developer</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                    <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            {{--<li class="nav-header">Navigation</li>--}}
            <li>
                <a href="{{ URL::route('admin.dashboard') }}">
                    <i class="fa fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-users"></i>
                    <span>Member</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('admin.dashboard') }}">Member Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Statistic</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-gem"></i>
                    <span>Training</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('admin.dashboard') }}">Item Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Level Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Setting</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-book"></i>
                    <span>Novel</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('admin.dashboard') }}">Author Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Novel Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Chapter Management</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fab fa-blogger"></i>
                    <span>Blog</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('admin.dashboard') }}">Image Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Video Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Post Management</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fab fa-bitcoin"></i>
                    <span>Money Expense</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('admin.dashboard') }}">Transaction Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Wallet Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Loan Debt Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Saving Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Saving Management</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fas fa-graduation-cap"></i>
                    <span>E-Learning</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('admin.dashboard') }}">Course Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Lesson Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Word Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Kanji Management</a></li>
                    <li><a href="{{ URL::route('admin.dashboard') }}">Bunpou Management</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fas fa-cog"></i>
                    <span>System Configuration</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('admin.dashboard') }}">Course Management</a></li>
                </ul>
            </li>

            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->