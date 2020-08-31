<?php
/**
* @package ItemBookingPlugin
*/
/*
Plugin Name: Item Booking Plugin
Plugin URI: https://github.com/Issen007/wp-booking
Description: This small plugin is helping you to create a Item Booking Calender on your Wordpress site.
Version: 1.0.0
Auther: Christian "Issen" Petersson
Auther URI: https://github.com/Issen007
License: GPLv3
Text Domain: Item-Booking-Plugin
*/

/*
Item-Booking is a small Plugin to Wordpress to setup a calender booking of your inhouse items.
  Copyright (C) 2020  Christian "Issen" Petersson

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <https://www.gnu.org/licenses/>.
  */


if ( ! function_exist( 'add_action') ) {
    echo 'Sorry this is not allowed';
    exit;
}
