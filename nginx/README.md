## Nginx

- chmod -R 755 ./html
- chown -R 1000:1000 ./html  # hoặc uid của nginx container (thường là 1000 hoặc 101)

## Certbot

- Certbot 
> certbot certonly --webroot -w /var/www/html -d phpmyadmin.dotcon.vn