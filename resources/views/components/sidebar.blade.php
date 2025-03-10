<aside class="bg-glass-sidebar hidden-aside">
  <header class="d-flex justify-content-center">
    <img src="{{ asset('assets/img/logo.png') }}" alt="" width="200px">
  </header>
  @role('kasir')
    <ul class="mt-4">
      <li class="mb-2">
        <a href="{{ route('app.dashboard') }}"
          class="d-inline-block text-decoration-none text-white {{ Request::is('app/dashboard') ? 'active' : '' }}">
          <div class="d-flex align-items-center"><iconify-icon icon="radix-icons:dashboard"
              width="30px"></iconify-icon>&nbsp;&nbsp;&nbsp;<span class="fs-5">Dashboard</span></div>
        </a>
      </li>
      <li class="mb-2">
        <a href="{{ route('app.menu') }}"
          class="d-inline-block text-decoration-none text-white {{ Request::is('app/menu') ? 'active' : '' }}{{ Request::is('app/menu/*') ? 'active' : '' }}">
          <div class="d-flex align-items-center"><iconify-icon icon="tabler:coffee"
              width="30px"></iconify-icon>&nbsp;&nbsp;&nbsp;<span class="fs-5">Menu</span></div>
        </a>
      </li>
      <li class="mb-2">
        <a href="{{ route('app.orders') }}"
          class="d-inline-block text-decoration-none text-white {{ Request::is('app/orders') ? 'active' : '' }} {{ Request::is('app/orders/*') ? 'active' : '' }}">
          <div class="d-flex align-items-center"><iconify-icon icon="mdi:cart-outline"
              width="30px"></iconify-icon>&nbsp;&nbsp;&nbsp;<span class="fs-5">Orders</span></div>
        </a>
      </li>
      <li class="mb-2">
        <a href="{{ route('app.table_number') }}"
          class="d-inline-block text-decoration-none text-white {{ Request::is('app/table-number') ? 'active' : '' }}">
          <div class="d-flex align-items-center"><iconify-icon icon="material-symbols:table-restaurant-outline"
              width="30px"></iconify-icon>&nbsp;&nbsp;&nbsp;<span class="fs-5">Table Number</span></div>
        </a>
      </li>
      <li class="mb-2">
        <a href="{{ route('app.transactions') }}"
          class="d-inline-block text-decoration-none text-white {{ Request::is('app/transactions') ? 'active' : '' }}{{ Request::is('app/transactions/*') ? 'active' : '' }}">
          <div class="d-flex align-items-center"><iconify-icon icon="uil:transaction"
              width="30px"></iconify-icon>&nbsp;&nbsp;&nbsp;<span class="fs-5">Transactions</span></div>
        </a>
      </li>
    </ul>
  @endrole
  @role('pelanggan')
    <ul class="mt-4">
      <li class="mb-2">
        <a href="{{ route('dashboard') }}"
          class="d-inline-block text-decoration-none text-white {{ Request::is('dashboard') ? 'active' : '' }}">
          <div class="d-flex align-items-center"><iconify-icon icon="radix-icons:dashboard"
              width="30px"></iconify-icon>&nbsp;&nbsp;&nbsp;<span class="fs-5">Dashboard</span></div>
        </a>
      </li>
      <li class="mb-2">
        <a href="{{ route('menu') }}"
          class="d-inline-block text-decoration-none text-white {{ Request::is('menu') ? 'active' : '' }}">
          <div class="d-flex align-items-center"><iconify-icon icon="tabler:coffee"
              width="30px"></iconify-icon>&nbsp;&nbsp;&nbsp;<span class="fs-5">Menu</span></div>
        </a>
      </li>
      <li class="mb-2">
        <a href="{{ route('orders') }}"
          class="d-inline-block text-decoration-none text-white {{ Request::is('orders') ? 'active' : '' }}{{ Request::is('orders/*') ? 'active' : '' }}">
          <div class="d-flex align-items-center"><iconify-icon icon="mdi:cart-outline"
              width="30px"></iconify-icon>&nbsp;&nbsp;&nbsp;<span class="fs-5">Orders</span></div>
        </a>
      </li>
      <li class="mb-2">
        <a href="{{ route('transactions') }}"
          class="d-inline-block text-decoration-none text-white {{ Request::is('transactions') ? 'active' : '' }}{{ Request::is('transactions/*') ? 'active' : '' }}">
          <div class="d-flex align-items-center"><iconify-icon icon="uil:transaction"
              width="30px"></iconify-icon>&nbsp;&nbsp;&nbsp;<span class="fs-5">Transactions</span></div>
        </a>
      </li>
    </ul>
  @endrole
  <div class="position-absolute bottom-0">
    <iconify-icon icon="game-icons:coffee-beans" width="100%"
      style="color: rgba( 255, 255, 255, 0.2);"></iconify-icon>
  </div>
</aside>
