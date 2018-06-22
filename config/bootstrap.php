<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */

use Cake\Cache\Cache;

/**
 * Used by EavBehavior.
 */
Cache::setConfig('eav_table_attrs', [
    'className' => 'File',
    'prefix' => 'eav_attrs_',
    'path' => CACHE . 'eav/',
    'duration' => '+1 day',
    'probability' => 0,
    'groups' => ['eav']
]);
