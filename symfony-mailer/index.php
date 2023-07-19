<?php
require_once __DIR__.'/vendor/autoload.php';
echo "<h3 style='text-align:center'>Symfony Mailer Package</h3>";

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

// Tranposrt::fromDsn()
// public static function fromDsn(string $dsn, EventDispatcherInterface $dispatcher = null, HttpClientInterface $client = null, LoggerInterface $logger = null): TransportInterface

$transport = Transport::fromDsn('smtp://22690c7a44ee97:67e1a7b9977246@sandbox.smtp.mailtrap.io:2525?encryption=tls&auth_mode=login');
$mailer = new Mailer($transport);

$email = (new Email())
    ->from('sender@example.com')
    ->to('recepeint@example.com')
    ->subject('Time for Symfony Mailer!')
    ->attachFromPath('request-cycle.png')
    ->html('<p>See Twig integration for better HTML integration!</p><img alt="not found" src="https://picsum.photos/id/237/200/300">');

try {
    $mailer->send($email);
    echo "mail sent successfully.";
} catch (\Throwable $th) {
    echo "<pre>";
    print_r($th);
}
