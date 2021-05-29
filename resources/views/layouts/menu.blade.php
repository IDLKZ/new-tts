<li class="nav-item {{ Request::is('mainBlocks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('mainBlocks.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Главный блок</span>
    </a>
</li>
<li class="nav-item {{ Request::is('advantageBlocks*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('advantageBlocks.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Блок Преимущества</span>
    </a>
</li>
<li class="nav-item {{ Request::is('serviceOnes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('serviceOnes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Блок услуги 1</span>
    </a>
</li>
<li class="nav-item {{ Request::is('serviceSeconds*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('serviceSeconds.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Блок услуги 2</span>
    </a>
</li>
<li class="nav-item {{ Request::is('structures*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('structures.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Блок Структуры</span>
    </a>
</li>
<li class="nav-item {{ Request::is('teams*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('teams.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Блок Руководства</span>
    </a>
</li>
<li class="nav-item {{ Request::is('contacts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contacts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Контакты</span>
    </a>
</li>
