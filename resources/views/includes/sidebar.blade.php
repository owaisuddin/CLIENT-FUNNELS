<div class="sidebar" data-color="rose" data-background-color="black">
    <div class="logo">
        <a href="/home" class="simple-text logo-mini">
            SF				</a>
        <a href="/home" class="simple-text logo-normal">
            Silko Funnels				</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('/profile_image/'.Auth::user()->profile_image)}}" class="img-responsive">
            </div>
            <div class="user-info">
                <a href="/my-account" class="username">
							<span>
                            {{ Auth::user()->name }}
                                <div class="float-right"><i class="fa fa-arrow-right"></i></div>
							</span>
                </a>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="/home">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/campaigns">
                    <i class="material-icons">build</i>
                    <p> Campaigns </p>
                </a>
            </li>


            <li class="nav-item ">
                <a class="nav-link" href="/calendar">
                    <i class="material-icons">calendar_today</i>
                    <p> Calendar </p>
                </a>
            </li>


            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" data-toggle="collapse" href="#navlinkMcommunications">--}}
                    {{--<i class="material-icons">perm_phone_msg</i>--}}
                    {{--<p> Communications										<b class="caret"></b>--}}
                    {{--</p>--}}
                {{--</a>--}}

                {{--<div class="collapse" id="navlinkMcommunications">--}}
                    {{--<ul class="nav">--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/communications/emails">--}}
                                {{--<span class="sidebar-mini"> E </span>--}}
                                {{--<span class="sidebar-normal"> Emails </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/communications/sms">--}}
                                {{--<span class="sidebar-mini"> S </span>--}}
                                {{--<span class="sidebar-normal"> SMS </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}

            {{--</li>--}}


            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" href="https://www.clientfunnels.io/contacts">--}}
                    {{--<i class="material-icons">accessibility_new</i>--}}
                    {{--<p> Contacts </p>--}}
                {{--</a>--}}
            {{--</li>--}}


            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#navlinkMfinance">
                    <i class="material-icons">credit_card</i>
                    <p>Finance<b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="navlinkMfinance">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/payments">
                                <span class="sidebar-mini"> £ </span>
                                <span class="sidebar-normal"> Payments </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/finance/programs">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Programs </span>
                            </a>
                        </li>
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="https://www.clientfunnels.io/finance/contracts">--}}
{{--                                <span class="sidebar-mini"> C </span>--}}
{{--                                <span class="sidebar-normal"> Contracts </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="https://www.clientfunnels.io/finance/stripe-settings">--}}
{{--                                <span class="sidebar-mini"> SS </span>--}}
{{--                                <span class="sidebar-normal"> Stripe Settings </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </div>

            </li>


            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" data-toggle="collapse" href="#navlinkMadmin">--}}
                    {{--<i class="material-icons">business_center</i>--}}
                    {{--<p> Admin										<b class="caret"></b>--}}
                    {{--</p>--}}
                {{--</a>--}}

                {{--<div class="collapse" id="navlinkMadmin">--}}
                    {{--<ul class="nav">--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/admin/business">--}}
                                {{--<span class="sidebar-mini"> B </span>--}}
                                {{--<span class="sidebar-normal"> Business Info </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/admin/officehours">--}}
                                {{--<span class="sidebar-mini"> O </span>--}}
                                {{--<span class="sidebar-normal"> Office Hours </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/admin/users">--}}
                                {{--<span class="sidebar-mini"> U </span>--}}
                                {{--<span class="sidebar-normal"> Users </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/admin/invoices-and-cards">--}}
                                {{--<span class="sidebar-mini"> I </span>--}}
                                {{--<span class="sidebar-normal"> Invoices &amp; Cards </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/admin/credits">--}}
                                {{--<span class="sidebar-mini"> S </span>--}}
                                {{--<span class="sidebar-normal"> SMS Credits </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/admin/notifications">--}}
                                {{--<span class="sidebar-mini"> N </span>--}}
                                {{--<span class="sidebar-normal"> Notifications </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/admin/deleted-content">--}}
                                {{--<span class="sidebar-mini"> X </span>--}}
                                {{--<span class="sidebar-normal"> Deleted Content </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item ">--}}
                            {{--<a class="nav-link" href="https://www.clientfunnels.io/admin/logs">--}}
                                {{--<span class="sidebar-mini"> L </span>--}}
                                {{--<span class="sidebar-normal"> Logs </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}

            {{--</li>--}}


            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" href="https://clientfunnels.crisp.help/en/" target="_blank">--}}
                    {{--<i class="material-icons">help</i>--}}
                    {{--<p> Support </p>--}}
                {{--</a>--}}
            {{--</li>--}}

            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
            <li class="nav-item ">

                    <a class="nav-link" onclick="document.getElementById('logout-form').submit();">
                        <i class="material-icons">skip_previous</i>
                        <p> Logout </p>
                    </a>
            </li>
            </form>

        </ul>
    </div>
</div>