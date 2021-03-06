<?php
/*
Copyright © 2014 TestArena 

This file is part of TestArena.

TestArena is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

The full text of the GPL is in the LICENSE file.
*/
class Message_Form_Response extends Custom_Form_Abstract
{
  public function init()
  {
    parent::init();
    $t = new Custom_Translate();
    
    $this->addElement('textarea', 'content', array(
      'maxlength'   => 1000,
      'required'    => true,
      'filters'     => array('StringTrim'),
      'class'       => 'ckeditor',
      'validators'  => array(
        'SimpleText',
        array('StringLengthOneCharacterLineBreaks', false, array(1, 1000, 'UTF-8', true))
      ),
    ));
    
    /*$this->addElement('hash', 'csrf', array(
      'ignore'  => true,
      'salt'    => 'message_response',
      'timeout' => 600
    ));*/
  }
}