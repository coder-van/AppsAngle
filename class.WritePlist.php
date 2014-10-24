<?php
class WritePlist{
	static public function write($filepath,$url,$packge,$version,$name){
		$str='<?xml version="1.0" encoding="UTF-8"?>'
			.'<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">'
			.'<plist version="1.0">'
			.'<dict>'
			.'<key>items</key>'
			.'<array>'
			.'<dict>'
			.'<key>assets</key>'
			.'<array>'
			.'<dict>'
			.'<key>kind</key>'
			.'<string>software-package</string>'
			.'<key>url</key>'
			.'<string>'.$url.'</string>'
			.'</dict>'		
			.'</array>'	
			.'<key>metadata</key>'
			.'<dict>'
			.'<key>bundle-identifier</key>'
			.'<string>'.$packge.'<string>'
			.'<key>bundle-version</key>'
			.'<string>'.$version.'</string>'
			.'<key>kind</key>'
			.'<string>software</string>'
			.'<key>title</key>'
			.'<string>'.$name.'</string>'
			.'</dict>'
			.'</dict>'
			.'</array>'
			.'</dict>'
			.'</plist>';
		$handle=fopen($filepath,"w");
		fwrite($handle,$str);	
		fclose($handle);
	}
}
?>
