<?php
class SessionManager
{
	protected $access = ['profile' => ['testuser', 'shamba']];

	public static function create()
	{
		session_start();
	}

	public static function destroy()
	{
		session_destroy();
	}

	public function add($name, $value)
	{
		if(preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $name) == 0)
        {
            trigger_error('Invalid variable name used', E_USER_ERROR);
        }
        $_SESSION[$name] = $value;
	}

	public function see($name)
	{
		if(isset($_SESSION[$name]))
		{
			return $_SESSION[$name];
		}
		return null;
	}

	public function remove(string $name)
	{
		if(isset($_SESSION[$name]))
		{
			unset($_SESSION[$name]);
		}
		
	}

	public function accessible($user, $page)
	{
		if(in_array($user, $this->access[$page]))
		{
			return true;
		}
		return false;
	}
}