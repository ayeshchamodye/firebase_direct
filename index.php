<?php
// The JSON string
$json = '{"status":"true","data":{"file":{"url":{"directDownload":"https://download2278.mediafire.com/zuorsgdpvlagUERkk7qYH_Lt7YbXFQEiHgezIjNqALKQsVGOGTX4xF4sEmWSj_XYw9jV8tb8T_Q6oaMQosJfBvZdHTEkflHKd-QCQPCt0fWVcS13ShjyFWSioTI_VVgTETsqg7S23jW8bPLKFvGO6HtS5MtsQqfSOQKufsp-d4fF/5tn6rebctezdqlt/MCPEIndir+1.1.apk","original":"https://www.mediafire.com/file/5tn6rebctezdqlt/MCPEIndir 1.1.apk"},"metadata":{"id":"5tn6rebctezdqlt","name":"MCPEIndir1.1","size":{"readable":"1.66MB"},"DateAndTime":{"time":"10:50:44","date":"2015-11-15"}}}}}';

// Decode the JSON string into a PHP associative array
$array = json_decode($json, true);

// Access the value of the directDownload key
$value = $array['data']['file']['url']['directDownload'];

// Return or echo the value as needed
//return $value;
// or
echo $value;
//$value;
?>
