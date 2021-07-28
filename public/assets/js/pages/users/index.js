(function(window, $){

	'use strict';

	console.log('ok loaded')

	// Format icon
    function iconFormat(icon) {
	    let originalOption = icon.element;
	    if (!icon.id) {
	      return icon.text;
	    }

	    let $icon = feather.icons[$(icon.element).data('icon')].toSvg({ class: `text-${$(icon.element).data('color')}` }) + icon.text;

	    return $icon;
  	}

	$(document).ready(function(){
	
		$(".user-list-table").DataTable({
			processing: true,
	        serverSide: true,
	        ajax: route('staff.management.users.index'),
		 	columns: [
			    // columns according to JSON
			   	{data: 'DT_RowIndex', searchable: false, orderable: false},
			    { data: 'name', name: 'users.name' },
			    { data: 'email', name: 'users.email' },
			    { name: 'users.role', searchable: false, orderable: false  },
			    { data: '', searchable: false }
		  	],
		  	dom:
		        '<"d-flex justify-content-between align-items-center header-actions mx-1 row mt-75"' +
		        '<"col-lg-12 col-xl-6" l>' +
		        '<"col-lg-12 col-xl-6 pl-xl-75 pl-0"<"dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1"<"mr-1"f>B>>' +
		        '>t' +
		        '<"d-flex justify-content-between mx-2 row mb-1"' +
		        '<"col-sm-12 col-md-6"i>' +
		        '<"col-sm-12 col-md-6"p>' +
		        '>',
		    columnDefs: [
		    	{
			      // Actions
			      targets: -1,
			      title: 'Actions',
			      orderable: false,
			      render: function (data, type, full, meta) {
			       
			        return (
			          '<div class="btn-group">' +
			          '<a class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">' +
			          feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
			          '</a>' +
			          '<div class="dropdown-menu dropdown-menu-right">' +
			          '<a href="' +
			           	route('staff.management.users.show', {
			           		user: full.id
			           	}) +
			          '" class="dropdown-item">' +
			          feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) +
			          'Details</a>' +
			          '<a href="" class="dropdown-item">' +
			          feather.icons['archive'].toSvg({ class: 'font-small-4 mr-50' }) +
			          'Edit</a>' +
			          '<a href="javascript:;" class="dropdown-item delete-record">' +
			          feather.icons['trash-2'].toSvg({ class: 'font-small-4 mr-50' }) +
			          'Delete</a></div>' +
			          '</div>' +
			          '</div>'
			        );
			      }
			    },
			    {
			    	targets: 3,
			    	title: 'Role',
			    	orderable: false,
			    	render: function(data, type, full, meta){
			    		let roles = full.roles;
			    		let roleContainer = "";
			    		for (let i = 0; i < roles.length; i++) {
			    			let role = roles[i]			  		
			    			let roleIcon = feather.icons[role.icon].toSvg({ class: `font-medium-3 text-${role.color} mr-50` });

				    		roleContainer += `<span class='text-truncate align-middle'>${roleIcon} ${role.title}</span>`
			    		}

			    		return roleContainer;
			    	}
			    }
		    ],
		    // Buttons with Dropdown
		      buttons: [
		        {
		          text: 'Add New User',
		          className: 'add-new btn btn-primary mt-50',
		          attr: {
		            'data-toggle': 'modal',
		            'data-target': '#modals-slide-in'
		          },
		          init: function (api, node, config) {
		            $(node).removeClass('btn-secondary');
		          }
		        }
		      ],
		      // For responsive popup
		      responsive: {
		        details: {
		          display: $.fn.dataTable.Responsive.display.modal({
		            header: function (row) {
		              var data = row.data();
		              return 'Details of ' + data['name'];
		            }
		          }),
		          type: 'column',
		          renderer: $.fn.dataTable.Responsive.renderer.tableAll({
		            tableClass: 'table',
		            columnDefs: [
		              {
		                targets: 2,
		                visible: false
		              },
		              {
		                targets: 3,
		                visible: false
		              }
		            ]
		          })
		        }
		      },
      	});
		

		// Select2 For Roles
		(function(){
			
			let $this = $('#user-roles');
		    
		    $this.wrap('<div class="position-relative"></div>');
		    $this.select2({
		      dropdownAutoWidth: true,
		      width: '100%',
		      minimumResultsForSearch: Infinity,
		      dropdownParent: $this.parent(),
		      templateResult: iconFormat,
		      templateSelection: iconFormat,
		      escapeMarkup: function (es) {
		        return es;
		      }
		    });

		})();


		

		
		  

	})


})(window, jQuery);