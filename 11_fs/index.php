<?php
// Magic constants
//echo __DIR__.'<br>';
//echo __FILE__.'<br>';
//echo __LINE__.'<br>';

// Create directory
//mkdir('victor.php');
// Rename directory
//rename('victor.php', 'movic2');
// Delete directory
//rmdir('movic');
// Read files and folders inside directory
/*echo file_get_contents('lorem.txt').'<br>';

$can1 = scandir('./');

echo '<pre>';
print_r($can1);
echo '</pre>';

$can = scandir('../');

echo '<pre>';
print_r($can);
echo '</pre>';
*/

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt').'<br>';

echo file_put_contents('sample.txt', 'Ade is a boy').'<br>';
// file_get_contents from URL
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists('lorem.txt');
// is_dir
echo is_dir('11_fs');
// filemtime
// filesize
// disk_free_space
// file