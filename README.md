# bright-framework

php mvc framework 

for workng Local : add these to httpd.conf and edit variables
```
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
in case of using this framework on a web host/server just upload and change public to public_html
