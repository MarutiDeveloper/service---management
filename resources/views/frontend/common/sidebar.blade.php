<ul id="account-panel" class="nav nav-pills flex-column">
    <li class="nav-item">
        <a href="{{ route('account.profile') }}"
            class="nav-link font-weight-bold {{ request()->routeIs('account.profile') ? 'active' : '' }}">
            <i class="fas fa-user-alt"></i> My Profile
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('account.changePassword') }}" class="nav-link font-weight-bold">
            <i class="fas fa-lock"></i> Change Password
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('account.logout') }}" class="nav-link font-weight-bold">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </li>
</ul>