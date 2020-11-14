<?php
use PHPUnit\Framework\TestCase;

class SessionManagerTest extends TestCase
{
	public function testSessionObjectIsCreated() : void
	{
		$this->assertIsObject(new SessionManager);
	}
	
	public function testSessionManagerHasStaticMethodClear() : void
	{
		$method = new ReflectionMethod('SessionManager', 'create');
		$this->assertTrue($method->isStatic(), 'Method create() exists but is not static');
	}
	
	public function testSessionContainerCreated() : void
	{
		SessionManager::create();
		$this->assertArrayHasKey('container', $_SERVER);
		$this->assertIsArray($_SESSION['container']);
	}

	public function testSessionDestroyed() : void
	{
		SessionManager::create();
		SessionManager::destroy();
		$this->assertNull(PHP_SESSION_NONE, true);
	}

	public function testSessionRemoved() : void
	{
		SessionManager::create();
		SessionManager::remove($_SESSION["test"]);
		$this->assertNull($_SESSION);
	}
} 