<?php

///////////////////////////////////////////////////////////////////////////
//                                                                       //
// NOTICE OF COPYRIGHT                                                   //
//                                                                       //
// Moodle - Modular Object-Oriented Dynamic Learning Environment         //
//          http://moodle.com                                            //
//                                                                       //
// Copyright (C) 1999 onwards  Martin Dougiamas  http://moodle.com       //
//                                                                       //
// This program is free software; you can redistribute it and/or modify  //
// it under the terms of the GNU General Public License as published by  //
// the Free Software Foundation; either version 2 of the License, or     //
// (at your option) any later version.                                   //
//                                                                       //
// This program is distributed in the hope that it will be useful,       //
// but WITHOUT ANY WARRANTY; without even the implied warranty of        //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         //
// GNU General Public License for more details:                          //
//                                                                       //
//          http://www.gnu.org/copyleft/gpl.html                         //
//                                                                       //
///////////////////////////////////////////////////////////////////////////

/**
 * Upgrade code for jabber message processor
 *
 * @author Luis Rodrigues
 * @version  $Id$
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package 
 */

function xmldb_message_jabber_upgrade($oldversion=0) {

    global $CFG, $THEME, $DB;

    $result = true;

    if ($result && $oldversion < 2008072401) {
        $processor = new object();
        $processor->name  = 'jabber';
        if (! $DB->record_exists('message_processors', array('name' => $processor->name))){
            $result = $result && $DB->insert_record('message_processors', $processor);
        }
    }

    return $result;
}

?>
