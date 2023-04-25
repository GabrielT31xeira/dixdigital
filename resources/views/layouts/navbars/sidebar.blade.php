<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('WD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ _('White Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ _('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ _('Icons') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="tim-icons icon-badge"></i>
                    <p>{{ _('Administrar Usuarios') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('noticia.index') }}">
                    <i class="tim-icons icon-attach-87"></i>
                    <p>{{ _('Minhas Notícias') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
