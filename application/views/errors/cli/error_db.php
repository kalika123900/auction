<?php
$response =  [];
	$response['status'] = false;
	$response['message'] = $message;
	$response['data'] = '';
	echo json_encode($response); die();