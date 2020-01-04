<?php
class Helper_X_Mail_Config
{
	protected $username = '';
	protected $password = '';
	protected $imap = '';
	protected $begin_date = '';
	protected $end_date = '';
	protected $mailbox = 'INBOX';
	protected $config = array();
	protected $stream;


	public function setConfig($host)
	{
		switch ($host)
		{
			case '163.com':
				$this->imap = '{imap.163.com:993/imap/ssl}';
				$this->smtp = 'ssl://smtp.163.com';
				$this->smtp_proxy = '465';
				break;
			case 'qq.com':
				$this->imap = '{imap.qq.com:993/imap/ssl}';
				$this->smtp = 'ssl://smtp.qq.com';
				$this->smtp_proxy = '465';
				break;
		}
	}
	public function setUsername($username)
	{
		$this->username = $username;
		$host = explode('@', $username)[1];
		$this->setConfig($host);
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function setBeginDate($begin_date)
	{
		$this->begin_date = $begin_date;
	}

	public function setEndDate($end_date)
	{
		$this->end_date = $end_date;
	}

}