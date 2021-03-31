<li class="nav-item @if(url()->current() == url('/')) active @endif ">
    <a href="{{url('/')}}" class="nav-link">
        <i class="material-icons">dashboard</i>
        <p>{{__('admin.sidebar.home')}}</p>
    </a>
</li>
@if (auth('admin')->user()->can('Admins') ||auth('admin')->user()->can('Roles') ||auth('admin')->user()->can('Permissions'))
<li class="nav-item ">
    <a class="nav-link collapsed" data-toggle="collapse" href="#app_managements" aria-expanded="false">
        <i class="material-icons">keyboard_arrow_down</i>
        <p> {{__('admin.sidebar.app_managements')}}</p>
    </a>
    <div class="collapse @if(strpos(url()->current() , url('app_managements'))===0) in @endif" id="app_managements" @if(strpos(url()->current() , url('app_managements'))===0) aria-expanded="true" @endif>
        <ul class="nav">
            @if (auth('admin')->user()->can('Admins'))
                <li class="nav-item @if(strpos(url()->current() , url('app_managements/admins'))===0) active @endif">
                    <a href="{{url('app_managements/admins')}}" class="nav-link">
                        <i class="material-icons">group</i>
                        <p>{{__('admin.sidebar.admins')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('Roles'))
                <li class="nav-item @if(strpos(url()->current() , url('app_managements/roles'))===0) active @endif">
                    <a href="{{url('app_managements/roles')}}" class="nav-link">
                        <i class="material-icons">accessibility</i>
                        <p>{{__('admin.sidebar.roles')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('Permissions'))
                <li class="nav-item @if(strpos(url()->current() , url('app_managements/permissions'))===0) active @endif">
                    <a href="{{url('app_managements/permissions')}}" class="nav-link">
                        <i class="material-icons">vpn_key</i>
                        <p>{{__('admin.sidebar.permissions')}}</p>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</li>
@endif
@if (auth('admin')->user()->can('Settings')|| auth('admin')->user()->can('Faqs') || auth('admin')->user()->can('Categories')||auth('admin')->user()->can('Subscriptions')|| auth('admin')->user()->can('Countries')|| auth('admin')->user()->can('Cities'))
<li class="nav-item ">
    <a class="nav-link collapsed" data-toggle="collapse" href="#app_data" aria-expanded="false">
        <i class="material-icons">keyboard_arrow_down</i>
        <p> {{__('admin.sidebar.app_data')}}</p>
    </a>
    <div class="collapse @if(strpos(url()->current() , url('app_data'))===0) in @endif" id="app_data" @if(strpos(url()->current() , url('app_data'))===0) aria-expanded="true" @endif>
        <ul class="nav">
            @if (auth('admin')->user()->can('Settings'))
                <li class="nav-item @if(strpos(url()->current() , url('app_data/settings'))===0) active @endif">
                    <a href="{{url('app_data/settings')}}" class="nav-link">
                        <i class="material-icons">settings</i>
                        <p>{{__('admin.sidebar.settings')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('Faqs'))
                <li class="nav-item @if(strpos(url()->current() , url('app_data/faqs'))===0) active @endif">
                    <a href="{{url('app_data/faqs')}}" class="nav-link">
                        <i class="material-icons">help</i>
                        <p>{{__('admin.sidebar.faqs')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('Categories'))
                <li class="nav-item @if(strpos(url()->current() , url('app_data/categories'))===0) active @endif">
                    <a href="{{url('app_data/categories')}}" class="nav-link">
                        <i class="material-icons">category</i>
                        <p>{{__('admin.sidebar.categories')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('Subscriptions'))
                <li class="nav-item @if(strpos(url()->current() , url('app_data/subscriptions'))===0) active @endif">
                    <a href="{{url('app_data/subscriptions')}}" class="nav-link">
                        <i class="material-icons">card_membership</i>
                        <p>{{__('admin.sidebar.subscriptions')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('Countries'))
                <li class="nav-item @if(strpos(url()->current() , url('app_data/countries'))===0) active @endif">
                    <a href="{{url('app_data/countries')}}" class="nav-link">
                        <i class="material-icons">language</i>
                        <p>{{__('admin.sidebar.countries')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('Cities'))
                <li class="nav-item @if(strpos(url()->current() , url('app_data/cities'))===0) active @endif">
                    <a href="{{url('app_data/cities')}}" class="nav-link">
                        <i class="material-icons">location_city</i>
                        <p>{{__('admin.sidebar.cities')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('Issues'))
                <li class="nav-item @if(strpos(url()->current() , url('app_data/issues'))===0) active @endif">
                    <a href="{{url('app_data/issues')}}" class="nav-link">
                        <i class="material-icons">bug_report</i>
                        <p>{{__('admin.sidebar.issues')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('IssuesTypes'))
                <li class="nav-item @if(strpos(url()->current() , url('app_data/issues_types'))===0) active @endif">
                    <a href="{{url('app_data/issues_types')}}" class="nav-link">
                        <i class="material-icons">pest_control</i>
                        <p>{{__('admin.sidebar.issues_types')}}</p>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</li>
@endif
@if (auth('admin')->user()->can('Advertisements')|| auth('admin')->user()->can('Orders'))
<li class="nav-item ">
    <a class="nav-link collapsed" data-toggle="collapse" href="#app_content" aria-expanded="false">
        <i class="material-icons">keyboard_arrow_down</i>
        <p> {{__('admin.sidebar.app_content')}}</p>
    </a>
    <div class="collapse @if(strpos(url()->current() , url('app_content'))===0) in @endif" id="app_content" @if(strpos(url()->current() , url('app_content'))===0) aria-expanded="true" @endif>
        <ul class="nav">
            @if (auth('admin')->user()->can('Advertisements'))
                <li class="nav-item @if(strpos(url()->current() , url('app_content/advertisements'))===0) active @endif">
                    <a href="{{url('app_content/advertisements')}}" class="nav-link">
                        <i class="material-icons">font_download</i>
                        <p>{{__('admin.sidebar.advertisements')}}</p>
                    </a>
                </li>
            @endif
            @if (auth('admin')->user()->can('Orders'))
                <li class="nav-item @if(strpos(url()->current() , url('app_content/orders'))===0) active @endif">
                    <a href="{{url('app_content/orders')}}" class="nav-link">
                        <i class="material-icons">category</i>
                        <p>{{__('admin.sidebar.orders')}}</p>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</li>
@endif
@if (auth('admin')->user()->can('Customers') || auth('admin')->user()->can('Technicals') || auth('admin')->user()->can('Tickets')|| auth('admin')->user()->can('CustomerSubscriptions'))
    <li class="nav-item ">
        <a class="nav-link collapsed" data-toggle="collapse" href="#user_managements" aria-expanded="false">
            <i class="material-icons">keyboard_arrow_down</i>
            <p> {{__('admin.sidebar.user_managements')}}</p>
        </a>
        <div class="collapse @if(strpos(url()->current() , url('user_managements'))===0) in @endif" id="user_managements" @if(strpos(url()->current() , url('user_managements'))===0) aria-expanded="true" @endif>
            <ul class="nav">
                @if (auth('admin')->user()->can('Customers'))
                    <li class="nav-item @if(strpos(url()->current() , url('user_managements/customers'))===0) active @endif">
                        <a href="{{url('user_managements/customers')}}" class="nav-link">
                            <i class="material-icons">group</i>
                            <p>{{__('admin.sidebar.customers')}}</p>
                        </a>
                    </li>
                @endif
                @if (auth('admin')->user()->can('Technicals'))
                    <li class="nav-item @if(strpos(url()->current() , url('user_managements/technicals'))===0) active @endif">
                        <a href="{{url('user_managements/technicals')}}" class="nav-link">
                            <i class="material-icons">people_outline</i>
                            <p>{{__('admin.sidebar.technicals')}}</p>
                        </a>
                    </li>
                @endif
                @if (auth('admin')->user()->can('UserSubscriptions'))
                    <li class="nav-item @if(strpos(url()->current() , url('user_managements/users_subscriptions'))===0) active @endif">
                        <a href="{{url('user_managements/users_subscriptions')}}" class="nav-link">
                            <i class="material-icons">recent_actors</i>
                            <p>{{__('admin.sidebar.users_subscriptions')}}</p>
                        </a>
                    </li>
                @endif
                @if (auth('admin')->user()->can('Tickets'))
                    <li class="nav-item @if(strpos(url()->current() , url('user_managements/tickets'))===0) active @endif">
                        <a href="{{url('user_managements/tickets')}}" class="nav-link">
                            <i class="material-icons">label</i>
                            <p>{{__('admin.sidebar.tickets')}}</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </li>
@endif
