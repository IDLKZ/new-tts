<li class="nav-item {{ Request::is('mainBlocks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('mainBlocks.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Main Blocks</span>
    </a>
</li>
<li class="nav-item {{ Request::is('advantageBlocks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('advantageBlocks.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Advantage Blocks</span>
    </a>
</li>
<li class="nav-item {{ Request::is('serviceOnes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('serviceOnes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Service Ones</span>
    </a>
</li>
<li class="nav-item {{ Request::is('serviceSeconds*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('serviceSeconds.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Service Seconds</span>
    </a>
</li>
<li class="nav-item {{ Request::is('structures*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('structures.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Structures</span>
    </a>
</li>
<li class="nav-item {{ Request::is('teams*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('teams.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Teams</span>
    </a>
</li>
<li class="nav-item {{ Request::is('contacts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contacts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Contacts</span>
    </a>
</li>
