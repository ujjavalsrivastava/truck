<!--begin::Logo-->
<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="index.html">
								<img alt="Logo" src="{{asset('admin/assets/media/logos/default-dark.svg')}}"" class="h-25px app-sidebar-logo-default" />
								<img alt="Logo" src="{{asset('admin/assets/media/logos/default-small.svg')}}"" class="h-20px app-sidebar-logo-minimize" />
							</a>
							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<!--begin::Minimized sidebar setup:
  
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<i class="ki-duotone ki-black-left-line fs-3 rotate-180">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
								<!--begin::Scroll wrapper-->
								<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
									<!--begin::Menu-->
									<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-duotone ki-element-11 fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">Dashboards</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="{{url('admin/dashboard')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Dashboard</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="{{url('admin/truck-list')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Truck List Type</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link active" href="{{url('admin/price')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Price</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/online-courses.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Online Courses</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="dashboards/marketing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Marketing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/bidding.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Bidding</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/pos.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">POS System</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/call-center.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Call Center</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/logistics.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Logistics</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/website-analytics.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Website Analytics</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/finance-performance.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Finance Performance</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/store-analytics.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Store Analytics</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/social.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Social</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/delivery.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Delivery</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/crypto.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Crypto</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/school.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">School</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="dashboards/podcast.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Podcast</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="landing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Landing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
								
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Scroll wrapper-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->