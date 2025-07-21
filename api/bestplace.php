<?php
header('Content-Type: application/json');

// Use Wikipedia API to search for "Tourist attractions in Pakistan"
$search = urlencode('Tourist attractions in Pakistan');
$url = "https://en.wikipedia.org/w/api.php?action=query&list=search&srsearch=$search&format=json";

// Initialize cURL
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Decode Wikipedia response
$data = json_decode($response, true);

$places = [];
if (isset($data['query']['search'])) {
    foreach ($data['query']['search'] as $item) {
        $places[] = [
            'title' => $item['title'],
            'snippet' => strip_tags($item['snippet']),
            'link' => 'https://en.wikipedia.org/wiki/' . urlencode($item['title'])
        ];
    }
}

echo json_encode(['places' => $places]);
?>