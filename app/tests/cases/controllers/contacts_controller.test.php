<?php 
/* SVN FILE: $Id$ */
/* ContactsController Test cases generated on: 2009-09-03 14:21:21 : 1252002081*/
App::import('Controller', 'Contacts');

class TestContacts extends ContactsController {
	var $autoRender = false;
}

class ContactsControllerTest extends CakeTestCase {
	var $Contacts = null;

	function startTest() {
		$this->Contacts = new TestContacts();
		$this->Contacts->constructClasses();
	}

	function testContactsControllerInstance() {
		$this->assertTrue(is_a($this->Contacts, 'ContactsController'));
	}

	function endTest() {
		unset($this->Contacts);
	}
}
?>