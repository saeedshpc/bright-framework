# bright-framework

php mvc framework 

add these to httpd.conf and edit variables
```php
<VirtualHost 127.0.0.1:80>
	ServerName yourServerName
        DocumentRoot "your document root address"
</VirtualHost>

<Directory "your document root address">
    Options Indexes FollowSymLinks
    AllowOverride All
    Order Allow,Deny
    Allow From All
</Directory>
```