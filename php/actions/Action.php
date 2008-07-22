<?php
/* Copyright (C) 2008 App Tsunami, Inc. */
/* 
 *  This program is free software: you can redistribute it and/or modify 
 *  it under the terms of the GNU General Public License as published by 
 *  the Free Software Foundation, either version 3 of the License, or 
 *  (at your option) any later version. 
 * 
 *  This program is distributed in the hope that it will be useful, 
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of 
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
 *  GNU General Public License for more details. 
 * 
 *  You should have received a copy of the GNU General Public License 
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 */
/* Action.php */
$rDir = str_repeat('../', substr_count($_SERVER['PHP_SELF'],'/')-3);

class Action {
  const PARAM_PERSON_OBJID = 'personObjid';
  const PARAM_CARD_OBJID = 'cardObjid';
  const PARAM_PERSON_NAME = 'personName';
  const PARAM_RECEIVING_PERSON_UID = 'receivingPersonUid';

  const GIVE_TO_PERSON_ACTION_CLASS = 'GiveToPersonAction';

} // Action
?>
