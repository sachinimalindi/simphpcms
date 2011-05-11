<?php
/**
 * @author asmalindi
 * @copyright 2011
 */
class SystemComponent {

    private $settings;

    function getSettings() {

        // System variables
        $settings['siteDir'] = '/path/to/your/intranet/';

        // Database variables
        $settings['dbhost'] = 'localhost';
        $settings['dbusername'] = 'root';
        $settings['dbpassword'] = 'ijts';
        $settings['dbname'] = 'cms_demo';

        return $settings;

    }

}
?>