<?
$showslow_root = '/path/to/showslow/root/';
$showslow_base = 'http://www.example.com/showslow/'; # don't forget the trailing slash

# Database connection information
$db = 'showslow';
$user = 'showslow';
$pass = '... database-password ...';
$host = 'localhost';

# change it if you want to allow other profiles including your custom profiles
$YSlow2AllowedProfiles = array('ydefault', 'yslow1');

# URL of timeplot installation
$TimePlotBase = 'http://api.simile-widgets.org/timeplot/1.1/';
#$TimePlotBase = '/timeplot/';

# to see if your users are visiting the tool, enable Google Analytics
# (for publicly hosted instances)
#$googleAnalyticsProfile = '';

# show Feedback button
$showFeedbackButton = true;

# how old should data be for deletion (in days)
# anything >0 will delete old data
# don't forget to add a cron job to run deleteolddata.php
$oldDataInterval = 0;
