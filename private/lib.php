<?php
/**
 * @param string $method
 * @param string $resource
 * @param array|null $data
 * @return string
 */
function callDataService($method, $resource, $data = null) {
    $url = 'http://host.docker.internal:84/data.php?resource=' . urlencode($resource);
    
    $mock_user_token = 'user-token-abc-123'; // Token mẫu
    $service_key = 'main-app-service-xyz-789'; // Key mẫu

    $headers = [
        'Token: ' . $mock_user_token,
        'Key: ' . $service_key
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    if (strtoupper($method) === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        if ($data) {
            $payload = json_encode($data);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Content-Length: ' . strlen($payload);
        }
    } else {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    }
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        return json_encode(['ok' => false, 'error' => 'service_connection_failed', 'details' => $error_msg]);
    }
    
    curl_close($ch);
    
    return $response;
}
?>