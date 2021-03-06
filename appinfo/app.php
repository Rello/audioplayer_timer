<?php

/**
 * ownCloud - Audio Player - Timer
 *
 * @author Marcel Scherello
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
 
$app = new Application();
$c = $app->getContainer();
// add an navigation entry

$navigationEntry = function () use ($c) {
	return [
		'id' => $c->getAppName(),
		'order' => 22,
		'name' => $c->query('L10N')->t('Audio Player - Timer'),
		'href' => $c->query('URLGenerator')->linkToRoute('audioplayer_timer.page.index'),
		'icon' => $c->query('URLGenerator')->imagePath('audioplayer_timer', 'app.svg'),
	];
};
//$c->getServer()->getNavigationManager()->add($navigationEntry);

\OCP\App::registerPersonal($c->query('AppName'), 'settings/user');
