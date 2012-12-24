Websploit-Tests
===============

A place for scripts that describe web exploits to live so they can be used in testing

## Setting up the WebDAV vulnerability

```
sudo apt-get install apache2 libapache2-mod-encoding
sudo a2enmod dav* encoding
sudo mkdir -p <path-to-scripts>/http_put_php
sudo chown www-data. <path-to-scripts>/http_put_php
sudo service apache2 restart
```

**/etc/apache2/conf.d/webdav.conf**:

```
Alias <web-path>/http_put_php <path-to-scripts>/http_put_php

<Location <web-path>/http_put_php>
    DAV On
</Location>
```
