<?php


/**
 * Plugin Name: Gutwerker SiteOrigin Widgets
 * Plugin URI: https://www.gutwerker.com/siteorigin-widgets
 * Description: SiteOrigin Widgets from Gutwerker. SiteOrigin Widgets Bundle is required.
 * Author: Kvein Taron
 * Author URI: https://www.gutwerker.com/
 * Version: 1.0.07
 * Text Domain: gw-so-widgets
 * Domain Path: languages
 *
 * Gutwerker SiteOrigin Widgets is distributed under the terms of the GNU
 * General Public License as published by the Free Software Foundation,
 * either version 2 of the License, or any later version.
 *
 * Gutwerker SiteOrigin Widgets is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Gutwerker SiteOrigin Widgets. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *
 */
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

if ( !function_exists( 'gw_so_widgets' ) ) {
    // Loading widget folders
    function gw_so_widgets( $folders )
    {
        $folders[] = plugin_dir_path( __FILE__ ) . '/widgets/';
        return $folders;
    }

}
add_filter( 'siteorigin_widgets_widget_folders', 'gw_so_widgets' );

?>