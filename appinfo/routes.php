<?php
/**
 * ownCloud - Audio Player
 *
 * @author Marcel Scherello
 * @author Sebastian Doell
 * @copyright 2015 sebastian doell sebastian@libasys.de
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OCA\audioplayer_timer\AppInfo;

use \OCA\audioplayer_timer\AppInfo\Application;

$application = new Application();

$application->registerRoutes($this, ['routes' => [
	['name' => 'timer#getTimer', 'url' => '/gettimer', 'verb' => 'GET'],
	['name' => 'timer#setTimer', 'url' => '/settimer', 'verb' => 'GET'],
]]);
