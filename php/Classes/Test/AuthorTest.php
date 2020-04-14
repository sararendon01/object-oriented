<?php
namespace SaraRendon01\ObjectOriented\Test;

use SaraRendon01\ObjectOriented\{Author};

//Hack!!! - added so this class could see DataBase
require_once(dirname(__DIR__). "/Test/DataDesignTest.php");

// grab the class under scrutiny
require_once(dirname(__DIR__). "/autoload.php");

// grab the uuid generator
require_once(dirname(__DIR__, 2) . "/lib/uuid.php");

class AuthorTest extends DataDesignTest {

	private $VALID_ACTIVATION_TOKEN;	//this will be done in the setup.
	private $VALID_AVATAR_URL = "https://avatar.org";
	private $VALID_AUTHOR_EMAIL = "srendon4@cnm.edu";
	private $VALID_AUTHOR_HASH;	//this will be done in the setup.
	private $VALID_USERNAME = "srendon4";

	public function setUp() : void {
		parent::setUp();

		$password = "my_super_secret_password";
		$this->VALID_AUTHOR_HASH = password_hash($password, PASSWORD_ARGON2I, ["time_cost" => 45]);
		$this->VALID_ACTIVATION_TOKEN = bin2hex(random_bytes(16));
	}

	public function testInsertValidAuthor() : void {
		//get count of author records in db before we run the test.
		$numRows = $this->getConnection()->getRowCount("author");

		//insert an author record in the db
		$authorId = generateUuidV4()->toString();
		$author = new Author($authorId, $this->VALID_ACTIVATION_TOKEN, $this->VALID_AVATAR_URL,$this->VALID_AUTHOR_EMAIL, $this->VALID_AUTHOR_HASH, $this->VALID_USERNAME);
		$author->insert($this->getPDO());

		//check count of author records in the db after the insert
		$numRowsAfterInsert = $this->getConnection()->getRowCount("author");
		self::assertEquals($numRows + 1, $numRowsAfterInsert);

		//get a copy of the record just inserted and validate the values
		// make sure the values that went into the record are the same ones that come out
		$pdoAuthor = Author::getAuthor($this->getPDO(), $author->getAuthorId()->toString());
		self::assertEquals($authorId, $pdoAuthor->getAuthorId());
		self::assertEquals($this->VALID_ACTIVATION_TOKEN, $pdoAuthor->getAuthorActivationToken());
		self::assertEquals($this->VALID_AVATAR_URL, $pdoAuthor->getAuthorAvatarUrl());
		self::assertEquals($this->VALID_AUTHOR_EMAIL, $pdoAuthor->getAuthorEmail());
		self::assertEquals($this->VALID_AUTHOR_HASH, $pdoAuthor->getAuthorHash());
		self::assertEquals($this->VALID_USERNAME, $pdoAuthor->getAuthorUsername());

	}

	//public function testUpdateValidAuthor(): void {

	//}

	//public function testdeleteValidAuthor(): void {

	//}

	//public function testGetValidAuthorByAuthorId(): void {

	//}

	//public function testGetValidAuthor(): void {

	//}
}