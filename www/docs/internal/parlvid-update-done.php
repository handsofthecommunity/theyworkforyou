<?

$filename = $_POST['filename'];
$data = $_POST['data'];
if (!preg_match('#^[A-Za-z0-9:-]+$#', $filename)) {
	print "Illegal filename";
	exit;
}
if (!$filename || !$data) {
	print "Missing data";
	exit;
}

$fp = fopen("/home/twfy-live/hansard-updates/$filename", 'w');
fwrite($fp, $data);
fclose($fp);

# Doesn't work because of permissions
# XXX Probably will now, but leave for now.
#system("/home/fawkes/fawkes/scripts/update-hansard.pl /home/fawkes/hansard-updates/$filename");
#system("/home/fawkes/fawkes_staging/scripts/update-hansard.pl /home/fawkes/hansard-updates/$filename");

echo 'Done';
