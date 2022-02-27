
<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
  @include('layouts.head');
	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="{{ route('home') }}">
					<img alt="Logo" src="{{ url('/') }}/assets/media/logos/logo-light.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->

				<!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin:: Aside -->
					<div class="kt-aside__brand kt-grid__iteDm " id="kt_aside_brand">
						<div class="kt-aside__brand-logo">
							<a href="{{ route('home') }}">
								<img alt="Logo" src="{{ url('/') }}/assets/media/logos/logo-light.png" />
							</a>
						</div>
						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
								<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
											<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
										</g>
									</svg></span>
								<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
											<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
										</g>
									</svg></span>
							</button>

							<!--
              <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
              -->
						</div>
					</div>

					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					@include('layouts.sidemenu')

					<!-- end:: Aside Menu -->
				</div>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
						<div class="kt-header__topbar">
              <div class="kt_topbar_left">
                <h3 class="kt-subheader__title my-0">@isset($title)
										{{ $title }}
									@endisset</h3>
							</div>
							<div class="kt-header__topbar-item kt-header__topbar-item--user">
								<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
									<div class="kt-header__topbar-user">
										<span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
										<span class="kt-header__topbar-username kt-hidden-mobile">{{Auth::user()->name}}</span>
										<img class="kt-hidden" alt="Pic" src="{{ url('/') }}/assets/media/users/300_25.jpg" />

	
										<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">{{ substr(Auth::user()->name,0,1) }}</span>
									</div>
								</div>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

									<!--begin: Head -->
									<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({{ url('/') }}/assets/media/misc/bg-1.jpg)">
										<div class="kt-user-card__avatar">
											<img class="kt-hidden" alt="Pic" src="{{ url('/') }}/assets/media/users/300_25.jpg" />

											<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
											<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">{{ substr(Auth::user()->name,0,1) }}</span>
										</div>
										<div class="kt-user-card__name">
											{{Auth::user()->name}}
										</div>
									</div>

									<!--end: Head -->

									<!--begin: Navigation -->
									<div class="kt-notification">
										<div class="kt-notification__custom kt-space-between">
											<a href="{{ route('actionlogout') }}" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
										</div>
									</div>

									<!--end: Navigation -->
								</div>
							</div>

							<!--end: User Bar -->
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor py-0" id="kt_content">

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid py-0">

							<!--Begin::Dashboard 1-->

							<!--Begin::Row-->
							<div class="row">
								<div class="col-lg-12 bg-white" style="margin-top: -30px;">
									<div class="kt-portlet__head">
										<div class="kt-portlet__head-label py-3">
											<h3 class="kt-portlet__head-title">
												Form {{ $title }}
											</h3>
										</div>
									</div>
                  @if($errors->any())
										<div class="alert alert-danger" id="alert">
											{{$errors->first()}} 
										</div><br />
									@endif
									<form class="kt-form" method="post" action="{{ route('mahasiswa.store')}}">
										@csrf
										<div class="kt-portlet__body">
                      <div class="form-group">
												<label>Nama</label>
												<input type="text" class="form-control" name="nama" aria-describedby="nama" placeholder="Masukkan Nama" >
											</div>
                      <div class="form-group">
												<label>Alamat</label>
												<input type="text" class="form-control" name="alamat" aria-describedby="alamat" placeholder="Masukkan Alamat" >
											</div>
                      <div class="form-group">
												<label>No Telp</label>
												<input type="text" class="form-control" name="no_telp" aria-describedby="no_telp" placeholder="Masukkan No Telp" >
											</div>
                      <div class="form-group">
                        <label for="fakultas_id">Nama Fakultas</label>
                        <select class="form-control" id="fakultas_id" name="fakultas_id">
                          <option value="">Pilih salah satu</option>
                          @foreach ($fakultas as $fk)
                          <option value="{{ $fk->id }}">{{ $fk->nama_fakultas }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="fakultas_id">Nama Program Studi</label>
                        <select class="form-control" id="program_studi_id" name="program_studi_id">
                          
                        </select>
                      </div>
											
										</div>
										<div class="kt-portlet__foot pb-3">
											<div class="kt-form__actions ">
												<button type="submit" class="btn btn-primary">Simpan</button>
												<button type="button" class="btn btn-secondary" onclick="window.location='{{ route('mahasiswa.index') }}'">Batal</button>
											</div>
										</div>
									</form>
                </div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>
            @include('layouts.footer')
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->


		<!--ENd:: Chat-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{ url('/') }}/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="{{ url('/') }}/assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->
    <script>
    $( document ).ready(function() {
      setTimeout(function(){
					var element = document.getElementById("alert");
					element.parentNode.removeChild(element);
  				element.classList.remove("alert.alert-success");
				}, 3000 )
      var id = "";
      loadProgramStudi(id);
    });
    function loadProgramStudi(id){
      if(id == ''){
        var template = '';
          template += '<option value="">Pilih fakultas terleih dahulu</option>';
        $('#program_studi_id').html(template);
      }else{
      $.ajax({
        type: "get",
        url: `/programstudi/${id}`,
        }).done(function( data ) {
          var template = '';
          template += '<option value="">Pilih salah satu</option>';
          for( var i = 0; i < data.length;i++){
            template += `<option value="${data[i].id}" >${data[i].nama_program_studi}</option>`;
          }
          $('#program_studi_id').html(template);
      });
      }
    }
    $('#fakultas_id').change(function(){
      var id = $(this).val();
      loadProgramStudi(id);
    })
    </script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>