<?php
/**
 * This file is part of the Passwords App
 * created by Marius David Wieschollek
 * and licensed under the AGPL.
 *
 * @var $l \OCP\IL10N
 * @var $_ array
 */

use OCA\Passwords\AppInfo\Application;
use OCP\Util;

Util::addScript('passwords', 'Static/utility');
Util::addScript('passwords', 'Static/admin');
style(Application::APP_NAME, 'admin');

print_unescaped($this->inc('admin/settings'));