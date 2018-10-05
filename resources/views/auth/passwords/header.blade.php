 <header class="header mb-0" role="banner">
            <div class="header__wrapper">
               <section class="header__menu">         
                  <div class="header__main">
                     <a href="/" class="header__logo">
                     <img src="{{ asset('imgs/logo.png') }}" width="160" class="header__logo-pic header__logo-pic--png" alt="Logo">
                     <img src="{{ asset('imgs/logo-white.svg') }}" width="160" class="header__logo-pic header__logo-pic--svg" alt="Logo">
                     </a>
                     <div class="header__search-box">
                        <div id="header__searchBoxInputWrapper" class="header__searchBoxInputWrapper">
                           <button id="btn-quicksearch-reset" class="header__searchBoxBtn header__searchBoxBtn--reset" disabled="">
                           <span class="icon icon-cross2"></span>
                           </button>
                           <input type="search" id="quicksearch" class="header__searchBoxInput search-field ui-autocomplete-input" value="" placeholder="Aircraft registration, photo location, photographer" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
                           <button id="btn-quicksearch-search" class="header__searchBoxBtn header__searchBoxBtn--search">
                              <span class="quicksearch-loader">
                                 <div class="spinner__spin" role="progressbar" style="position: absolute; width: 0px; z-index: 2000000000; left: 50%; top: 50%;">
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-0-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(0deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-1-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(36deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-2-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(72deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-3-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(108deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-4-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(144deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-5-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(180deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-6-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(216deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-7-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(252deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-8-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(288deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                    <div style="position: absolute; top: 0px; opacity: 0.25; animation: opacity-60-25-9-10 1s linear infinite;">
                                       <div style="position: absolute; width: 5px; height: 1.5px; background: rgb(40, 40, 40); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center 0px; transform: rotate(324deg) translate(4px, 0px); border-radius: 0px;"></div>
                                    </div>
                                 </div>
                              </span>
                              <span class="icon icon-search quicksearch-icon"></span>
                           </button>
                           <div id="quicksearch-dropdown" class="search-list-wrapper" style="max-height: 295px;">
                              <ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul>
                           </div>
                        </div>
                     </div>
                     <div class="header__account">
					 @if (Route::has('login'))
						@if (!Auth::guest())							
							                     
							<li class="dropdown">
								<a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown" role="button" aria-expanded="false">
									<i class="fa fa-user"></i>
									{{ Auth::user()->name }} 
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">								
									
									<li>
										<a href="{{ route('logout') }}"	onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											<i class="fa fa-sign-out"></i>{{trans ('global.sign_out') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>													
								</ul>
							</li>   
						@else
							
							<div id="header-logged-out" class="header__logged-out ">
							   <a href="#" id="openLogin" class="btn btn--inline btn--transparent btn--text-white" >
							   <span>Log in</span>
							   </a>
							  
							  <a href="/register" class="btn btn--picton-blue btn--signup" role="button">
								<span>Sign up</span>
							  </a>
							  
							</div>
							
						@endif
										
					 @endif
                        
                        
                     </div>
                  </div>
               </section>
            </div>
         </header>

       