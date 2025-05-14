## Mở port 25, 465, 587, 993
- ufw allow 25
- ufw allow 465
- ufw allow 587
- ufw allow 993

## Tạo khóa DKIM
> docker exec -it mailserver setup config dkim