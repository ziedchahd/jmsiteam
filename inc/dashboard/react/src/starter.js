/**
 * Activate a plugin
 *
 * @return void
 */
function base_starter_activatePlugin() {
	var data = new FormData();
	data.append( 'action', 'base_install_starter' );
	data.append( 'security', baseDashboardParams.ajax_nonce );
	data.append( 'status', baseDashboardParams.status );
	jQuery.ajax({
		method:      'POST',
		url:         baseDashboardParams.ajax_url,
		data:        data,
		contentType: false,
		processData: false,
	})
	.done( function( response, status, stately ) {
		if ( response.success ) {
			location.replace( baseDashboardParams.starterURL );
		}
	})
	.fail( function( error ) {
		console.log( error );
	});
}
/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { useState, useEffect, Fragment } from '@wordpress/element';
const { withFilters, TabPanel, Panel, PanelBody, PanelRow, Button, Spinner } = wp.components;
export const StarterTab = () => {
	const [ working, setWorking ] = useState( null );
	const handleClick = () => {
		setWorking( true );
		base_starter_activatePlugin();
	};
	return (
		<Fragment>
			<div className="base-desk-starter-inner" style={{ margin: '20px auto', textAlign:'center' }}>
				<h2>{ __( 'Starter Templates', 'jmsiteam' ) }</h2>
				<p>{ __( 'Create and customize professionally designed websites in minutes. Simply choose your template, choose your colors, and import. Done!', 'jmsiteam' ) }</p>
				<div className="image-container">
					<img width="772" height="250" alt={ __( 'Starter Templates', 'jmsiteam' ) } src={ baseDashboardParams.starterImage } />
				</div>
				{ baseDashboardParams.starterTemplates && (
					<a
						className="bst-action-starter base-desk-button"
						href={ baseDashboardParams.starterURL }
					>
						{ baseDashboardParams.starterLabel }
					</a>
				) }
				{ ! baseDashboardParams.starterTemplates && (
					<Button 
						className="bst-action-starter base-desk-button"
						onClick={ () => handleClick() }
					>
						{ baseDashboardParams.starterLabel }
						{ working && (
							<Spinner />
						) }
					</Button>

				) }
			</div>
		</Fragment>
	);
};

export default withFilters( 'base_theme_starters' )( StarterTab );