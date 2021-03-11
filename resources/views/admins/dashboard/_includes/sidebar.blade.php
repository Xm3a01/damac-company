<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="/dashboard" class="simple-text logo-small">
         <div class="logo-image-big">
          {{-- <img src="/assets/images/favico.ico" height="90" width="100" class="col-md-6 offset-md-3"> --}}
           Hash.D.P
        </div>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class=" {{ request()->is('dashboard') ? 'active' : '' }} ">
                <a href="/dashboard">
                    <i class="nc-icon nc-bank"></i>
                    <p>Home</p>
                </a>
            </li>

            <li class="{{ request()->is('*companies*') ? 'active' : '' }}">
                <a href="{{ route('companies.index') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Companies</p>
                </a>
            </li>

            <li class="{{ request()->is('*services*') ? 'active' : '' }}">
                <a href="{{ route('services.index') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Services</p>
                </a>
            </li>
            <li class="{{ request()->is('*teams*') ? 'active' : '' }}">
                <a href="{{ route('teams.index') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Team</p>
                </a>
            </li>
            <li class="{{ request()->is('*portfolios*') ? 'active' : '' }}">
                <a href="{{ route('portfolios.index') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Portfolios</p>
                </a>
            </li>

            <li class="{{ request()->is('*partiners*') ? 'active' : '' }}">
                <a href="{{ route('partiners.index') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Partiners</p>
                </a>
            </li>
             
            <li class="{{ request()->is('*links*') ? 'active' : '' }}">
                <a href="{{ route('links.index') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Media links</p>
                </a>
            </li>
           
            <li class="{{ request()->is('*statstics*') ? 'active' : '' }}">
                <a href="{{ route('statstics.index') }}">
                    <i class="nc-icon nc-badge"></i>
                    <p>skills</p>
                </a>
            </li>
             {{--
            <li>
            <li class="{{ request()->is('*galleries*') ? 'active' : '' }}">
                <a href="{{ route('galleries.index') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Gallery</p>
                </a>
            </li>
            <li class="{{ request()->is('*trainers*') ? 'active' : '' }}">
                <a href="{{ route('trainers.index') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Trainers</p>
                </a>
            </li> --}}
            {{-- @endif --}}
        </ul>
    </div>
</div>

<style>
    .sidebar[data-active-color="danger"] .nav li.active>a,
    .sidebar[data-active-color="danger"] .nav li.active>a i,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a i,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a {
        color: #51cbce;
        opacity: 1;
    }

</style>
