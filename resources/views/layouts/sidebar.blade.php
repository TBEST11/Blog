<div id="wrapper">

    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <h2>Logo</h2>
      </div>
      <ul class="sidebar-nav">
        <li class="active">
          <a href="#"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-plug"></i>Plugins</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-user"></i>Users</a>
        </li>
      </ul>
    </aside>
  
    <div id="navbar-wrapper">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
          </div>
        </div>
      </nav>
    </div>
  
    <section id="content-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <main class="py-4">
                @yield('content')
            </main>
          </div>
        </div>
    </section>
  
  </div>