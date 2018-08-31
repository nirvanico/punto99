<?php
// This can be your index.php, for example.
require __DIR__ . '/vendor/autoload.php';

// At this point, you can start using the SDK. Keep reading!

$WT_API_KEY='MNPYMS7Owc64Lv6fVxRtw34EScWzlRyC39rntpz2';

echo "Authenticating...\n";
WeTransfer\Client::setApiKey($WT_API_KEY);

echo "Creating a transfer...\n";
$transfer = WeTransfer\Transfer::create('Test transfer');

echo "Adding a link...\n";
$transfer = WeTransfer\Transfer::addLinks($transfer, [
    [
        'url' => 'https://en.wikipedia.org/wiki/Japan',
        'meta' => [
            'title' => 'Japan'
        ]
    ]
]);
echo "Adding a file...\n";
$transfer = WeTransfer\Transfer::addFiles($transfer, [
    [
        'filename' => 'Japan-01.jpg',
        'filesize' => 13370099
    ]
]);
echo "Uploading a file...\n";
foreach ($transfer->getFiles() as $file) {
    WeTransfer\File::upload($file, fopen(realpath('./files/Japan-01.jpg'), 'r'));

}


echo "Transfer URL: {$transfer->getShortenedUrl()}\n";
