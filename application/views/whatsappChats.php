<?php $this->load->view('header'); ?>
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
			<?php $this->load->view('menu')?>
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header tablet and mobile-->
					<div class="header-mobile py-3">
						<!--begin::Container-->
						<div class="container d-flex flex-stack">
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="../../demo9/dist/index.html">
									<img alt="Logo" src="<?=base_url()?>assets/media/logos/demo9.svg" class="h-35px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Aside toggle-->
							<button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-2x me-n1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--end::Aside toggle-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header tablet and mobile-->
					<!--begin::Header-->
					<div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
						<!--begin::Container-->
						<div class="header-container container-xxl">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bold my-1">
									<span class="text-white fs-1">Whatsapp Chats</span>
								</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-line fw-semibold fs-7 my-1">
									<li class="breadcrumb-item text-gray-600">
										<a href="../../demo9/dist/index.html" class="text-gray-600">Home</a>
									</li>
									<li class="breadcrumb-item text-gray-600">Whatsapp Chats</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title=-->
						
						</div>
						<!--end::Container-->
						<div class="header-offset"></div>
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
					
				
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
						
								<!--begin::Col-->
								<div class="col-xl-12">
									<!--begin::Table Widget 5-->
									<div class="card card-flush h-xl-100">
										<!--begin::Card header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Whatsapp Chats</span>
											</h3>
											<!--end::Title-->
									
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body">
                                        <!--begin::Message accordion-->
											<div data-kt-inbox-message="message_wrapper">
												<!--begin::Message header-->
												<div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
													<!--begin::Author-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-50 me-4">
															<span class="symbol-label" style="background-image:url(<?=base_url()?>assets/media/avatars/300-1.jpg);"></span>
														</div>
														<!--end::Avatar-->
														<div class="pe-5">
															<!--begin::Author details-->
															<div class="d-flex align-items-center flex-wrap gap-1">
																<a href="#" class="fw-bold text-dark text-hover-primary">Max Smith</a>
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-success mx-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<circle fill="currentColor" cx="12" cy="12" r="8" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<!--end::Author details-->
													
															<!--begin::Preview message-->
															<div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">Jornalists call this critical, introductory section the "Lede," and when bridge properly executed....</div>
															<!--end::Preview message-->
														</div>
													</div>
													<!--end::Author-->
													<!--begin::Actions-->
													<div class="d-flex align-items-center flex-wrap gap-2">
														<!--begin::Date-->
														<span class="fw-semibold text-muted text-end me-3">15 Apr 2022, 2:40 pm</span>
														<!--end::Date-->
														
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Message header-->
											
											</div>
											<!--end::Message accordion-->
											<div class="separator my-6"></div>


                                            <!--begin::Message accordion-->
											<div data-kt-inbox-message="message_wrapper">
												<!--begin::Message header-->
												<div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
												<!--begin::Actions-->
													<div class="d-flex align-items-center flex-wrap gap-2">
														<!--begin::Date-->
														<span class="fw-semibold text-muted text-end me-3">15 Apr 2022, 2:40 pm</span>
														<!--end::Date-->
														
													</div>
													<!--end::Actions-->	
                                                <!--begin::Author-->
													<div class="d-flex align-items-center text-end">
														
														<div class="pe-5">
															<!--begin::Author details-->
															<div class=" align-items-center flex-wrap ">
																<a href="#" class="fw-bold text-dark text-hover-primary">Max Smith</a>
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-success mx-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<circle fill="currentColor" cx="12" cy="12" r="8" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<!--end::Author details-->
													
															<!--begin::Preview message-->
															<div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">Jornalists call this critical, introductory section the "Lede," and when bridge properly executed....</div>
															<!--end::Preview message-->
														</div>
                                                        <!--begin::Avatar-->
														<div class="symbol symbol-50 me-4">
															<span class="symbol-label" style="background-image:url(<?=base_url()?>assets/media/avatars/300-1.jpg);"></span>
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Author-->
													
												</div>
												<!--end::Message header-->
											
											</div>
											<!--end::Message accordion-->
											<div class="separator my-6"></div>


                                            <!--begin::Message accordion-->
											<div data-kt-inbox-message="message_wrapper">
												<!--begin::Message header-->
												<div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
													<!--begin::Author-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-50 me-4">
															<span class="symbol-label" style="background-image:url(<?=base_url()?>assets/media/avatars/300-1.jpg);"></span>
														</div>
														<!--end::Avatar-->
														<div class="pe-5">
															<!--begin::Author details-->
															<div class="d-flex align-items-center flex-wrap gap-1">
																<a href="#" class="fw-bold text-dark text-hover-primary">Max Smith</a>
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-success mx-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<circle fill="currentColor" cx="12" cy="12" r="8" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<!--end::Author details-->
													
															<!--begin::Preview message-->
															<div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">Jornalists call this critical, introductory section the "Lede," and when bridge properly executed....</div>
															<!--end::Preview message-->
														</div>
													</div>
													<!--end::Author-->
													<!--begin::Actions-->
													<div class="d-flex align-items-center flex-wrap gap-2">
														<!--begin::Date-->
														<span class="fw-semibold text-muted text-end me-3">15 Apr 2022, 2:40 pm</span>
														<!--end::Date-->
														
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Message header-->
											
											</div>
											<!--end::Message accordion-->
											<div class="separator my-6"></div>


                                            <!--begin::Message accordion-->
											<div data-kt-inbox-message="message_wrapper">
												<!--begin::Message header-->
												<div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
												<!--begin::Actions-->
													<div class="d-flex align-items-center flex-wrap gap-2">
														<!--begin::Date-->
														<span class="fw-semibold text-muted text-end me-3">15 Apr 2022, 2:40 pm</span>
														<!--end::Date-->
														
													</div>
													<!--end::Actions-->	
                                                <!--begin::Author-->
													<div class="d-flex align-items-center text-end">
														
														<div class="pe-5">
															<!--begin::Author details-->
															<div class=" align-items-center flex-wrap ">
																<a href="#" class="fw-bold text-dark text-hover-primary">Max Smith</a>
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
																<span class="svg-icon svg-icon-7 svg-icon-success mx-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<circle fill="currentColor" cx="12" cy="12" r="8" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<!--end::Author details-->
													
															<!--begin::Preview message-->
															<div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">Jornalists call this critical, introductory section the "Lede," and when bridge properly executed....</div>
															<!--end::Preview message-->
														</div>
                                                        <!--begin::Avatar-->
														<div class="symbol symbol-50 me-4">
															<span class="symbol-label" style="background-image:url(<?=base_url()?>assets/media/avatars/300-1.jpg);"></span>
														</div>
														<!--end::Avatar-->
													</div>
													<!--end::Author-->
													
												</div>
												<!--end::Message header-->
											
											</div>
											<!--end::Message accordion-->
											<div class="separator my-6"></div>
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Table Widget 5-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->

						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-gray-400 fw-semibold me-1">Created by</span>
								<a href="https://keenthemes.com" target="_blank" class="text-muted text-hover-primary fw-semibold me-2 fs-6">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
	
		<?php $this->load->view('footer'); ?>