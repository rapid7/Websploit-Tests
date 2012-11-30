Websploit-Tests
===============

A place for scripts that describe web exploits to live so they can be used in testing

## Setting up the WebDAV vulnerability

```
sudo apt-get install apache2 libapache2-mod-encoding
sudo a2enmod dav_fsa2enmod dav
sudo a2enmod dav* encoding
sudo mkdir -p <path-to-scripts>/webdav
sudo chown www-data. <path-to-scripts>/webdav
sudo service apache2 restart
```

```/etc/apache2/conf.d/webdav.conf```

```
Alias <web-path>/webdav <path-to-scripts>/webdav

<Location <web-path>/webdav>
    DAV On
</Location>

```