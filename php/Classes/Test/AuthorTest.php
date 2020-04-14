<?php
namespace SaraRendon01\ObjectOriented\Test;

use SaraRendon01\ObjectOriented\{Author};

//Hack!!! - added so this class could see DataBase
require_once(dirname(__DIR__). "/Test/DataDesignTest.php");

// grab the class under scrutiny
require_once(dirname(__DIR__). "/autoload.php");

// grab the uuid generator
require_once(dirname(__DIR__, 2) . "/lib/uuid.php");

class TweetTest extends DataDesignTest

$authorId = "3134e90a-e3a5-4df2-abff-7cc7d8324530";

$authorActivationToken = 'o9AbabiSlayerjkGE9xo9ZFoTGE9x750';

$authorAvatarUrl = "https://avars.discourse.org/v4/letter/m/a8b319/squad4.png";

$authorUsername = "Andre3000";

$authorEmail = "Srendon4@cnm.edu";

public function setUp() : void {
parent::setUp();
}


public function testInsertValidAuthor() : void {

}

public function testUpdateValidAuthor() : void {

}

public function testdeletetValidAuthor() : void {

}

public function testGetValidAuthorByAuthorId() : void {

}

public function testGetValidAuthor() : void {

}