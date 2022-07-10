@extends('layouts.admin_app')
@section('content')

@include('layouts.admin_topbar')

<div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="../index-2.html">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="dashboard">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
                  <ul class="nav collapse" id="dashboard">
                    <li class="nav-item"><a class="nav-link" href="../index-2.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../dashboard/analytics.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../dashboard/crm.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../dashboard/e-commerce.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E commerce</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../dashboard/project-management.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Management</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../dashboard/saas.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SaaS</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">App</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="calendar.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
                  </a><!-- parent pages--><a class="nav-link active" href="chat.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
                  </a>
                  <ul class="nav collapse" id="email">
                    <li class="nav-item"><a class="nav-link" href="email/inbox.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="email/email-detail.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="email/compose.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Events</span></div>
                  </a>
                  <ul class="nav collapse" id="events">
                    <li class="nav-item"><a class="nav-link" href="events/create-an-event.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an event</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="events/event-detail.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event detail</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="events/event-list.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event list</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E commerce</span></div>
                  </a>
                  <ul class="nav collapse" id="e-commerce">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="product">
                        <li class="nav-item"><a class="nav-link" href="e-commerce/product/product-list.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="e-commerce/product/product-grid.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product grid</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="e-commerce/product/product-details.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product details</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="orders">
                        <li class="nav-item"><a class="nav-link" href="e-commerce/orders/order-list.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order list</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="e-commerce/orders/order-details.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order details</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/customers.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/customer-details.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer details</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/shopping-cart.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping cart</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/checkout.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checkout</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/billing.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/invoice.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="kanban.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Social</span></div>
                  </a>
                  <ul class="nav collapse" id="social">
                    <li class="nav-item"><a class="nav-link" href="social/feed.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="social/activity-log.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="social/notifications.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="social/followers.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Pages</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="../pages/starter.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../pages/landing.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">Authentication</span></div>
                  </a>
                  <ul class="nav collapse" id="authentication">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#simple" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Simple</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="simple">
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/login.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/logout.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/register.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/forgot-password.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/confirm-mail.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/reset-password.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/simple/lock-screen.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="card">
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/login.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/logout.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/register.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/forgot-password.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/confirm-mail.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/reset-password.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/card/lock-screen.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Split</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="split">
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/login.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/logout.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/register.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/forgot-password.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/confirm-mail.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/reset-password.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reset password</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../pages/authentication/split/lock-screen.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/authentication/wizard.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../index.html#authentication-modal" data-bs-toggle="modal" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modal</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">User</span></div>
                  </a>
                  <ul class="nav collapse" id="user">
                    <li class="nav-item"><a class="nav-link" href="../pages/user/profile.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/user/settings.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tags"></span></span><span class="nav-link-text ps-1">Pricing</span></div>
                  </a>
                  <ul class="nav collapse" id="pricing">
                    <li class="nav-item"><a class="nav-link" href="../pages/pricing/pricing-default.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing default</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/pricing/pricing-alt.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing alt</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span></div>
                  </a>
                  <ul class="nav collapse" id="faq">
                    <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-basic.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq basic</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-alt.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq alt</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/faq/faq-accordion.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq accordion</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-exclamation-triangle"></span></span><span class="nav-link-text ps-1">Errors</span></div>
                  </a>
                  <ul class="nav collapse" id="errors">
                    <li class="nav-item"><a class="nav-link" href="../pages/errors/404.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">404</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/errors/500.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">500</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#miscellaneous" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="miscellaneous">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-thumbtack"></span></span><span class="nav-link-text ps-1">Miscellaneous</span></div>
                  </a>
                  <ul class="nav collapse" id="miscellaneous">
                    <li class="nav-item"><a class="nav-link" href="../pages/miscellaneous/associations.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Associations</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/miscellaneous/invite-people.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invite people</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../pages/miscellaneous/privacy-policy.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy policy</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Modules</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link dropdown-indicator" href="#forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-file-alt"></span></span><span class="nav-link-text ps-1">Forms</span></div>
                  </a>
                  <ul class="nav collapse" id="forms">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="basic">
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/form-control.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Form control</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/input-group.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input group</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/select.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Select</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/checks.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checks</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/range.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/basic/layout.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Layout</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="advance">
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/advance-select.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance select</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/date-picker.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Date picker</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/editor.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Editor</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/emoji-button.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Emoji button</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/file-uploader.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File uploader</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/forms/advance/rating.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rating</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/forms/floating-labels.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Floating labels</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/forms/wizard.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Wizard</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/forms/validation.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Validation</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Tables</span></div>
                  </a>
                  <ul class="nav collapse" id="tables">
                    <li class="nav-item"><a class="nav-link" href="../modules/tables/basic-tables.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Basic tables</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/tables/advance-tables.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Advance tables</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/tables/bulk-select.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bulk select</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">Charts</span></div>
                  </a>
                  <ul class="nav collapse" id="charts">
                    <li class="nav-item"><a class="nav-link" href="../modules/charts/chartjs.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chartjs</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#eCharts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ECharts</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="eCharts">
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/line-charts.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Line charts</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/bar-charts.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bar charts</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/candlestick-charts.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Candlestick charts</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/geo-map.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Geo map</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/scatter-charts.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scatter charts</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/pie-charts.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pie charts</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/radar-charts.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Radar charts</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/heatmap-charts.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heatmap charts</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/charts/echarts/how-to-use.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">How to use</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#icons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shapes"></span></span><span class="nav-link-text ps-1">Icons</span></div>
                  </a>
                  <ul class="nav collapse" id="icons">
                    <li class="nav-item"><a class="nav-link" href="../modules/icons/font-awesome.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Font awesome</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/icons/bootstrap-icons.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap icons</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/icons/feather.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feather</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/icons/material-icons.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Material icons</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#maps" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-map"></span></span><span class="nav-link-text ps-1">Maps</span></div>
                  </a>
                  <ul class="nav collapse" id="maps">
                    <li class="nav-item"><a class="nav-link" href="../modules/maps/google-map.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Google map</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/maps/leaflet-map.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Leaflet map</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Components</span></div>
                  </a>
                  <ul class="nav collapse" id="components">
                    <li class="nav-item"><a class="nav-link" href="../modules/components/accordion.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Accordion</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/alerts.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Alerts</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/anchor.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Anchor</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/animated-icons.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Animated icons</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/background.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/badges.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Badges</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/breadcrumbs.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Breadcrumbs</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/buttons.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Buttons</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/calendar.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Calendar</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/cards.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cards</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Carousel</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="carousel">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/carousel/bootstrap.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bootstrap</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/carousel/swiper.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Swiper</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/collapse.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Collapse</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/cookie-notice.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie notice</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/countup.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countup</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/draggable.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Draggable</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/dropdowns.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dropdowns</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/list-group.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List group</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/modals.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modals</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs &amp; Tabs</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="navs-_and_-Tabs">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/navs.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/navbar.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/vertical-navbar.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical navbar</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/top-navbar.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top navbar</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/combo-navbar.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo navbar</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/navs-and-tabs/tabs.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tabs</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/offcanvas.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Offcanvas</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pictures" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pictures</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="pictures">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/avatar.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Avatar</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/images.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Images</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/figures.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Figures</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/hoverbox.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hoverbox</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/pictures/lightbox.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lightbox</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/progress-bar.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Progress bar</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/placeholder.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Placeholder</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/pagination.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pagination</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/popovers.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Popovers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/scrollspy.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scrollspy</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/search.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Search</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/spinners.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spinners</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/timeline.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Timeline</span><span class="badge rounded-pill ms-2 badge-soft-success">New</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/toasts.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Toasts</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/tooltips.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tooltips</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/treeview.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Treeview</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/components/typed-text.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typed text</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#videos" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Videos</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="videos">
                        <li class="nav-item"><a class="nav-link" href="../modules/components/videos/embed.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Embed</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../modules/components/videos/plyr.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plyr</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text ps-1">Utilities</span></div>
                  </a>
                  <ul class="nav collapse" id="utilities">
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/borders.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Borders</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/clearfix.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Clearfix</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/colors.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colors</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/colored-links.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colored links</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/display.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Display</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/flex.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Flex</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/float.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Float</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/grid.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grid</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/overlayscrollbars.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Overlayscrollbars</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/position.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Position</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/spacing.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spacing</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/sizing.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sizing</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/stretched-link.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stretched link</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/text-truncation.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Text truncation</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/typography.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typography</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/vertical-align.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical align</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../modules/utilities/visibility.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visibility</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="../widgets.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">Widgets</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#multi-level" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-layer-group"></span></span><span class="nav-link-text ps-1">Multi level</span></div>
                  </a>
                  <ul class="nav collapse" id="multi-level">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level two</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="level-two">
                        <li class="nav-item"><a class="nav-link" href="../index.html#!.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 1</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../index.html#!.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 2</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-three" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level three</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="level-three">
                        <li class="nav-item"><a class="nav-link" href="../index.html#!.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 3</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-three">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 4</span></div>
                          </a><!-- more inner pages-->
                          <ul class="nav collapse" id="item-4">
                            <li class="nav-item"><a class="nav-link" href="../index.html#!.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 5</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../index.html#!.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span></div>
                              </a><!-- more inner pages-->
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#level-four" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Level four</span></div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse" id="level-four">
                        <li class="nav-item"><a class="nav-link" href="../index.html#!.html" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 6</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-four">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 7</span></div>
                          </a><!-- more inner pages-->
                          <ul class="nav collapse" id="item-7">
                            <li class="nav-item"><a class="nav-link" href="../index.html#!.html" data-bs-toggle="" aria-expanded="false">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 8</span></div>
                              </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#item-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="item-7">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 9</span></div>
                              </a><!-- more inner pages-->
                              <ul class="nav collapse" id="item-9">
                                <li class="nav-item"><a class="nav-link" href="../index.html#!.html" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 10</span></div>
                                  </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="../index.html#!.html" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Item 11</span></div>
                                  </a><!-- more inner pages-->
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Documentation</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="../documentation/getting-started.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Getting started</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wrench"></span></span><span class="nav-link-text ps-1">Customization</span></div>
                  </a>
                  <ul class="nav collapse" id="customization">
                    <li class="nav-item"><a class="nav-link" href="../documentation/customization/configuration.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Configuration</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/customization/styling.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Styling</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/customization/dark-mode.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dark mode</span><span class="badge rounded-pill ms-2 badge-soft-success">New</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../documentation/customization/plugin.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plugin</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="../documentation/gulp.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gulp"></span></span><span class="nav-link-text ps-1">Gulp</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../documentation/design-file.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Design file</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="../changelog.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text ps-1">Changelog</span></div>
                  </a>
                </li>
              </ul>
              <div class="settings mb-3">
                <div class="card alert p-0 shadow-none" role="alert">
                  <div class="btn-close-falcon-container">
                    <div class="btn-close-falcon" aria-label="Close" data-bs-dismiss="alert"></div>
                  </div>
                  <div class="card-body text-center"><img src="../assets/img/icons/spot-illustrations/navbar-vertical.png" alt="" width="80" />
                    <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a></p>
                    <div class="d-grid"><a class="btn btn-sm btn-purchase" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../index-2.html">
            <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/saas.html">SaaS</a></div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                  <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-md-5">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="kanban.html">Kanban</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="email/compose.html">Compose</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="events/event-list.html">Event list</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="social/followers.html">Followers</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/invoice.html">Invoice</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                  <div class="card navbar-card-pages shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/user/settings.html">Settings</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/pricing/pricing-alt.html">Pricing alt</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/errors/500.html">500</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/landing.html">Landing</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                  <div class="card navbar-card-components shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/bootstrap.html">Bootstrap carousel</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/swiper.html">Swiper</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/vertical-navbar.html">Vertical navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/top-navbar.html">Top navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/combo-navbar.html">Combo navbar</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/scrollspy.html">Scrollspy</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/timeline.html">Timeline<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/plyr.html">Plyr</a></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/validation.html">Validation</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/bulk-select.html">Bulk select</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/chartjs.html">Chartjs</a>
                            <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/how-to-use.html">How to use</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/overlayscrollbars.html">Overlayscrollbars</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/typography.html">Typography</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column pt-xxl-1">
                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/material-icons.html">Material icons</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/leaflet-map.html">Leaflet map</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/styling.html">Styling</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/dark-mode.html">Dark mode<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../changelog.html">Changelog</a></div>
                </div>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
            </li>
            <li class="nav-item d-none d-sm-block">
              <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                  <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                      </div>
                      <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                    </div>
                  </div>
                  <div class="scrollbar-overlay" style="max-height:19rem">
                    <div class="list-group list-group-flush fw-normal fs--1">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title border-bottom">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img class="rounded-circle" src="../assets/img/logos/oxford.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="border-bottom-0 notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-xl me-3">
                              <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center border-top"><a class="card-link d-block" href="social/notifications.html">View all</a></div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                  <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                  <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                  <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                </svg></a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                <div class="card shadow-none">
                  <div class="scrollbar-overlay nine-dots-dropdown">
                    <div class="card-body px-3">
                      <div class="row text-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../pages/user/profile.html" target="_blank">
                            <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" /></div>
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Themewagon</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Mailbluster</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                          </a></div>
                        <div class="col-12">
                          <hr class="my-3 mx-n3 bg-200" />
                        </div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Facebook</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Instagram</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Deviantart</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="events/event-detail.html" target="_blank">
                            <div class="avatar avatar-2xl">
                              <div class="avatar-name rounded-circle bg-soft-primary text-primary"><span class="fs-2">E</span></div>
                            </div>
                            <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                          </a></div>
                        <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="../pages/user/profile.html">Profile &amp; account</a>
                  <a class="dropdown-item" href="#!">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../pages/user/settings.html">Settings</a>
                  <a class="dropdown-item" href="../pages/authentication/card/logout.html">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../index-2.html">
              <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                  <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
                    <div class="btn-close-falcon" aria-label="Close"></div>
                  </div>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1 title">Most popular products</div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="../assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>
                      <hr class="bg-200 dark__bg-900" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="../pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Emma Watson</h6>
                            <p class="fs--2 mb-0 d-flex">Google</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="text-center mt-n3">
                      <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
              </li>
              <li class="nav-item d-none d-sm-block">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../assets/img/logos/oxford.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="social/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                  <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                      <div class="card-body px-3">
                        <div class="row text-center gx-0 gy-0">
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../pages/user/profile.html" target="_blank">
                              <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" /></div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Themewagon</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Mailbluster</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                            </a></div>
                          <div class="col-12">
                            <hr class="my-3 mx-n3 bg-200" />
                          </div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Facebook</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Instagram</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Pinterest</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Deviantart</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="events/event-detail.html" target="_blank">
                              <div class="avatar avatar-2xl">
                                <div class="avatar-name rounded-circle bg-soft-primary text-primary"><span class="fs-2">E</span></div>
                              </div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                            </a></div>
                          <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="../pages/authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../index-2.html">
              <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
            </a>
            <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
              <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../index-2.html">Default</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/crm.html">CRM</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="../dashboard/saas.html">SaaS</a></div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-5">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="email/compose.html">Compose</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="events/event-list.html">Event list</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="social/followers.html">Followers</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/invoice.html">Invoice</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../index.html#authentication-modal" data-bs-toggle="modal">Modal</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/user/settings.html">Settings</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/pricing/pricing-alt.html">Pricing alt</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/errors/500.html">500</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/landing.html">Landing</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="../assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cards.html">Cards</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/bootstrap.html">Bootstrap carousel</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/swiper.html">Swiper</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/vertical-navbar.html">Vertical navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/top-navbar.html">Top navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/combo-navbar.html">Combo navbar</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/offcanvas.html">Offcanvas</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/progress-bar.html">Progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/placeholder.html">Placeholder</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/scrollspy.html">Scrollspy</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/timeline.html">Timeline<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/treeview.html">Treeview</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/plyr.html">Plyr</a></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/bulk-select.html">Bulk select</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/chartjs.html">Chartjs</a>
                              <p class="nav-link text-700 mb-0 fw-bold">ECharts</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/line-charts.html">Line charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/bar-charts.html">Bar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/candlestick-charts.html">Candlestick charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/geo-map.html">Geo map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/scatter-charts.html">Scatter charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/pie-charts.html">Pie charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/radar-charts.html">Radar charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/heatmap-charts.html">Heatmap charts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts/how-to-use.html">How to use</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/overlayscrollbars.html">Overlayscrollbars</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/typography.html">Typography</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column pt-xxl-1">
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/material-icons.html">Material icons</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/leaflet-map.html">Leaflet map</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/styling.html">Styling</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/dark-mode.html">Dark mode<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../changelog.html">Changelog</a></div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
              </li>
              <li class="nav-item d-none d-sm-block">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="../assets/img/icons/weather-sm.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../assets/img/logos/oxford.png" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                            </div>
                          </a>
                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="social/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
                  <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                      <div class="card-body px-3">
                        <div class="row text-center gx-0 gy-0">
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="../pages/user/profile.html" target="_blank">
                              <div class="avatar avatar-2xl"> <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" /></div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://themewagon.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/themewagon.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Themewagon</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="https://mailbluster.com/" target="_blank"><img class="rounded" src="../assets/img/nav-icons/mailbluster.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Mailbluster</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/google.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/spotify.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/steam.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/github-light.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/discord.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/xbox.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/trello.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/hp.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                            </a></div>
                          <div class="col-12">
                            <hr class="my-3 mx-n3 bg-200" />
                          </div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/linkedin.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/twitter.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/facebook.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Facebook</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/instagram.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Instagram</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/pinterest.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Pinterest</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/slack.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#!" target="_blank"><img class="rounded" src="../assets/img/nav-icons/deviantart.png" alt="" width="40" height="40" />
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Deviantart</p>
                            </a></div>
                          <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="events/event-detail.html" target="_blank">
                              <div class="avatar avatar-2xl">
                                <div class="avatar-name rounded-circle bg-soft-primary text-primary"><span class="fs-2">E</span></div>
                              </div>
                              <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                            </a></div>
                          <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="../assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="../pages/authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
          <div class="card card-chat overflow-hidden">
            <div class="card-body d-flex p-0 h-100">
              <div class="chat-sidebar">
                <div class="contacts-list scrollbar-overlay">
                  <div class="nav nav-tabs border-0 flex-column" role="tablist" aria-orientation="vertical">
                    <div class="hover-actions-trigger chat-contact nav-item active" role="tab" id="chat-link-0" data-bs-toggle="tab" data-bs-target="#chat-0" aria-controls="chat-0" aria-selected="true">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl status-online">
                          <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">Antony Hopkins</h6><span class="message-time fs--2">Tue</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">Antony
                              sent
                              6 photos</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-1" data-bs-toggle="tab" data-bs-target="#chat-1" aria-controls="chat-1" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl">
                          <div class="rounded-circle overflow-hidden h-100 d-flex">
                            <div class="w-50 border-end"><img src="../assets/img/team/1.jpg" alt="" /></div>
                            <div class="w-50 d-flex flex-column"><img class="h-50 border-bottom" src="../assets/img/team/2.jpg" alt="" /><img class="h-50" src="../assets/img/team/3.jpg" alt="" /></div>
                          </div>
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">Avengers</h6><span class="message-time fs--2">Sun</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">Bucky: <a href="#!" class="text-primary">@Emma</a> What do you think about the plan?</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"><span class="fas fa-check text-success" data-fa-transform="shrink-5 down-4"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-2" data-bs-toggle="tab" data-bs-target="#chat-2" aria-controls="chat-2" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl">
                          <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">Emma Watson</h6><span class="message-time fs--2">Sun</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">You: 🙂</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"><span class="fas fa-check text-success" data-fa-transform="shrink-5 down-4"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item unread-message" role="tab" id="chat-link-3" data-bs-toggle="tab" data-bs-target="#chat-3" aria-controls="chat-3" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl status-online">
                          <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">Anna Karinina</h6><span class="message-time fs--2">Sat</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">What are you doing?</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item unread-message" role="tab" id="chat-link-4" data-bs-toggle="tab" data-bs-target="#chat-4" aria-controls="chat-4" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl status-online">
                          <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">John Lee</h6><span class="message-time fs--2">Mon</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">How are you?</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-5" data-bs-toggle="tab" data-bs-target="#chat-5" aria-controls="chat-5" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl status-online">
                          <div class="avatar-name rounded-circle"><span>BR</span></div>
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">Bucky Robert</h6><span class="message-time fs--2">Wed</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">You: 👋</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"><span class="fas fa-check text-400" data-fa-transform="shrink-5 down-4"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-6" data-bs-toggle="tab" data-bs-target="#chat-6" aria-controls="chat-6" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl status-online">
                          <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">John Bradley</h6><span class="message-time fs--2">Fri</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">Hello!</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-7" data-bs-toggle="tab" data-bs-target="#chat-7" aria-controls="chat-7" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl status-online">
                          <img class="rounded-circle" src="../assets/img/team/11.jpg" alt="" />
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">Rory McCann</h6><span class="message-time fs--2">Sun</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">You: 😮</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"><span class="fas fa-check text-400" data-fa-transform="shrink-5 down-4"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-8" data-bs-toggle="tab" data-bs-target="#chat-8" aria-controls="chat-8" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl">
                          <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">Joe Bempsie</h6><span class="message-time fs--2">Wed</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">Hello!</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-9" data-bs-toggle="tab" data-bs-target="#chat-9" aria-controls="chat-9" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl">
                          <img class="rounded-circle" src="../assets/img/team/22.jpg" alt="" />
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">Diana Rigg</h6><span class="message-time fs--2">Mon</span>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">You: Yes, in an organization stature, this is a must. Besides, we need to quickly establish all other professional appearances, e.g., having a website where members’ profile will be displayed along with additional organizational information. Providing services to existing members is more important than attracting new members at this moment, in my opinion..</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"><span class="fas fa-check text-400" data-fa-transform="shrink-5 down-4"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="hover-actions-trigger chat-contact nav-item" role="tab" id="chat-link-10" data-bs-toggle="tab" data-bs-target="#chat-10" aria-controls="chat-10" aria-selected="false">
                      <div class="d-md-none d-lg-block">
                        <div class="dropdown dropdown-active-trigger dropdown-chat"><button class="hover-actions btn btn-link btn-sm text-400 dropdown-caret-none dropdown-toggle end-0 fs-0 mt-4 me-1 z-index-1 pb-2 mb-n2" type="button" data-boundary="viewport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog" data-fa-transform="shrink-3 down-4"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2 rounded-2"><a class="dropdown-item" href="#!">Mute</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Mark as Unread</a><a class="dropdown-item" href="#!">Something's Wrong</a><a class="dropdown-item" href="#!">Ignore Messsages</a><a class="dropdown-item" href="#!">Block Messages</a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-xl">
                          <img class="rounded-circle" src="../assets/img/team/23.jpg" alt="" />
                        </div>
                        <div class="flex-1 chat-contact-body ms-2 d-md-none d-lg-block">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-0 chat-contact-title">Gemma Whelan</h6>
                          </div>
                          <div class="min-w-0">
                            <div class="chat-contact-content pe-3">Say hi to your new friend</div>
                            <div class="position-absolute bottom-0 end-0 hover-hide"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <form class="contacts-search-wrapper">
                  <div class="form-group mb-0 position-relative d-md-none d-lg-block w-100 h-100"><input class="form-control form-control-sm chat-contacts-search border-0 h-100" type="text" placeholder="Search contacts ..." /><span class="fas fa-search contacts-search-icon"></span></div><button class="btn btn-sm btn-transparent d-none d-md-inline-block d-lg-none"><span class="fas fa-search fs--1"></span></button>
                </form>
              </div>
              <div class="tab-content card-chat-content">
                <div class="tab-pane card-chat-pane active" id="chat-0" role="tabpanel" aria-labelledby="chat-link-0">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">Antony Hopkins</h5>
                          <div class="fs--2 text-400">Active On Chat</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="0">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl status-online">
                            <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Antony Hopkins</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-0"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-0">
                          <div class="title" id="shared-media-title-0"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-0" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-0">Shared media</a></div>
                          <div class="collapse" id="shared-media-0" aria-labelledby="shared-media-title-0" data-parent="#others-info-0">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl status-online me-3">
                          <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Antony Hopkins</a></h6>
                          <p class="mb-0">You friends with Antony Hopkins. Say hi to start the conversation</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">Yes, in an organization stature, this is a must. Besides, we need to quickly establish all other professional appearances, e.g., having a website where members’ profile will be displayed along with additional organizational information. Providing services to existing members is more important than attracting new members at this moment, in my opinion..</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">What are you doing?</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">
                                <p class="mb-0">I took this pic </p>
                                <a href="../assets/img/chat/1.jpg" data-gallery="gallery-3">
                                  <img class="rounded" src="../assets/img/chat/1.jpg" alt="" width="150">
                                </a>
                              </div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2 text-success"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Nothing!</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2 text-success"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 6, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">How are you?</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Fine</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check-double ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 7, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="chat-message chat-gallery">
                                <div class="row mx-n1">
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/7.jpg" data-gallery="gallery-1"><img src="../assets/img/chat/7.jpg" alt="" class="img-fluid rounded mb-2"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/8.jpg" data-gallery="gallery-1"><img src="../assets/img/chat/8.jpg" alt="" class="img-fluid rounded mb-2"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/9.jpg" data-gallery="gallery-1"><img src="../assets/img/chat/9.jpg" alt="" class="img-fluid rounded mb-2"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/10.jpg" data-gallery="gallery-1"><img src="../assets/img/chat/10.jpg" alt="" class="img-fluid rounded mb-2 mb-lg-0"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/11.jpg" data-gallery="gallery-1"><img src="../assets/img/chat/11.jpg" alt="" class="img-fluid rounded mb-2 mb-lg-0"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/12.jpg" data-gallery="gallery-1"><img src="../assets/img/chat/12.jpg" alt="" class="img-fluid rounded"></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">I took some excellent images yesterday.</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 8, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Give me the images.</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am</div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message chat-gallery">
                                <div class="row mx-n1">
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/1.jpg" data-gallery="gallery-2"><img src="../assets/img/chat/1.jpg" alt="" class="img-fluid rounded mb-2"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/2.jpg" data-gallery="gallery-2"><img src="../assets/img/chat/2.jpg" alt="" class="img-fluid rounded mb-2"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/3.jpg" data-gallery="gallery-2"><img src="../assets/img/chat/3.jpg" alt="" class="img-fluid rounded mb-2"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/4.jpg" data-gallery="gallery-2"><img src="../assets/img/chat/4.jpg" alt="" class="img-fluid rounded mb-2 mb-lg-0"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/5.jpg" data-gallery="gallery-2"><img src="../assets/img/chat/5.jpg" alt="" class="img-fluid rounded mb-2 mb-lg-0"></a>
                                  </div>
                                  <div class="col-6 col-md-4 px-1" style="min-width: 50px;">
                                    <a href="../assets/img/chat/6.jpg" data-gallery="gallery-2"><img src="../assets/img/chat/6.jpg" alt="" class="img-fluid rounded"></a>
                                  </div>
                                </div>
                              </div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-1" role="tabpanel" aria-labelledby="chat-link-1">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">Avengers</h5>
                          <div class="fs--2 text-400">Active 7h ago</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="1" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="1" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="1" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="1">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl">
                            <div class="rounded-circle overflow-hidden h-100 d-flex">
                              <div class="w-50 border-end"><img src="../assets/img/team/1.jpg" alt="" /></div>
                              <div class="w-50 d-flex flex-column"><img class="h-50 border-bottom" src="../assets/img/team/2.jpg" alt="" /><img class="h-50" src="../assets/img/team/3.jpg" alt="" /></div>
                            </div>
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Avengers</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-1"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-1">
                          <div class="title" id="member-title-1"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#members-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="members-1">Members</a></div>
                          <div class="collapse" id="members-1" aria-labelledby="member-title-1" data-parent="#others-info-1">
                            <div class="d-flex align-items-center py-2 hover-actions-trigger">
                              <div class="avatar avatar-xl status-online">
                                <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                              </div>
                              <div class="flex-1 ms-2 d-flex justify-content-between">
                                <div>
                                  <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Antony Hopkins</a></h6>
                                  <div class="fs--2 text-400">Admin</div>
                                </div>
                                <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-0"><a class="dropdown-item" href="#!">Message</a><a class="dropdown-item" href="#!">View Profile</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-center py-2 hover-actions-trigger">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                              </div>
                              <div class="flex-1 ms-2 d-flex justify-content-between">
                                <div>
                                  <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Emma Watson</a></h6>
                                  <div class="fs--2 text-400">Member</div>
                                </div>
                                <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-1"><a class="dropdown-item" href="#!">Message</a><a class="dropdown-item" href="#!">View Profile</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-center py-2 hover-actions-trigger">
                              <div class="avatar avatar-xl status-online">
                                <img class="rounded-circle" src="../assets/img/team/3.jpg" alt="" />
                              </div>
                              <div class="flex-1 ms-2 d-flex justify-content-between">
                                <div>
                                  <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Anna Karinina</a></h6>
                                  <div class="fs--2 text-400">Member</div>
                                </div>
                                <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-2"><a class="dropdown-item" href="#!">Message</a><a class="dropdown-item" href="#!">View Profile</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-center py-2 hover-actions-trigger">
                              <div class="avatar avatar-xl status-online">
                                <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                              </div>
                              <div class="flex-1 ms-2 d-flex justify-content-between">
                                <div>
                                  <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">John Lee</a></h6>
                                  <div class="fs--2 text-400">Member</div>
                                </div>
                                <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-3"><a class="dropdown-item" href="#!">Message</a><a class="dropdown-item" href="#!">View Profile</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-center py-2 hover-actions-trigger">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />
                              </div>
                              <div class="flex-1 ms-2 d-flex justify-content-between">
                                <div>
                                  <h6 class="mb-0"><a class="text-700" href="../pages/user/profile.html">Bucky Robert</a></h6>
                                  <div class="fs--2 text-400">Member</div>
                                </div>
                                <div class="dropdown hover-actions position-relative dropdown-active-trigger z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none" type="button" id="user-settings-dropdown-4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2 border" aria-labelledby="user-settings-dropdown-4"><a class="dropdown-item" href="#!">Message</a><a class="dropdown-item" href="#!">View Profile</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="title" id="shared-media-title-1"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-1">Shared media</a></div>
                          <div class="collapse" id="shared-media-1" aria-labelledby="shared-media-title-1" data-parent="#others-info-1">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl me-3">
                          <div class="rounded-circle overflow-hidden h-100 d-flex">
                            <div class="w-50 border-end"><img src="../assets/img/team/1.jpg" alt="" /></div>
                            <div class="w-50 d-flex flex-column"><img class="h-50 border-bottom" src="../assets/img/team/2.jpg" alt="" /><img class="h-50" src="../assets/img/team/3.jpg" alt="" /></div>
                          </div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Avengers</a></h6>
                          <p class="mb-0">You are a member of Avengers. Say hi to start conversation to the group.</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">In an organisation stature, this is a must. Besides, we need to quickly establish all other professional appearances, e.g. having a website where members’ profile will be displayed along with other organisational information. Providing services to existing members is more important than attracting new members at this moment, in my opinion.</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Anna</span><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Your are right 👍</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2 text-success"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/2.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">We should divide the tasks among all other members.</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Antony</span><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">I will make a list of all the tasks.</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span class="fw-semi-bold me-2">John</span><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 7, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">I can help you to do this.</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2 text-success"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">It will be a great opportunity if I can contribute to this task 😊</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Emma</span><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">Wow, it will be great!</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Bucky</span><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2"><a href="#!" class="text-primary">@Emma</a> What do you think about the plan?</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span class="fw-semi-bold me-2">Bucky</span><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-2" role="tabpanel" aria-labelledby="chat-link-2">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">Emma Watson</h5>
                          <div class="fs--2 text-400">Active 7h ago</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="2" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="2" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="2" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="2">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Emma Watson</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-2"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-2">
                          <div class="title" id="shared-media-title-2"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-2" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-2">Shared media</a></div>
                          <div class="collapse" id="shared-media-2" aria-labelledby="shared-media-title-2" data-parent="#others-info-2">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="../assets/img/team/1.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Emma Watson</a></h6>
                          <p class="mb-0">You friends with Emma Watson. Say hi to start the conversation</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Hello</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2 text-success"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">🙂</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2 text-success"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-3" role="tabpanel" aria-labelledby="chat-link-3">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">Anna Karinina</h5>
                          <div class="fs--2 text-400">Active On Chat</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="3" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="3" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="3" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="3">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl status-online">
                            <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Anna Karinina</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-3"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-3">
                          <div class="title" id="shared-media-title-3"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-3" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-3">Shared media</a></div>
                          <div class="collapse" id="shared-media-3" aria-labelledby="shared-media-title-3" data-parent="#others-info-3">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl status-online me-3">
                          <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Anna Karinina</a></h6>
                          <p class="mb-0">You friends with Anna Karinina. Say hi to start the conversation</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Hello</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/13.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">What are you doing?</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-4" role="tabpanel" aria-labelledby="chat-link-4">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">John Lee</h5>
                          <div class="fs--2 text-400">Active On Chat</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="4" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="4" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="4" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="4">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl status-online">
                            <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">John Lee</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-4"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-4">
                          <div class="title" id="shared-media-title-4"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-4">Shared media</a></div>
                          <div class="collapse" id="shared-media-4" aria-labelledby="shared-media-title-4" data-parent="#others-info-4">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl status-online me-3">
                          <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">John Lee</a></h6>
                          <p class="mb-0">You friends with John Lee. Say hi to start the conversation</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">What's Up!</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Hey!</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/4.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">How are you?</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-5" role="tabpanel" aria-labelledby="chat-link-5">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">Bucky Robert</h5>
                          <div class="fs--2 text-400">Active On Chat</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="5" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="5" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="5" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="5">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl status-online">
                            <div class="avatar-name rounded-circle"><span>BR</span></div>
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Bucky Robert</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-5"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-5">
                          <div class="title" id="shared-media-title-5"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-5">Shared media</a></div>
                          <div class="collapse" id="shared-media-5" aria-labelledby="shared-media-title-5" data-parent="#others-info-5">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl status-online me-3">
                          <div class="avatar-name rounded-circle"><span>BR</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Bucky Robert</a></h6>
                          <p class="mb-0">You friends with Bucky Robert. Say hi to start the conversation</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/5.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">What's Up!</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Hey!</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">👋</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-6" role="tabpanel" aria-labelledby="chat-link-6">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">John Bradley</h5>
                          <div class="fs--2 text-400">Active On Chat</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="6" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="6" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="6" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="6">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl status-online">
                            <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">John Bradley</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-6"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-6">
                          <div class="title" id="shared-media-title-6"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-6" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-6">Shared media</a></div>
                          <div class="collapse" id="shared-media-6" aria-labelledby="shared-media-title-6" data-parent="#others-info-6">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl status-online me-3">
                          <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">John Bradley</a></h6>
                          <p class="mb-0">You friends with John Bradley. Say hi to start the conversation</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">What's Up!</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Hey!</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/10.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">Hello!</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-7" role="tabpanel" aria-labelledby="chat-link-7">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">Rory McCann</h5>
                          <div class="fs--2 text-400">Active On Chat</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="7" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="7" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="7" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="7">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl status-online">
                            <img class="rounded-circle" src="../assets/img/team/11.jpg" alt="" />
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Rory McCann</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-7"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-7">
                          <div class="title" id="shared-media-title-7"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-7">Shared media</a></div>
                          <div class="collapse" id="shared-media-7" aria-labelledby="shared-media-title-7" data-parent="#others-info-7">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl status-online me-3">
                          <img class="rounded-circle" src="../assets/img/team/11.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Rory McCann</a></h6>
                          <p class="mb-0">You friends with Rory McCann. Say hi to start the conversation</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/11.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">I got my visa</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/11.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">Let's have fun</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">😮</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-8" role="tabpanel" aria-labelledby="chat-link-8">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">Joe Bempsie</h5>
                          <div class="fs--2 text-400">Active 7h ago</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="8" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="8" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="8" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="8">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Joe Bempsie</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-8" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-8"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-8">
                          <div class="title" id="shared-media-title-8"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-8" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-8">Shared media</a></div>
                          <div class="collapse" id="shared-media-8" aria-labelledby="shared-media-title-8" data-parent="#others-info-8">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Joe Bempsie</a></h6>
                          <p class="mb-0">You friends with Joe Bempsie. Say hi to start the conversation</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">What's Up!</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Hey!</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">Hello!</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-9" role="tabpanel" aria-labelledby="chat-link-9">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">Diana Rigg</h5>
                          <div class="fs--2 text-400">Active 7h ago</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="9" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="9" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="9" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="9">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../assets/img/team/22.jpg" alt="" />
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Diana Rigg</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-9" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-9"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-9">
                          <div class="title" id="shared-media-title-9"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-9">Shared media</a></div>
                          <div class="collapse" id="shared-media-9" aria-labelledby="shared-media-title-9" data-parent="#others-info-9">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="../assets/img/team/22.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Diana Rigg</a></h6>
                          <p class="mb-0">You friends with Diana Rigg. Say hi to start the conversation</p>
                        </div>
                      </div>
                      <div class="text-center fs--2 text-500"><span>May 5, 2019, 11:54 am</span></div>
                      <div class="d-flex p-3">
                        <div class="avatar avatar-l me-2">
                          <img class="rounded-circle" src="../assets/img/team/22.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <div class="w-xxl-75">
                            <div class="hover-actions-trigger d-flex align-items-center">
                              <div class="chat-message bg-200 p-2 rounded-2">What's Up!</div>
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 ms-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                            </div>
                            <div class="text-400 fs--2"><span>11:54 am</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Hey!</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex p-3">
                        <div class="flex-1 d-flex justify-content-end">
                          <div class="w-100 w-xxl-75">
                            <div class="hover-actions-trigger d-flex flex-end-center">
                              <ul class="hover-actions position-relative list-inline mb-0 text-400 me-2">
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><span class="fas fa-share"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><span class="fas fa-archive"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></a></li>
                                <li class="list-inline-item"><a class="chat-option" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span class="fas fa-trash-alt"></span></a></li>
                              </ul>
                              <div class="bg-primary text-white p-2 rounded-2 chat-message light">Yes, in an organization stature, this is a must. Besides, we need to quickly establish all other professional appearances, e.g., having a website where members’ profile will be displayed along with additional organizational information. Providing services to existing members is more important than attracting new members at this moment, in my opinion..</div>
                            </div>
                            <div class="text-400 fs--2 text-end">11:54 am<span class="fas fa-check ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane card-chat-pane" id="chat-10" role="tabpanel" aria-labelledby="chat-link-10">
                  <div class="chat-content-header">
                    <div class="row flex-between-center">
                      <div class="col-6 col-sm-8 d-flex align-items-center"><a class="pe-3 text-700 d-md-none contacts-list-show" href="#!">
                          <div class="fas fa-chevron-left"></div>
                        </a>
                        <div class="min-w-0">
                          <h5 class="mb-0 text-truncate fs-0">Gemma Whelan</h5>
                          <div class="fs--2 text-400">Active 7h ago</div>
                        </div>
                      </div>
                      <div class="col-auto"><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="10" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Call"><span class="fas fa-phone"></span></button><button class="btn btn-sm btn-falcon-primary me-2" type="button" data-index="10" data-bs-toggle="tooltip" data-bs-placement="top" title="Start a Video Call"><span class="fas fa-video"></span></button><button class="btn btn-sm btn-falcon-primary btn-info" type="button" data-index="10" data-bs-toggle="tooltip" data-bs-placement="top" title="Conversation Information"><span class="fas fa-info"></span></button></div>
                    </div>
                  </div>
                  <div class="chat-content-body" style="display: inherit;">
                    <div class="conversation-info" data-index="10">
                      <div class="h-100 overflow-auto scrollbar">
                        <div class="d-flex position-relative align-items-center p-3 border-bottom">
                          <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="../assets/img/team/23.jpg" alt="" />
                          </div>
                          <div class="flex-1 ms-2 d-flex flex-between-center">
                            <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Gemma Whelan</a></h6>
                            <div class="dropdown z-index-1"><button class="btn btn-link btn-sm text-400 dropdown-toggle dropdown-caret-none me-n3" type="button" id="profile-dropdown-10" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cog"></span></button>
                              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="profile-dropdown-10"><a class="dropdown-item" href="#!">Mute</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="px-3 pt-2">
                          <div class="nav flex-column font-sans-serif fw-medium"><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-search me-1" data-fa-transform="shrink-1 down-3"></span></span>Search in Conversation</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-pencil-alt me-1" data-fa-transform="shrink-1"></span></span>Edit Nicknames</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-palette me-1" data-fa-transform="shrink-1"></span></span><span>Change Color</span></a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-thumbs-up me-1" data-fa-transform="shrink-1"></span></span>Change Emoji</a><a class="nav-link d-flex align-items-center py-1 px-0 text-600" href="#!"><span class="conversation-info-icon"><span class="fas fa-bell me-1" data-fa-transform="shrink-1"></span></span>Notifications</a></div>
                        </div>
                        <hr class="my-2" />
                        <div class="px-3" id="others-info-10">
                          <div class="title" id="shared-media-title-10"><a class="btn btn-link btn-accordion hover-text-decoration-none dropdown-indicator" href="#shared-media-10" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shared-media-10">Shared media</a></div>
                          <div class="collapse" id="shared-media-10" aria-labelledby="shared-media-title-10" data-parent="#others-info-10">
                            <div class="row mx-n1">
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/1.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/1.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"><a href="../assets/img/chat/2.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/2.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/3.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/3.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/4.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/4.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/5.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/5.jpg" alt="" /></a></div>
                              <div class="col-6 col-md-4 px-1"> <a href="../assets/img/chat/6.jpg" data-gallery="images-1"><img class="img-fluid rounded-1 mb-2" src="../assets/img/chat/6.jpg" alt="" /></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="chat-content-scroll-area scrollbar">
                      <div class="d-flex position-relative p-3 border-bottom mb-3 align-items-center">
                        <div class="avatar avatar-2xl me-3">
                          <img class="rounded-circle" src="../assets/img/team/23.jpg" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0"><a class="text-decoration-none stretched-link text-700" href="../pages/user/profile.html">Gemma Whelan</a></h6>
                          <p class="mb-0">You friends with Gemma Whelan. Say hi to start the conversation</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <form class="chat-editor-area">
                  <div class="emojiarea-editor outline-none scrollbar" contenteditable="true"></div><input class="d-none" type="file" id="chat-file-upload" /><label class="chat-file-upload cursor-pointer" for="chat-file-upload"><span class="fas fa-paperclip"></span></label>
                  <div class="btn btn-link emoji-icon" data-emoji-button="data-emoji-button"><span class="far fa-laugh-beam"></span></div><button class="btn btn-sm btn-send" type="submit">Send</button>
                </form>
              </div>
            </div>
          </div>

          @endsection