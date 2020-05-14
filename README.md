Mails, PHP Mails
=======================

## Install

The recommended way to install sxstem/mails is through
[Composer](http://getcomposer.org).

```bash
composer require sxstem/mails
```


## Example

- GET
```php
$mail = new \Sxstem\Mails\Imap(username, passwork, [mailbox]);  //The mailbox defaults to inbox

$result = $mail->getFolder(); //get folder

//$result = $mail->getUid();  //before this,you can use $mail->setBeginDate(),$mail->setEndDate() to set bigin date, end date

//$result = $mail->getHeader($uid); //Not passing the uid means getting the headers for all messages under the current mailbox

//$result = $mail->getMsgnoByUid($uid);

//$result = $mail->getBody($msgno);

//$result = $mail->setFolder($mailbox);  //reconnect imap

$mail->imapClose();
```


- Mark
```php
$mail = new \Sxstem\Mails\Mark(username, passwork, [mailbox]);

$result = $mail->set_seen($uid);

//$result = $mail->clear_seen($uid);

//$result = $mail->set_flagged($uid);

//$result = $mail->clear_flagged($uid);

//$result = $mail->set_deleted($uid);

//$result = $mail->set_answered($uid);

//$result = $mail->move_mail($uid, $mailbox);

$mail->imapClose();
<<<<<<< HEAD
```

- SMTP
```php
$mail = new \Sxstem\Mails\Smtp(username, passwork);
// $mail->debug(true);
$result = $mail->send($subject, $to, $cc, $mails_body, $attach, $in_reply_to, $references);
//$cc, $attach, $in_reply_to, $references can be ''
```
=======


#SMTP

$mail = new \Morton\Smtp(username, passwork);

//$mail->setCc($cc);

//$mail->setInReplyTo(in_reply_to);

//$mail->setReferences($references);

//$attach = array(

//[0] = array('filename', base64_encode('content'));

//);

//$mail->setAttach($attach);

$result = $mail->send($subject, $to, $mails_body);
>>>>>>> 1047bf7d39e41052f62692d6151f2504672849e1
