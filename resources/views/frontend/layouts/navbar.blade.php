<header>
    <nav class="navbar navbar-fixed-top navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{ Config::get('settings.logo') }}" class="navbar-logo">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if ($menu_items->count())
                        @foreach ($menu_items as $key => $menu_item)
                            @if (($menu_item->page_id && is_object($menu_item->page)) || !$menu_item->page_id)
                                @if ($menu_item->children->count())
                                    @foreach ($menu_item->children as $item => $child)
                                        <li class="navitem dropdown {{ ($key==0) ? ' fistitem' : '' }} {{ ($child->url() == Request::url()) ? 'active' : '' }}">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                               aria-haspopup="true" aria-expanded="false">
                                                {{ $menu_item->name }}
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach ($menu_item->children as $i => $child)
                                                    <li class=""><a href="{{ $child->url() }}">{{ $child->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                @else
                                    <li class="navitem {{ ($key==0)? 'fistitem' : '' }} {{ ($menu_item->url() == Request::url()) ? ' active' : '' }}">
                                        <a href="{{ $menu_item->url() }}">{{ $menu_item->name }}</a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    @endif
                    @if(!Auth::check())
                        <li>
                            <a href="{{ route('backpack.auth.login') }}">{{ trans('auth.login') }}</a>
                        </li>
                    @endif
                    @hasrole('root')
                    <li>
                        <a href="{{ route('backpack') }}">{{ trans('frontend.dashboard') }}</a>
                    </li>
                    @endhasrole
                </ul>
            </div>
        </div>
    </nav>
</header>
