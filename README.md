# mails


#GET

$mail = new \Morton\Imap(username, passwork, [mailbox]);  //The mailbox defaults to inbox

$result = $mail->getFolder(); //get folder

//$result = $mail->getUid();  //before this,you can use $mail->setBeginDate(),$mail->setEndDate() to set bigin date, end date

//$result = $mail->getHeader($uid); //Not passing the uid means getting the headers for all messages under the current mailbox

//$result = $mail->getMsgnoByUid($uid);

//$result = $mail->getBody($msgno);

//$result = $mail->setFolder($mailbox);  //reconnect imap

$mail->imapClose();


#Mark

$mail = new \Morton\Mark(username, passwork, [mailbox]);

$result = $mail->set_seen($uid);

//$result = $mail->clear_seen($uid);

//$result = $mail->set_flagged($uid);

//$result = $mail->clear_flagged($uid);

//$result = $mail->set_deleted($uid);

//$result = $mail->set_answered($uid);

//$result = $mail->move_mail($uid, $mailbox);

$mail->imapClose();


#SMTP

$mail = new \Morton\Smtp(username, passwork);

//$mail->setCc($cc);

//$mail->setInReplyTo(in_reply_to);

//$mail->setReferences($references);

//$mail->setAttach($attach);

//$attach = array(

//[0] = array('filename', base64_encode('content'));

//);

$result = $mail->send($subject, $to, $mails_body);
