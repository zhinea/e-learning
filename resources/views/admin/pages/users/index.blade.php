<x-admin-layout title="Users Management">

	@push('css_vendor')
		<link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/vendors.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/forms/select/select2.min.css') }}">
	@endpush

	<x-minimal-breadchumb />

	<x-body>
	{{-- users list start --}}
        <section class="app-user-list">
            {{-- users filter start --}}
            <div class="card">
                <h5 class="card-header">Search Filter</h5>
                <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
                    <div class="col-md-4 user_role"></div>
                    <div class="col-md-4 user_plan"></div>
                    <div class="col-md-4 user_status"></div>
                </div>
            </div>
            {{-- users filter end --}}
            {{-- list section start --}}
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <table class="user-list-table table">
                        <thead class="thead-light">
                            <tr>
                                <th></th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                 {{-- Modal to add new user starts --}}
                <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                    <div class="modal-dialog">
                        <form class="add-new-user modal-content pt-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                               
                                <div class="form-group">
                                    <label class="form-label" for="basic-icon-default-uname">Name</label>
                                    <input type="text" 
                                           class="form-control dt-uname" 
                                           placeholder="Bambank" 
                                           aria-label="jdoe1" 
                                           aria-describedby="basic-icon-default-uname2" 
                                           name="name" />
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="basic-icon-default-email">Email</label>
                                    <input type="text" 
                                           class="form-control dt-email" 
                                           placeholder="bambank@e-learning.test"
                                           aria-label="bambank@e-learning.test" aria-describedby="basic-icon-default-email2" 
                                           name="email" />
                                    <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="roles">User Role</label>
                                    <select id="user-roles" 
                                            name="roles" 
                                            class="form-control"
                                            multiple>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" 
                                                    data-icon="{{ $role->icon }}" 
                                                    data-color="{{ $role->color }}"
                                                    >
                                                        {{ $role->title }}
                                                    </option>
                                        @endforeach
                                    </select>
                                </div>
                             
                                <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                 {{-- Modal to add new user Ends --}}
            </div>
            {{-- list section end --}}
        </section>
        {{-- users list ends		 --}}
	</x-body>

	@once

		@push('js_vendor')
			<script src="{{ ui_asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
			<script src="{{ ui_asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
			<script src="{{ ui_asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
			<script src="{{ ui_asset('vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
			<script src="{{ ui_asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
			<script src="{{ ui_asset('vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
            <script src="{{ ui_asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
		@endpush
		


		@push('js_page')
			<script src="{{ asset('js/pages/users/index.js') }}"></script>
		@endpush
		
	@endonce

</x-admin-layout>