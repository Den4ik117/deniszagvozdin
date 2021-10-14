<div class="sidebar-wrapper active">
  <div class="sidebar-header">
    <div class="d-flex justify-content-between">
      <div class="logo">
        <a href="{{ route('index') }}">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" srcset=""/>
        </a>
      </div>
      <div class="toggler">
        <a href="#" class="sidebar-hide d-xl-none d-block">
            <i class="bi bi-x bi-middle"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="sidebar-menu">
    <ul class="menu">
      <li class="sidebar-title">Меню</li>

      <li @class(['active' => Route::is('dashboard'), 'sidebar-item' => true])>
        <a href="{{ route('dashboard') }}" class="sidebar-link">
          <i class="bi bi-grid-fill"></i>
          <span>Главная</span>
        </a>
      </li>

      <li class="sidebar-item has-sub">
        <a href="#" class="sidebar-link">
          <i class="bi bi-chat-square-text-fill"></i>
          <span>Статьи</span>
        </a>
        <ul @class(['active' => Route::is('articles.*'), 'submenu' => true])>
          <li @class(['active' => Route::is('articles.index'), 'submenu-item' => true])>
            <a href="{{ route('articles.index') }}">Все статьи</a>
          </li>
          <li @class(['active' => Route::is('articles.create'), 'submenu-item' => true])>
            <a href="{{ route('articles.create') }}">Написать статью</a>
          </li>
        </ul>
      </li>

      <li class="sidebar-item">
        <a href="{{ route('logout') }}" class="sidebar-link">
          <i class="bi bi-door-closed-fill"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </div>
  <button class="sidebar-toggler btn x">
    <i data-feather="x"></i>
  </button>
</div>
