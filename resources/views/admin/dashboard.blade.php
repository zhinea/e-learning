<x-admin-layout title="Dashboard Admin">
	
	<MinimalBreadchumb />

	<x-body>
		
	</x-body>


	@push('js_page')

		@if (session()->has('login_message'))
			<script>
				// On load Toast
				setTimeout(function () {
				    toastr['success'](
				      '{{ session('login_message') }}',
				      '👋 Hi,',
				      {
				        closeButton: true,
				        tapToDismiss: false,
				        rtl: true
				      }
				    );
				}, 2000);
			</script>
			
		@endif
    {{-- <script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.js"></script> --}}
		
	@endpush
</x-admin-layout>