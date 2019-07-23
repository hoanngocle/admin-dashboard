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
                        <img src="{{ asset("img/user/$currentAvatar") }}" alt="{{ $currentAvatar }}"/>
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        {{ $currentNickname }}
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
                    <li><a href="{{ URL::route('user.index') }}">Member Management</a></li>
                    {{--<li><a href="{{ URL::route('admin.dashboard') }}">Statistic</a></li>--}}
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-gem"></i>
                    <span>Training</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('item.index') }}">Item Management</a></li>
                    <li><a href="{{ URL::route('level.index') }}">Level Management</a></li>
                    <li><a href="{{ URL::route('config.index') }}">Training Configuration</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-book"></i>
                    <span>Novel</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('author.index') }}">Author Management</a></li>
                    <li><a href="{{ URL::route('book.index') }}">Book Management</a></li>
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
                    <li><a href="{{ URL::route('image.index') }}">Image Management</a></li>
                    <li><a href="{{ URL::route('video.index') }}">Video Management</a></li>
                    <li><a href="{{ URL::route('post.index') }}">Post Management</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fab fa-bitcoin"></i>
                    <span>Money Expense</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('transaction.index') }}">Transaction Management</a></li>
                    <li><a href="{{ URL::route('wallet.index') }}">Wallet Management</a></li>
                    <li><a href="{{ URL::route('loan-debt.index') }}">Loan Debt Management</a></li>
                    <li><a href="{{ URL::route('saving.index') }}">Saving Management</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fas fa-graduation-cap"></i>
                    <span>E-Learning</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ URL::route('course.index') }}">Course Management</a></li>
                    <li><a href="{{ URL::route('lesson.index') }}">Lesson Management</a></li>
                    <li><a href="{{ URL::route('word.index') }}">Word Management</a></li>
                    <li><a href="{{ URL::route('kanji.index') }}">Kanji Management</a></li>
                    <li><a href="{{ URL::route('grammar.index') }}">Grammar Management</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ URL::route('cv.index') }}">
                    <b class="caret"></b>
                    <i class="fas fa-graduation-cap"></i>
                    <span>CV</span>
                </a>
            </li>

            <li>
                <a href="{{ URL::route('event.index') }}">
                    <b class="caret"></b>
                    <i class="fas fa-graduation-cap"></i>
                    <span>Event</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <b class="caret"></b>
                    <i class="fas fa-cog"></i>
                    <span>System Configuration</span>
                </a>
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