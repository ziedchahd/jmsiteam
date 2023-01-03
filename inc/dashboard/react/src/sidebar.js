/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
const { Fragment } = wp.element;
const { withFilters, TabPanel, Panel, PanelBody, PanelRow, Button } = wp.components;
export const Sidebar = () => {
	return (
		<Fragment>
			<Panel className="support-section sidebar-section">
				<PanelBody
					opened={ true }
				>
					<h2>{ __( 'Support', 'jmsiteam' ) }</h2>
					<p>{ __( 'Have a question, we are happy to help! Get in touch with our support team.', 'jmsiteam' ) }</p>
					<a href="https://jmsiteam.org/support" target="_blank" class="sidebar-link">{ __( 'Submit a Ticket', 'jmsiteam' ) }</a>
				</PanelBody>
			</Panel>
		</Fragment>
	);
};

export default withFilters( 'base_theme_sidebar' )( Sidebar );