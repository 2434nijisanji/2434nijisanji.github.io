<?php
include_once "./../../../vendor/autoload.php";

use App\Helper\Redirect;
use App\Repositories\MessageRepository;

$id = $_GET['id'];

$messageRepository = new MessageRepository();
$messageRepository->delete($id);

new Redirect("");