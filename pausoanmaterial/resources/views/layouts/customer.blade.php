

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Bootstrap CSS -->
		<link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('asset/css/tiny-slider.css') }}" rel="stylesheet">
		<link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-2I3rH1nWBluq0CzjggGDxxHk7ETJnM6fJoln44zR2wsxJ9fvvjRl4NaybfBmzJMIcP90nB2HwvntgYjQqIgOXA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
		<title>PausoanMaterial</title>
	</head>
<style>
	
    .cart-icon {
        text-color: red; /* Mengatur warna ikon menjadi merah */
        text-align: center; /* Mengatur teks ke tengah */
    }
	.price {
    font-size: 18px;
    font-weight: bold;
    color: #3B5D50; /* warna yang sesuai dengan desain Anda */
		}

		.unit {
			font-size: 14px;
			color: #666; /* warna yang sesuai dengan desain Anda */
		}

		a{
			text-decoration: none
		}
</style>
@yield('css');

<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Pausoan<span>Material</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home</a>
						</li>
						<li><a class="nav-link" href="/shop">Shop</a></li>
						<li><a class="nav-link" href="/aboutus">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>
						<li><a class="nav-link" href="blog.html">Blog</a></li>
						<li><a class="nav-link" href="contact.html">Contact us</a></li>
						<li><a class="nav-link" href="{{ url('cart') }}">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						  </a>
						</li>
					<li><a class="nav-link" href="{{ url('transaction') }}">
							<i class="fa-solid fa-cash-register"></i>
							  </a>
						</li>

						  
                    
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						{{-- <li><a ></a></li> --}}
						{{-- <li><a class="nav-link" href="cart.html"><img src="{{ asset('asset/images/cart.svg') }}"></a></li> --}}
                        @if (Route::has('login'))
								@auth
									<a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
								@else
						        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>             
									@if (Route::has('register'))
						        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>             
                            	@endif
								@endauth
						
						@endif

					</ul>
                </ul>

				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
		@yield('content')
			
		<!-- End Hero Section -->
		<!-- End We Help Section -->
		<footer class="footer-section">
			<div class="container relative">
		
				<div class="sofa-img">
					<img src="{{ asset('asset/images/truk.png') }}" alt="Image" class="img-fluid">
				</div>
		
				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="{{asset('images/envelope-outline.svg')}}" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>
		
							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>
		
						</div>
					</div>
				</div>
		
				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Pausoan <span>Material</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>
		
						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>
		
					{{-- <div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="dokumentacija.pdf" target="_blank" style="font-size:20px">ekalumbanraja4</a></li>
								</ul>
							</div>
		
						</div>
					</div> --}}
		
				</div>
		
				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
							</p>
						</div>
		
						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
		
					</div>
				</div>
		
			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('asset/js/tiny-slider.js') }}"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

		<script src="{{ asset('asset/js/custom.js') }}"></script>
		@yield('script')
		<script>
			// Dapatkan elemen tombol keranjang belanja
			var cartButton = document.querySelector('.nav-link[href="{{ url('cart') }}"]');
		
			// Perbarui tampilan jumlah item saat halaman dimuat
			window.onload = function() {
				updateCartItemCount();
			};
		
			// Fungsi untuk mengambil jumlah item dari keranjang belanja
			function getCartItemCount() {
				// Ganti dengan cara Anda untuk mendapatkan jumlah item dari keranjang belanja, misalnya dari server atau local storage
				// Misalnya, jika menggunakan localStorage:
				var itemCount = localStorage.getItem('cartItemCount');
				// Jika tidak ada jumlah item yang tersimpan, atur menjadi 0
				if (!itemCount) {
					itemCount = 0;
				}
				return parseInt(itemCount); // Mengonversi ke tipe integer
			}
		
			// Fungsi untuk memperbarui tampilan jumlah item dalam keranjang
			function updateCartItemCount() {
				var itemCount = getCartItemCount();
				// Ganti ikon keranjang dengan angka jumlah item
				cartButton.innerHTML = '<i class="fa fa-shopping-cart cart-icon" aria-hidden="true"></i> ' + itemCount;
			}
		</script>
		

		
		
	</body>

</html>
