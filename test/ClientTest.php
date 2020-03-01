<?php declare(strict_types=1);
namespace yii\freemobile;

use function PHPUnit\Expect\{expect, it};
use GuzzleHttp\Psr7\{Uri};
use PHPUnit\Framework\{TestCase};
use yii\base\{InvalidConfigException};

/** @testdox yii\freemobile\Client */
class ClientTest extends TestCase {

  /** @testdox ->init() */
  function testInit(): void {
    it('should throw an exception if the username or password is empty', function() {
      expect(fn() => new Client)->to->throw(InvalidConfigException::class);
    });
  }

  /** @testdox ->sendMessage() */
  function testSendMessage(): void {
    it('should throw a `ClientException` if a network error occurred', function() {
      $config = ['username' => 'anonymous', 'password' => 'secret', 'endPoint' => new Uri('http://localhost/')];
      expect(fn() => (new Client($config))->sendMessage('Hello World!'))->to->throw();
    });

    it('should send SMS messages if credentials are valid', function() {
      $config = ['username' => getenv('FREEMOBILE_USERNAME'), 'password' => getenv('FREEMOBILE_PASSWORD')];
      expect(fn() => (new Client($config))->sendMessage('Bonjour Cédric, à partir du Yii Framework !'))->to->not->throw;
    });
  }
}
