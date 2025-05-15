# nginxscale
Nginx as reverse proxy


## Make a common network
- docker network create web

## UFW Allow port
- Allow port: 25, 80, 443, 465, 587, 993
- Postgresql port: 5432

## Git user
Thiết lập toàn cục (áp dụng cho tất cả repo Git trên máy)

git config --global user.name "Tên Của Bạn"
git config --global user.email "email@example.com"