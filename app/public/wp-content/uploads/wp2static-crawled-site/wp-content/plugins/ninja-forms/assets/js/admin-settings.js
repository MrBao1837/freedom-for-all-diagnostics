jQuery(document).ready(function($) {
	var working = false;
	var message, container, messageBox, deleteInput, deleteMsgs, buttons, confirm, cancel, lineBreak;
	container = document.createElement( 'div' );
	messageBox = document.createElement( 'p' );
	deleteInput = document.createElement( 'input' );
	deleteInput.type = 'text';
	deleteInput.id = 'confirmDeleteInput';
	buttons = document.createElement( 'div' );
	buttons.style.marginTop = '10px';
	buttons.style.backgroundColor = '#f4f5f6';
	confirm = document.createElement( 'div' );
	confirm.style.padding = '8px';
	confirm.style.cursor = 'default';
	confirm.style.backgroundColor = '#d9534f';
	confirm.style.borderColor = '#d9534f';
	confirm.style.fontSize = '14pt';
	confirm.style.fontWeight = 'bold';
	confirm.style.color = '#ffffff';
	confirm.style.borderRadius = '4px';
	cancel = document.createElement( 'div' );
	cancel.style.padding = '8px';
	cancel.style.cursor = 'default';
	cancel.style.backgroundColor = '#5bc0de';
	cancel.style.borderColor = '#5bc0de';
	cancel.style.fontSize = '14pt';
	cancel.style.fontWeight = 'bold';
	cancel.style.color = '#ffffff';
	cancel.style.borderRadius = '4px';
	lineBreak = document.createElement( 'br' );
	container.classList.add( 'message' );
	messageBox.innerHTML += 'This will DELETE all forms, form submissions,' +
		' and deactivate Ninja Forms';

	messageBox.appendChild( lineBreak );
	messageBox.innerHTML += '<br>Type <span style="color:red;">DELETE</span>' +
		' to' +
		' confirm';

	container.appendChild( messageBox );
	container.appendChild( deleteInput );
	container.appendChild( lineBreak );
	deleteMsgs = document.createElement( 'div' );
	deleteMsgs.id = 'progressMsg';
	deleteMsgs.style.display = 'none';
	deleteMsgs.style.color = 'red';
	container.appendChild( deleteMsgs );
	confirm.innerHTML = 'Delete';
	confirm.classList.add( 'confirm', 'nf-button', 'primary' );
	confirm.style.float = 'left';
	cancel.innerHTML = 'Cancel';
	cancel.classList.add( 'cancel', 'nf-button', 'secondary', 'cancel-delete-all' );
	cancel.style.float = 'right';
	buttons.appendChild( confirm );
	buttons.appendChild( cancel );
	buttons.classList.add( 'buttons' );
	container.appendChild( buttons );
	message = document.createElement( 'div' );
	message.appendChild( container );

	// set up delete model with all the elements created above
	deleteAllDataModal = new jBox( 'Modal', {
		width: 450,
		addClass: 'dashboard-modal',
		overlay: true,
		closeOnClick: 'body'
	} );

	deleteAllDataModal.setContent( message.innerHTML );
	deleteAllDataModal.setTitle( 'Delete All Ninja Forms Data?' );

	// add event listener for cancel button
	var btnCancel = deleteAllDataModal.container[0].getElementsByClassName('cancel')[0];
	btnCancel.addEventListener('click', function() {
		if( ! working ) {
			deleteAllDataModal.close();
		}
	} );

	var doAllDataDeletions = function( formIndex ) {
		var last_form = 0;
		// Gives the user confidence things are happening
	    $( '#progressMsg' ).html( 'Deleting submissions for '
	        + nfAdmin.forms[ formIndex ].title + "" + ' ( ID: '
	        + nfAdmin.forms[ formIndex ].id + ' )' );
		$( '#progressMsg').show();
		// notify php this is the last one so it delete data and deactivate NF
	    if( formIndex === nfAdmin.forms.length - 1 ) {
	    	last_form = 1;
	    }
	    // do this deletion thang
		$.post(
			nfAdmin.ajax_url,
			{
				'action': 'nf_delete_all_data',
				'form': nfAdmin.forms[ formIndex ].id,
				'security': nfAdmin.nonce,
				'last_form': last_form
			}
		).then (function( response ) {
			formIndex = formIndex + 1;
			response = JSON.parse( response );

			if(response.data.hasOwnProperty('errors')) {
				var errors = response.data.errors;
				var errorMsg = '';

				if (Array.isArray(errors)) {
					errors.forEach(function(error) {
						errors += error + "\n";
					})
				} else {
					errors = errors;
				}
				console.log('Delete All Data Errors: ', errors);
				alert(errors);
				return null;
			}

			// we expect success and then move to the next form
			if( response.data.success ) {
				if( formIndex < nfAdmin.forms.length ) {
					doAllDataDeletions( formIndex )
				} else {
					// if we're finished deleting data then redirect to plugins
					if( response.data.plugin_url ) {
						window.location = response.data.plugin_url;
					}
				}
			}
		} ).fail( function( xhr, status, error ) {
			// writes error messages to console to help us debug
			console.log( xhr.status + ' ' + error + '\r\n' +
				'There was an error deleting submissions for '
					+ nfAdmin.forms[ formIndex ].title );
		});
	};
	// Add event listener for delete button
	var btnDelete = deleteAllDataModal.container[0].getElementsByClassName('confirm')[0];
	btnDelete.addEventListener('click', function() {
		var confirmVal = $('#confirmDeleteInput').val();

		if (! working) {
			working = true;
			// Gotta type DELETE to play
			if ('DELETE' === confirmVal) {
				this.style.backgroundColor = '#9f9f9f';
				this.style.borderColor = '#3f3f3f';

				var cancelBtn = $( '.cancel-delete-all' );
				cancelBtn.css( 'backgroundColor', '#9f9f9f' );
				cancelBtn.css( 'borderColor', '#3f3f3f');

				// this is the first one, so we'll start with index 0
				doAllDataDeletions(0);
			} else {
				deleteAllDataModal.close();
				working = false;
			}
		}
	} );

    $( '.js-delete-saved-field' ).click( function(){

        var that = this;

        var data = {
            'action': 'nf_delete_saved_field',
            'field': {
                id: $( that ).data( 'id' )
            },
            'security': nfAdmin.nonce
        };

        $.post( nfAdmin.ajax_url, data )
            .done( function( response ) {
                $( that ).closest( 'tr').fadeOut().remove();
            });
    });

	$( document ).on( 'click', '#delete_on_uninstall', function( e ) {
		deleteAllDataModal.open();
	} );

	$( document ).on( 'click', '.nf-delete-on-uninstall-yes', function( e ) {
		e.preventDefault();
		$( "#delete_on_uninstall" ).attr( 'checked', true );

	} );
    
    // If we're allowed to track site data...
    if ( '1' == nfAdmin.allow_telemetry ) {
        // Show the optout button.
        $( '#nfTelOptin' ).addClass( 'hidden' );
        $( '#nfTelOptout' ).removeClass( 'hidden' );
    } // Otherwise...
    else {
        // Show the optin button.
        $( '#nfTelOptout' ).addClass( 'hidden' );
        $( '#nfTelOptin' ).removeClass( 'hidden' );
    }
    
    // If optin is clicked...
    $( '#nfTelOptin' ).click( function( e ) {
        // Hide the button.
        $( '#nfTelOptin' ).addClass( 'hidden' );
        $( '#nfTelSpinner' ).css( 'display', 'inline-block' );
        // Hit AJAX endpoint and opt-in.
        $.post( ajaxurl, { action: 'nf_optin', ninja_forms_opt_in: 1 },
                    function( response ) {
            $( '#nfTelOptout' ).removeClass( 'hidden' );
            $( '#nfTelSpinner' ).css( 'display', 'none' );
        } );  
    } );
    
    // If optout is clicked...
    $( '#nfTelOptout' ).click( function( e ) {
        // Hide the button.
        $( '#nfTelOptout' ).addClass( 'hidden' );
        $( '#nfTelSpinner' ).css( 'display', 'inline-block' );
        // Hit AJAX endpoint and opt-out.
        $.post( ajaxurl, { action: 'nf_optin', ninja_forms_opt_in: 0 },
                    function( response ) {
            $( '#nfTelOptin' ).removeClass( 'hidden' );
            $( '#nfTelSpinner' ).css( 'display', 'none' );
        } );  
    } );

    jQuery( '#nfTrashExpiredSubmissions' ).click( function( e ) {
    	var settings = {
    		content: '<p>' + nfAdmin.i18n.trashExpiredSubsMessage + '</p>',
    		btnPrimaryText: nfAdmin.i18n.trashExpiredSubsButtonPrimary,
    		btnSecondaryText: nfAdmin.i18n.trashExpiredSubsButtonSecondary,
    		batch_type: 'expired_submission_cleanup',
    		// extraData: [ 'test1', 'test2', 'test3' ]
    	}
    	new NinjaBatchProcessor( settings );
	});

	jQuery( '#nfRemoveMaintenanceMode' ).click( function( e ) {

		var that = this;

		jQuery( this ).addClass( 'disabled' ).attr( 'disabled', 'disabled' );
		jQuery( '#nf_maintenanceModeProgress' ).html("<strong>Removing Maintenance Mode...</strong>" );
		jQuery( '#nf_maintenanceModeProgress' ).fadeIn( 1 );
		
		var data = {
			action: 'nf_remove_maintenance_mode',
			security: nf_settings.nonce,
		};
		$.post(
			nf_settings.ajax_url,
			data
		).then (function( response ) {
			response = JSON.parse( response );
			// if there are errors then, console it out
			if( response.data.errors ) {
				console.log( response.data.errors );
			}

			jQuery( that ).removeClass( 'disabled' ).removeAttr( 'disabled' );
			jQuery( '#nf_maintenanceModeProgress' ).html("<strong>Done.</strong>" );
			jQuery( '#nf_maintenanceModeProgress' ).fadeOut( 600 );

		} ).fail( function( xhr, status, error ) {
			// writes error messages to console to help us debug
			console.log( xhr.status + ' ' + error + '\r\n' +
				'There was an error resetting maintenance mode' );
		});

	} );
});
