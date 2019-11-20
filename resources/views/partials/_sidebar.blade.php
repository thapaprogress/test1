

<!--   <div class="d-flex" id="wrapper"> -->

  
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><h2>Admin Panel</h2></div>
      <div class="list-group list-group-flush">


        <a href="{{ route('complain.index') }}" class="list-group-item list-group-item-action bg-light"><h4>Manage Complains</a>
        <a href="{{ route('contacts.index') }}" class="list-group-item list-group-item-action bg-light"><h4>Manage Contacts</a>
        <a href="{{ route('addnotices.index') }}" class="list-group-item list-group-item-action bg-light"><h4>Manage Notices</h4></a>
    
        <a href="{{ route('addservices.index') }}" class="list-group-item list-group-item-action bg-light"><h4>Manage Services</h4></a>
        <li role="separator" class="divider"></li>
        <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-light">Logout</a>
      </div>
    </div>
      </div>
