

<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
      <li class="has-dropdown"><a href="#">AAX</a>
      </li>
      <li class="divider"></li>
      <li class="has-dropdown"><a href="<?php echo base_url().Template.DS?>internship">Internship</a>
          <ul class="dropdown">
          <li class="has-dropdown"><a href="<?php echo base_url().Template.DS?>internship/applicants">Applicants</a></li>
          <li class="has-dropdown"><a href="<?php echo base_url().Template.DS?>internship/sponsors">Sponsors</a>
          <ul class="dropdown">
              <li><a href="#">Add New</a></li>
            </ul>

          </li>
        </ul>
    <!--
        <ul class="dropdown">
          <li class="has-dropdown"><a href="#">Dropdown Level 1a</a>
            <ul class="dropdown">
              <li><label>Dropdown Level 2 Label</label></li>
              <li><a href="#">Dropdown Level 2a</a></li>
              <li><a href="#">Dropdown Level 2b</a></li>
              <li><a href="#">Dropdown Level 2d</a></li>
              <li><a href="#">Dropdown Level 2e</a></li>
              <li><a href="#">Dropdown Level 2f</a></li>
            </ul>
          </li>
          <li><a href="#">Dropdown Level 1b</a></li>
          <li><a href="#">Dropdown Level 1c</a></li>
          <li class="divider"></li>
          <li><a href="#">Dropdown Level 1d</a></li>
          <li><a href="#">Dropdown Level 1e</a></li>
          <li><a href="#">Dropdown Level 1f</a></li>
          <li class="divider"></li>
          <li><a href="#">See all &rarr;</a></li>
        </ul>
        -->
      </li>
      <li class="divider"></li>
      <li class="has-dropdown"><a href="#">STS</a>
      </li>

      <li class="divider"></li>
      <li class="has-dropdown"><a href="#">Tickets</a>
        <ul class="dropdown">
          <li class="has-dropdown"><a href="#">Event</a>
            <ul class="dropdown">
              <li><a href="#">Add New</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-dropdown"><a href="#">Tickets</a>
            <ul class="dropdown">
              <li><a href="#">Add New</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>

          </li>
        </ul>
      </li>
      
    </ul>

    <!-- Right Nav Section -->
    <ul class="right">
      <li class="divider hide-for-small"></li>
      <li><a href="<?php echo base_url() ?>/backend/logout">Profile</a>

      </li>

      <li class="divider hide-for-small"></li>
      <li><a href="<?php echo base_url() ?>/backend/logout">Logout</a>

      </li>
      <li class="divider"></li>
    </ul>
  </section>
</nav>

