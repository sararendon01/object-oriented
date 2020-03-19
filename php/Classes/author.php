<?php
namespace SaraRendon01/ObjectOriented;

require_once("autoload.php");
require_once(dirname(__DIR__, 1) . "/vendor/autoload.php");

use Ramsey\Uuid\Uuid;

class author {
	use ValidateUuid;

	private $authorId;

	private $authorActivationToken;

	private $authorAvatarUrl;

	private $authorEmail;

	private $authorHash;

	private $authorUsername;

	//constructor method
	public function __construct($newauthorId, $newAuthorActivationToken, string $newAvatarUrl, $newAuthorEmail, $newAuthorHash, $newAuthorUsername = null) {
		try {
			$this->setAuthorId($newTweetId);
			$this->setTAuthorActivationToken($newAuthorActivationToken);
			$this->setnewAvatarUrl($newAvatarUrl);
			$this->setAuthorEmail($newAuthorEmail);
			$this->setAuthorHash($newAuthorHash);
			$this->authorUsername()
		}
			//determine what exception type was thrown
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

	//mutator method

	public function setAuthorId( $newAuthortId) : void {
		try {
			$uuid = self::validateUuid($newAuthorId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		public function jsonSerialize() : array {
			$fields = get_object_vars($this);
			$fields["tweetId"] = $this->tweetId->toString();
			return($fields);