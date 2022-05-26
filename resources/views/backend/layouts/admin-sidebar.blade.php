@php
    $prefix=Request::route()->getPrefix();
    $route=Route::current()->getName();
@endphp
{{-- @dd($prefix); --}}

  <!-- Main Sidebar Container start -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('home')}}" class="brand-link">
      <img src="{{asset('public')}}/backend/dist/img/logo.png" alt="logo.png" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public')}}/backend/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->usertype}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
        {{-- dashboard for Donator --}}
        {{-- Donate Manage --}}
        @if(Auth::user()->usertype=='donator')
        <li class="nav-item has-treeview {{($prefix=='/donates')?'menu-open':''}} ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Donate Manage 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('donates.view')}} " class="nav-link {{($route=='donates.view')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p> Donate </p>
              </a>
            </li>
          </ul>
       </li>
       @endif
        {{-- dashboard for Admin --}}
        @if(Auth::user()->usertype=='admin')
        <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.all')}}" class="nav-link {{($route=='users.all')?'active':''}} ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.send.email')}}" class="nav-link {{($route=='users.send.email')?'active':''}} ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send Mail</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item has-treeview {{($prefix=='/profile')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Profile Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profile.user')}}" class="nav-link {{($route=='profile.user')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Profile</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('change.password')}}" class="nav-link {{($route=='change.password')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User Password Change</p>
                  </a>
                </li>
              </ul>
        </li>


        <li class="nav-item has-treeview {{($prefix=='/logos')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Logo Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logos.view')}} " class="nav-link {{($route=='logos.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>


            </ul>
        </li>
        <li class="nav-item has-treeview {{($prefix=='/sliders')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Slider Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sliders.view')}} " class="nav-link {{($route=='sliders.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item has-treeview {{($prefix=='/eventimes')?'menu-open':''}} ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
               Event Time Manage
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('eventimes.view')}} " class="nav-link {{($route=='eventimes.view')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p> Event Time</p>
              </a>
            </li>
          </ul>
      </li>
      <li class="nav-item has-treeview {{($prefix=='/timers')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               CountDownTimer Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('timers.view')}} " class="nav-link {{($route=='timers.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timer</p>
                </a>
              </li>
            </ul>
        </li>
     
        <li class="nav-item has-treeview {{($prefix=='/newsevents')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                News and Event Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('newsevents.view')}} " class="nav-link {{($route=='newsevents.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News and Event</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item has-treeview {{($prefix=='/services')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Service Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('servises.one.view')}} " class="nav-link {{($route=='servises.one.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service one</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('servises.two.view')}} " class="nav-link {{($route=='servises.two.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service two</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('servises.three.view')}} " class="nav-link {{($route=='servises.three.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service Three</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item has-treeview {{($prefix=='/news')?'menu-open':''}} ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Recent News Manage
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('news.one.view')}} " class="nav-link {{($route=='news.one.view')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>News one</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('news.two.view')}} " class="nav-link {{($route=='news.two.view')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>News two</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('news.three.view')}} " class="nav-link {{($route=='news.three.view')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>News Three</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('news.four.view')}} " class="nav-link {{($route=='news.four.view')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>News Four</p>
              </a>
            </li>
          </ul>
      </li>
        <li class="nav-item has-treeview {{($prefix=='/contacts')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Contact Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contacts.view')}} " class="nav-link {{($route=='contacts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('contact.us.view')}} " class="nav-link {{($route=='contact.us.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact Us View</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item has-treeview {{($prefix=='/about')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                About US Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('about.view')}} " class="nav-link {{($route=='about.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
            </ul>
        </li>
          <!-- Prayer Time Manage  -->
          <li class="nav-item has-treeview {{($prefix=='/prayers')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Prayer Time Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('prayers.view')}} " class="nav-link {{($route=='prayers.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Prayer Time </p>
                </a>
              </li>
            </ul>
        </li>
         <!-- Philosophy Time Manage  -->
         <li class="nav-item has-treeview {{($prefix=='/phylosophy')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Phylosophy Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('knowladges.view')}} " class="nav-link {{($route=='knowladges.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PhylosophyOne Knowladge </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('spiritualities.view')}} " class="nav-link {{($route=='spiritualities.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PhylosophyTwo Spirituality </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('communities.view')}} " class="nav-link {{($route=='communities.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PhylosophyThree Community </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('phylosophy.services.view')}} " class="nav-link {{($route=='phylosophy.services.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> PhylosophyFour Service </p>
                </a>
              </li>
            </ul>
        </li>
        <!-- school Manage -->
        <li class="nav-item has-treeview {{($prefix=='/schools')?'menu-open':''}} ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              school Manage 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('schools.view')}} " class="nav-link {{($route=='schools.view')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p> School </p>
              </a>
            </li>
          </ul>
        </li>
          <!-- Donate Manage  -->
        <li class="nav-item has-treeview {{($prefix=='/donates')?'menu-open':''}} ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Donate Manage 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('donates.view')}} " class="nav-link {{($route=='donates.view')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p> Donate </p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('banks.view')}} " class="nav-link {{($route=='banks.view')?'active':''}}">
                <i class="far fa-circle nav-icon"></i>
                <p> Bank info</p>
              </a>
            </li>
          </ul>
        </li>
           <!-- whatsApp Manage  -->
           <li class="nav-item has-treeview {{($prefix=='/whatsapp')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                WhatsApp Manage 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('whatsapp.view')}} " class="nav-link {{($route=='whatsapp.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> WhatsApp </p>
                </a>
              </li>
            </ul>
          </li>
 
        <li class="nav-item has-treeview {{($prefix=='/newsletter')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Newsletter Manage
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('subscriber.email.view')}} " class="nav-link {{($route=='subscriber.email.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subscriber Email</p>
                </a>
              </li>
            </ul>
        </li>
        @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <!-- Main Sidebar Container end -->
