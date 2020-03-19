

//require_once("/etc/apache2/capstone-mysql/Secrets.php");

require_once(dirname(__DIR__, 1) . "/classes/author.php");
//use Author;
function bar() {
use ValidateUuid;

 	$authorId; = "7b638665-773f-4474-a692-6402c3539b66";
 	$authorActivationToken; = "o7AFoTGE9xjQiHQK6dAa";
 	$authorAvatarUrl; = "https://avatars.discourse.org/v4/letters/m/a8b319/45.png";
 	$authorEmail; = "sararendon29@gmail.com";
 	$authorHash; = "1234hsrendon75ighowfangvhg";
	$authorUsername; = "SaraRendon01"

	$author = new Author($newauthorId, $newAuthorActivationToken, string $newAvatarUrl, $newAuthorEmail, $newAuthorHash, $newAuthorUsername);
 echo var_dump($author);
echo "$authorEmail <br> authorActivationToken <br> $authorHash ";
}
bar();